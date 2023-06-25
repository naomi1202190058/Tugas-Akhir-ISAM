<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LpjController extends Controller
{
    public function index() {
        if(auth()->user()->role == "ukm") {
            return view("ukm.lpj");
        } else {
            return view("ditmawa.lpj.index");
        }
    }

    public function lpjDetail() {
        return view("ditmawa.lpj.lpj-detail");
    }

    public function postLpj() {
        return redirect("/lpj")->with("success", "LPJ berhasil diupload");
    }

    public function postLpjDetail(Request $request) {
        return redirect("/lpj/lpj-detail")->with("success", ["Status LPJ berhasil diubah", $request->aksi, $request->catatan]);
    }
}
