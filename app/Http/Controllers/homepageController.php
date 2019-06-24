<?php

namespace App\Http\Controllers;

use App\Bike;
use App\BikePicture;
use App\Product;
use Illuminate\Http\Request;

class homepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bikes = Bike::all()->sortByDesc('additionDate');
        $bikepictures = BikePicture::all();
        return view("welcome", compact('bikes', 'bikepictures'));
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
     * @param  \App\Fietsen  $fietsen
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bike = Bike::find($id);
        if ($bike === null or $bike->forsale ==0){
            return view('404');

        }else {
            return view('products.product_details', compact('bike'));
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
    public function update(Request $request, Fietsen $fietsen)
    {
        //
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
}
