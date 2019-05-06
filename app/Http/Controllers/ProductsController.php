<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }
    public function create()
    {

        return view('products.create', compact('products'));

    }
    public function store()
    {
        $product = new Product();

        $product->name = request('name');
        $product->description = request('description');

        $product->save();


        return redirect('/products'); // redirecten naar een pagina waarop staat product is succesvol toegevoegd
    }
}
