<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index() {
        return view("ditmawa.banner.index");
    }

    public function tambah() {
        return view("ditmawa.banner.tambah");
    }

    public function postBanner() {
        return redirect("/banner")->with("success", "Berhasil menambahkan banner");
    }

    public function deleteBanner() {
        return redirect("/banner")->with("success", "Berhasil menghapus banner");
    }
}
