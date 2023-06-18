<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RaporController extends Controller
{
    public function index() {
        if(session()->get("role") == "ukm") {
            return view("ukm.rapor");
        } else {
            return view("ditmawa.rapor.index");
        }
    }

    public function raporDetail() {
        return view("ditmawa.rapor.rapor-detail");
    }

    public function prokerDetail() {
        return view("ditmawa.rapor.proker-detail");
    }

    public function postProkerDetail() {
        return redirect("/rapor/rapor-detail/proker-detail")->with("success", "Nilai rapor tersimpan");
    }
}
