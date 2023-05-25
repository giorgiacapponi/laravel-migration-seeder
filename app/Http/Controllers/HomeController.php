<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $trains=Train::where('scheduled',date('Y-m-d'))->get();
        return view('home',compact('trains'));
    }
}
