<?php

namespace App\Http\Controllers;

use App\Customer;
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Klanten  $klanten
     * @return \Illuminate\Http\Response
     */
    public function show(Klanten $klanten)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Klanten  $klanten
     * @return \Illuminate\Http\Response
     */
    public function edit(Klanten $klanten)
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
    public function update(Request $request, Klanten $klanten)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Klanten  $klanten
     * @return \Illuminate\Http\Response
     */
    public function destroy(Klanten $klanten)
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
