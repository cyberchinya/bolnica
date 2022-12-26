<?php

namespace App\Http\Controllers;

use App\Models\Structure;
use Illuminate\Http\Request;

class StructuraController extends Controller
{
    public function index()
    {
        $structura = Structure::all();

        return view('structura', [
            'structura' => $structura,
        ]);
    }
}
