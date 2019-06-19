<?php

namespace App\Http\Controllers;

use App\Bike;
use App\BikeCatagory;
use App\Customer;
use App\Order;
use App\OrderItem;
use App\Review;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class gebruikerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleAllowed($else)
    {
        if(!Auth::check() || !Auth::user()->isEmployee)
        {
            return redirect("/login");
        }

        return $else;
    }

    public function index()
    {
       $bikes = Bike::all();
        $users = User::all();
        $reviews = Review::all();
        $orders = Order::all();

        return $this->handleAllowed(view("admin.admin", compact('bikes', 'users', 'reviews', 'orders')));

        //if(Auth::check() && Auth::user()->isEmployee)
        //{
            //return view("admin.admin", compact('bikes', 'users', 'reviews', 'orders'));
        //}

        //return redirect("/login");
    }
    public function products()
    {
        $bikes = Bike::paginate(6);

        return $this->handleAllowed(view("admin.products", compact('bikes')));

        //return view("admin.products", compact('bikes'));

    }
    public function users()
    {
        $users = User::paginate(6);

        return $this->handleAllowed(view("admin.users", compact('users')));

    }
    public function orders()
    {
        $orders = Order::paginate(6);
        return $this->handleAllowed(view("admin.orders", compact('orders')));

    }
    public function reviews()
    {
        $reviews = Review::paginate(6);
        return $this->handleAllowed(view("admin.reviews", compact('reviews')));

    }
    public function showorder($id)
    {
        $order = Order::find($id);
        $orderitems = OrderItem::query()->where('BestellingID', '=', $order->id)->get()->all();

//        $orderitems = OrderItem::where($id);
        $customer = User::find($order->klantID);

        $bikes = Bike::all();;

        return $this->handleAllowed(view("admin.order.show", compact('bikes','customer','order' , 'orderitems')));

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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

    }
    public function storeproduct()
    {
      $bike = new Bike();


      $bike->naam = request('naam');
      $bike->merk =  request('merk');
      $bike->typeId = request('type');
        $bike->prijs = request('prijs');
        $bike->aanbiedingsprijs = request('aanbieding');
        $bike->omschrijving = request('omschrijving');
        $bike->additionDate = now();
        $bike->versnellingen = request('versnellingen');
        $bike->kleur = 'Geel';
        $bike->bagagedrager = 1;
        $bike->forSale = 1;

        $bike->save();
        return $this->handleAllowed(redirect("admin/products/overview"));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Gebruiker  $gebruiker
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    }
    public function createproduct()
    {
        $categories = BikeCatagory::all();

        return $this->handleAllowed(view("admin.products.create", compact('categories')));

    }
    public function editproduct($id)
    {
        $bike = Bike::find($id);
        $categorySelected = BikeCatagory::find($bike->typeId);
        $categories = BikeCatagory::all();

        return $this->handleAllowed(view("admin.products.edit", compact('bike','categories', 'categorySelected' )));

    }
    public function editreview($id)
    {
        $review = Review::find($id);
        $customer = User::find($review->KlantID);



        return $this->handleAllowed(view("admin.reviews.edit", compact('review','customer' )));

    }

    public function editexistingproduct($id)
    {
        $bike = Bike::find($id);
        $bike->naam = request('naam');
        $bike->merk =  request('merk');
        $bike->typeId = request('type');
        $bike->prijs = request('prijs');
        $bike->aanbiedingsprijs = request('aanbieding');
        $bike->omschrijving = request('omschrijving');
        $bike->additionDate = now();
        $bike->versnellingen = request('versnellingen');
        $bike->kleur = 'Geel';
        $bike->bagagedrager = 1;
        $bike->forSale = 1;

        $bike->save();

        return $this->handleAllowed(redirect("admin/products/overview"));

    }
    public function edituser($id)
{
    $user = User::find($id);

    return $this->handleAllowed(view("admin.users.edit", compact('user')));

}
    public function deleteproduct($id)
    {
        $bike = Bike::find($id);

        $bike ->delete();
        return $this->handleAllowed(redirect("admin/products/overview"));

    }
    public function deleteorder($id)
    {
        $order = Order::find($id);
        $orderitems = OrderItem::query()->where('BestellingID', '==', $order->id);
        $orderitems->delete();
        $order->delete();
        return $this->handleAllowed(redirect("admin/products/overview"));

    }
    public function deleteuser($id)
    {
        $user = User::find($id);
        $user->orders()->delete();

        $user->delete();
        return $this->handleAllowed(redirect("admin/users/overview"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gebruiker  $gebruiker
     * @return \Illuminate\Http\Response
     */
    public function edit(Gebruiker $gebruiker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gebruiker  $gebruiker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gebruiker $gebruiker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gebruiker  $gebruiker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gebruiker $gebruiker)
    {
        //
    }
}
