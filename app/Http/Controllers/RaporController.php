<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RaporController extends Controller
{
    public function index() {
        if(auth()->user()->role == "ukm") {
            return view("ukm.rapor");
        } else {
            return view("ditmawa.rapor.index");
        }
    }

    public function raporDetail() {
        return view("ditmawa.rapor.rapor-detail");
    }

    public function penilaianDetail() {
        return view("ditmawa.rapor.penilaian-detail");
    }

    public function ukmTerbaik() {
        return view("ukm-terbaik");
    }

    public function postPenilaian(Request $request) {
        return redirect("/rapor/rapor-detail")->with("success", ["Nilai rapor tersimpan", $request->nilai_kegiatan, $request->keterangan]);
    }
}
