<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FallbackCOntroller extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //dd('blabla');
        return view('pages.fallback');
    }
}
