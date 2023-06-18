<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index() {
        return view("ukm.profil.index");
    }

    public function edit() {
        return view("ukm.profil.edit");
    }

    public function editBagan() {
        return redirect("/profile")->with("success", "Berhasil memperbarui bagan");
    }

    public function editProfile() {
        return redirect("/profile")->with("success", "Berhasil mengedit profil");
    }
}
