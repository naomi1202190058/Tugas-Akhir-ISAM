<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RkuController extends Controller
{
    public function rkuUkm() {
        return view("ukm.rku.index");
    }

    public function createRku() {
        return view("ukm.rku.create");
    }

    public function status($param) {
        $kegiatan = [];

        if($param == "ml") {
            $kegiatan = [
                "nama" => "Tournament Mobile Legend",
                "lokasi" => "Telkom University Landmark Tower (TULT) - Lantai 3",
                "sdgs" => "SDGs (9); Industri, Inovasi dan Infrastruktur",
                "tanggal_mulai" => "1 Mei 2023",
                "tanggal_berakhir" => "7 Mei 2023",
                "gambar" => "ml",
                "status" => "revisi"
            ];
        } elseif ($param == "pubg") {
            $kegiatan = [
                "nama" => "Tournament PUBG",
                "lokasi" => "Telkom University Landmark Tower (TULT) - Lantai 3",
                "sdgs" => "SDGs (9); Industri, Inovasi dan Infrastruktur",
                "tanggal_mulai" => "7 Februari 2023",
                "tanggal_berakhir" => "12 Februari 2023",
                "gambar" => "pubg",
                "status" => "pending"
            ];
        } elseif ($param == "codm") {
            $kegiatan = [
                "nama" => "Tournament CODM",
                "lokasi" => "Telkom University Landmark Tower (TULT) - Lantai 3",
                "sdgs" => "SDGs (9); Industri, Inovasi dan Infrastruktur",
                "tanggal_mulai" => "5 Januari 2023",
                "tanggal_berakhir" => "8 Januari 2023",
                "gambar" => "codm",
                "status" => "acc"
            ];
        } else {
            $kegiatan = [
                "nama" => "Tournament Valorant",
                "lokasi" => "Telkom University Landmark Tower (TULT) - Lantai 3",
                "sdgs" => "SDGs (9); Industri, Inovasi dan Infrastruktur",
                "tanggal_mulai" => "5 Desember 2023",
                "tanggal_berakhir" => "12 Desember 2023",
                "gambar" => "valo",
                "status" => "acc"
            ];
        };

        return view("ukm.rku.status", compact("kegiatan"));
    }

    public function waiting() {
        return view("ditmawa.rku.waiting");
    }

    public function approved() {
        return view("ditmawa.rku.approved");
    }

    public function declined() {
        return view("ditmawa.rku.declined");
    }
}
