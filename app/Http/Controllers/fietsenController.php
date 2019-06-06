<?php

namespace App\Http\Controllers;

use App\Bike;
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
        $bikes = Bike::all();
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

        if(request('search')!= "Zoek")
        {
            $collection = Bike::query()->where('naam', 'LIKE', '%'.request('search').'%')->get();

        }
        $categories = BikeCatagory::all();
        $brands = $collection->pluck('merk')->unique();

        if (request('category')!= 0) {
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



        $bikes = $filteredGears;
        if (request('pricefilter')== 1 ) {
            $bikes = $bikes->sortBy('prijs');
        }
        elseif (request('pricefilter')== 2 ) {
            $bikes = $bikes->sortByDesc('prijs');
        }





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
