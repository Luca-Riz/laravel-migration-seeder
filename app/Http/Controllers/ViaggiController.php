<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class ViaggiController extends Controller
{
    public function home() {

        $pippo = Trip::all();
        // dd($pippo[0]);
        $data = ['viaggi'=>$pippo];

        return view('home', $data);
    }
} 
