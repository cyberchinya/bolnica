<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Korupcia;

class KorupciaController extends Controller
{
    public function index()
    {
         return view('korupcia', [

        ]);
    }
}
