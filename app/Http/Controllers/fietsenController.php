<?php

namespace App\Http\Controllers;

use App\Bike;
use App\BaseCollection;
use App\BikeCatagory;
use App\BikePicture;
use App\Order;
use App\OrderItem;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class fietsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection =  Bike::where('forSale', '=', 1);
        $bikes = $collection->paginate(6);
        $categories = BikeCatagory::all();
        $images = BikePicture::all();

        $brands = $bikes->pluck('merk')->unique();


        return view("products.index", compact('bikes','categories','brands', 'images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function filter()
    {
        $collection = Bike::where('forSale', '=', 1);
        $brands = $collection->pluck('merk')->unique();
        $images = BikePicture::all();

        if(request('search')!= "Zoek")
        {
            $collection = Bike::where('naam', 'LIKE', '%'.request('search').'%')->get();

        }
        $categories = BikeCatagory::all();

        if (request('category')!= 0) {                                      //if statements zorgen dat de resultaten een aantal keer gefilterd wordt
            $filtered = $collection->filter(function ($value, $key) {
                return $value->typeId == request('category');
            });
        }
        else{
            $filtered = $collection;
        }

        if (request('brand')!= 'none') {
            $filteredbrands = $filtered->filter(function ($value, $key) {
                return $value->merk == request('brand');
            });
        }
        else{
            $filteredbrands  =  $filtered;
        }

        if (request('gears')!= 0 && request('gears')!= 6 ) {
            $filteredGears = $filteredbrands->filter(function ($value, $key) {
                return $value->versnellingen == request('gears');
            });
        }
        elseif (request('gears')== 6) {
            $filteredGears = $filteredbrands->filter(function ($value, $key) {
                return $value->versnellingen > 6;
            });
        }
        else{
            $filteredGears = $filteredbrands;
        }




        $result = $filteredGears;
        if (request('pricefilter')== 1 ) {
            $result = $result->sortBy('prijs');
        }
        elseif (request('pricefilter')== 2 ) {
            $result = $result->sortByDesc('prijs');
        }

        $bikes= $result->paginate(6);




        return view("products.index", compact('bikes','categories', 'brands', 'images'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fietsen  $fietsen
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bike = Bike::find($id);
        $pictures = BikePicture::all();


//            dd($pictures);

        $categories = BikeCatagory::all();
        if ($bike === null){
            return view('404');
        }
        else if ($bike->forSale ==0)
        {
            return view('403');
        }
        else {
            return view('products.product_details', compact('bike', 'categories','pictures'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fietsen  $fietsen
     * @return \Illuminate\Http\Response
     */
    public function edit(Fietsen $fietsen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fietsen  $fietsen
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fietsen  $fietsen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fietsen $fietsen)
    {
        //
    }
    public function cart()
    {
        $bikepictures = BikePicture::all();
        return view('cart', compact('bikepictures'));
    }
    public function addToCart($id)
    {
        $product = Bike::find($id);

        if(!$product) {

            abort(404);

        }

        $cart = session()->get('cart');

        if(!$cart) {

            $cart = [
                $id => [
                    "name" => $product->naam,
                    "quantity" => $product->id,
                    "price" => $product->prijs,
                    "aanbiedingsprijs" => $product->aanbiedingsprijs

                ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Toegevoegd aan winkelwagen!');
        }

        // if cart not empty then check if this product exist then increment quantity


        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->naam,
            "quantity" => $product->id,
            "price" => $product->prijs,
            "aanbiedingsprijs" => $product->aanbiedingsprijs
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Toegevoegd aan winkelwagen!');
    }
    public function placeorder()
    {
        if (!Auth::check())
        {
            $location = "/cart";
            return redirect("/login", compact("location"));
        }
        $carts = session()->get('cart');

        $order = new Order();
        $user = auth()->user();
        $order->klantID = $user->id;
        $order->postcode = $user->Postcode;


        $order->straat = $user->Straat;
        $order->huisnr = $user->Huisnr;
        $order->plaats = $user->Plaats;
        $order->statusID = 1;
        $order->bestelDatum =now();
        $order->leverDatum =now();
        $order->save();


        foreach ($carts as $cart)
        {
            $bike = Bike::find($cart["quantity"]);
            $bike->forSale = 0;
            $bike->save();
            $orderitem = new OrderItem();
            $orderitem->ProductID = $cart["quantity"];
            $orderitem->BestellingID = $order->id;
            $orderitem->save();
        }

        Session::forget('cart');
        return redirect()->back()->with('success', 'Bedankt voor Uw Bestelling!');

    }
}
