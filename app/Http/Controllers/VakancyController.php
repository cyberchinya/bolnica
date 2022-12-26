<?php

namespace App\Http\Controllers;

use App\Models\Vakancy;
use Illuminate\Http\Request;

class VakancyController extends Controller
{
    public function index()
    {
        $vakancy = Vakancy::all();

        return view('vakancy', [
            'vakancy' => $vakancy,
        ]);
    }

}
