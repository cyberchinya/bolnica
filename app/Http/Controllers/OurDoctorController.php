<?php

namespace App\Http\Controllers;

use App\Models\Ourdoctor;
use Illuminate\Http\Request;

class OurDoctorController extends Controller
{
    public function index()
    {
        $ourdoctor = Ourdoctor::all();
        return view('ourdoctor', [
            'ourdoctor' => $ourdoctor
        ]);
    }
}

