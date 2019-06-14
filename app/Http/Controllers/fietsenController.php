<?php

namespace App\Http\Controllers;

use App\Bike;
use App\BaseCollection;
use App\BikeCatagory;
use App\Product;
use Illuminate\Http\Request;

class fietsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bikes = Bike::paginate(6);
        $categories = BikeCatagory::all();
        $brands = $bikes->pluck('merk')->unique();


        return view("products.index", compact('bikes','categories','brands'));
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
        $collection = Bike::all();
        $brands = $collection->pluck('merk')->unique();

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




        return view("products.index", compact('bikes','categories', 'brands'));
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
        $categories = BikeCatagory::all();
        if ($bike === null){
            return view('404');
        }
        else if ($bike->forSale ==0)
        {
            return view('403');
        }
        else {
            return view('products.product_details', compact('bike', 'categories'));
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
        return view('cart');
    }
    public function addToCart($id)
    {
        $product = Bike::find($id);

        if(!$product) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                $id => [
                    "name" => $product->naam,
                    "id" => $product->id,
                    "price" => $product->prijs,
                    "photo" => $product->photo

                ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity


        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->naam,
            "quantity" => $product->id,
            "price" => $product->prijs,
            "photo" => $product->photo
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function placeorder()
    {
        $carts = session()->get('cart');
        foreach ($carts as $cart)

        dd($cart["quantity"]);
    }
}
