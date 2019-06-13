<?php

namespace App\Http\Controllers;

use App\Bike;
use App\BikeCatagory;
use App\User;
use Illuminate\Http\Request;

class gebruikerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $bikes = BikeCatagory::all();

        return view("admin.admin", compact('bikes'));

    }
    public function products()
    {
        $bikes = Bike::all();

        return view("admin.products", compact('bikes'));

    }
    public function users()
    {
        $users = User::all();

        return view("admin.users", compact('users'));

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
    public function store(Request $request)
    {
        //
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

    public function editproduct($id)
    {
        $bike = Bike::find($id);
        $categorySelected = BikeCatagory::find($bike->typeId);
        $categories = BikeCatagory::all();

        return view("admin.products.edit", compact('bike','categories', 'categorySelected' ));

    }
    public function edituser($id)
{
    $user = User::find($id);

    return view("admin.users.edit", compact('user'));

}
    public function deleteproduct($id)
    {
        $bike = Bike::find($id);

        $bike ->delete();
        return redirect("admin/products/overview");

    }
    public function deleteuser($id)
    {
        $user = User::find($id);

        $user->delete();
        return redirect("admin/users/overview");

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
