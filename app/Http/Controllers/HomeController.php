<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {

        $products = Product::orderByDesc('created_at')->get();
        $brands = Brand::select(['name'])
        ->withCount('products')
        ->get();
    // dd($brands);
        return view('pages.home', compact(['brands', 'products']));
     
    }
}
