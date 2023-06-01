<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index() {
        if(session()->get("role") == "ukm") {
            return view("ukm.beranda");
        } else {
            return view("ditmawa.beranda");
        }
    }
}
