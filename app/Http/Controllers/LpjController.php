<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LpjController extends Controller
{
    public function index() {
        if(session()->get("role") == "ukm") {
            return view("ukm.lpj");
        } else {
            return view("ditmawa.lpj.index");
        }
    }

    public function lpjDetail() {
        return view("ditmawa.lpj.lpj-detail");
    }
}
