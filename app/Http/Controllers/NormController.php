<?php

namespace App\Http\Controllers;

use App\Models\Norm;
use Illuminate\Http\Request;

class NormController extends Controller
{
    public function index()
    {
        $norm = Norm::all();

        return view('norm', [
            'norm' => $norm,
        ]);
    }
}
