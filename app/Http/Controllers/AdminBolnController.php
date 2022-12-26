<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminBoln;

class AdminBolnController extends Controller
{
   public function index()
   {
       $adminboln = AdminBoln::all();
       return view('adminboln',
           [
           'adminboln' => $adminboln
       ]);
   }
}
