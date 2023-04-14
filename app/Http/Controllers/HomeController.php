<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {

        $categories = Category::all();
        

        $products = Product::with('category', 'brand')->orderByDesc('created_at')->get();
        $brands = Brand::select(['name'])
        ->withCount('products')
        ->get();
        // dd($products);
    // dd($brands);
        return view('pages.home', compact(['brands', 'products','categories']));
     
    }
}

