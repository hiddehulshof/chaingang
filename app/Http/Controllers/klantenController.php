<?php

namespace App\Http\Controllers;

use App\Customer;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class klantenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $customer = new User();
        $customer->Voornaam = request("firstname");
        $customer->Tussenvoegsel = request("firstname");
        $customer->Achternaam = request("lastname");
        $customer->Email = request("email");
        $customer->Wachtwoord = request("password");
        $customer->Postcode = request("zipcode");
        $customer->Straat = request("street");
        $customer->Huisnr = request("housenumber");
        $customer->Plaats = request("city");
        $customer->TelefoonNR = request("telephone");
        $customer->isEmployee = 0;
        $customer->Gebruikersnaam = request("email");
        $customer->isAdmin = 0;

        $customer->save();

        return view("login-page");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Klanten  $klanten
     * @return \Illuminate\Http\Response
     */
    public function show(User $customer)
    {
            $user = Auth::user();
            return view("customers.profile", compact("user"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Klanten  $klanten
     * @return \Illuminate\Http\Response
     */
    public function edit(User $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Klanten  $klanten
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Klanten  $klanten
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $customer)
    {
        //
    }

    public function login()
    {
        $Email = \request("email");
        $pass = \request("password");
        $remember = \request("remember");

        $userdata = array(
            'email'     => request("email"),
            'password'  => request("password")
        );

        if (Auth::attempt($userdata))
        {
            return view("/");
        }

        $user = Customer::query()->where("Email", "LIKE", $Email)->where("wachtwoord", "LIKE", $pass)->first();
        if ($user == null)
        {
            return back()->withInput();
        }
        dd($user);
    }
}
