<?php

namespace App\Http\Controllers;
use App\Models\Product as ModelsProduct;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = ModelsProduct::inRandomOrder()->take(6)->get();

        return view('products.index')->with('products',$products);
    }













}
