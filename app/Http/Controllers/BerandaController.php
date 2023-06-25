<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index() {
        if(auth()->user()->role == "ukm") {
            return view("ukm.beranda");
        } else {
            return view("ditmawa.beranda");
        }
    }
}
