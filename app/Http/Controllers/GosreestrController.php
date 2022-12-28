<?php

namespace App\Http\Controllers;

use App\Models\Gosreestr;
use Illuminate\Http\Request;

class GosreestrController extends Controller
{
    public function index()
    {
        $gosreestr = Gosreestr::all();

        return view('gosreestr', [
            'gosreestr' => $gosreestr,
        ]);
    }
}
