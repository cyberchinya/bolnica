<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoprosController extends Controller
{
    public function index()
    {
       return view('vopros');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required','string'],
            'email' => ['required','string'],
            'phone' => ['required','min_digits:7'],
            'message' => ['required','string','max:100']
        ]);
    }
}
