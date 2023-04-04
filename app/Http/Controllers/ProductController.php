<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    /**
     * Display a product of the resource.
     */
    // Show all products
    public function index() {
        return view('products.index', [
            'products' => Product::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    }

    //Show single product
    public function show(Product $product) {
        return view('products.show', [
            'product' => $product
        ]);
    }

    // Show Create Form
    public function create() {

        return view('products.create');
    }

    // Store product Data
    public function store(Request $request) {
        dd($request);
        $formFields = $request->validate([
            'name' => 'required',
            'description' => ['required', Rule::unique('products', 'company')],
            'price' => 'required',
            'dagavornaya' => 'required',
            'model' => ['required', 'email'],
            'kuzov' => 'required',
            'prabeg' => 'required',
            'karobka' => 'required',
            'color' => ['required', Rule::unique('products', 'company')],
            'oil' => 'required',
            'xolati' => 'required',
            'address' => ['required', 'email'],
            'user_name' => 'required',
            'number' => 'required'
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Product::create($formFields);

        return redirect('/')->with('message', 'product created successfully!');
    }

    // Show Edit Form
    public function edit(Product $product) {
        return view('products.edit', ['product' => $product]);
    }

    // Update product Data
    public function update(Request $request, Product $product) {
        // Make sure logged in user is owner
        // if($product->user_id != auth()->id()) {
        //     abort(403, 'Unauthorized Action');
        // }
        
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required'],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        // if($request->hasFile('logo')) {
        //     $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        // }

        $product->update($formFields);

        return back()->with('message', 'product updated successfully!');
    }

    // Delete product
    // public function destroy(Product $product) {
    //     // Make sure logged in user is owner
    //     if($product->user_id != auth()->id()) {
    //         abort(403, 'Unauthorized Action');
    //     }
        
    //     $product->delete();
    //     return redirect('/')->with('message', 'product deleted successfully');
    // }

    // // Manage products
    // public function manage() {
    //     return view('products.manage', ['products' => auth()->user()->products()->get()]);
    // }
}
