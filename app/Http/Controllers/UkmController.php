<?php

namespace App\Http\Controllers;

use App\Models\UKM;
use Illuminate\Http\Request;

class UkmController extends Controller
{
    public function index() {
        $ukmList = UKM::all();

        return view("ukm-list", compact("ukmList"));
    }

    public function tambah() {
        return view("ditmawa.tambah-ukm");
    }

    public function postUkm() {
        return redirect("/ukm")->with("success", "Berhasil menambahkan UKM baru");
    }

    public function editStatus(Request $request, UKM $ukm) {
        $ukm->update(["status_ukm" => $request->status]);

        return redirect("/ukm")->with("success", $request->status == "aktif" ? "UKM berhasil diaktifkan" : "UKM berhasil dinonaktifkan");
    }
}
