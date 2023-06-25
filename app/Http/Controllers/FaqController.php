<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index() {
        if(auth()->user()->role == "ukm") {
            return view("ukm.faq");
        } else {
            return view("ditmawa.faq.index");
        }
    }

    public function tambah() {
        return view("ditmawa.faq.tambah");
    }

    public function postTambah() {
        return redirect("/faq")->with("success", "Berhasil menambahkan FAQ");
    }
}
