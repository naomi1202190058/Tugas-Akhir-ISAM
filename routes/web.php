<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BannerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RkuController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\LpjController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\RaporController;
use App\Http\Controllers\UkmController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route Login  
Route::get('/login', [AuthController::class, "login"])->name("login");
Route::get('/reset-password', [AuthController::class, "resetPassword"]);
Route::post('/reset-password', [AuthController::class, "postResetPassword"]);
Route::post('/authenticate', [AuthController::class, "authenticate"]);
Route::get('/logout', [AuthController::class, "logout"]);

// Route Beranda
Route::get('/', [BerandaController::class, "index"])->middleware("auth");

// Route UKM
Route::get("/ukm", [UkmController::class, "index"]);
Route::get("/ukm/tambah", [UkmController::class, "tambah"]);
Route::post("/ukm/tambah", [UkmController::class, "postUkm"]);

// Route RKU
Route::get("/rku", [RkuController::class, "index"]);
Route::get("/rku/status/{param}", [RkuController::class, "status"]);
Route::get("/rku/create", [RkuController::class, "createRku"]);
Route::post("/rku/create", [RkuController::class, "postRkuUkm"]);
Route::get("/rku/waiting", [RkuController::class, "waiting"]);
Route::post("/rku/waiting", [RkuController::class, "postRkuDitmawa"]);
Route::get("/rku/approved", [RkuController::class, "approved"]);
Route::get("/rku/declined", [RkuController::class, "declined"]);

// Route Proposal
Route::get("/proposal/pengajuan", [ProposalController::class, "pengajuan"]);
Route::post("/proposal/pengajuan", [ProposalController::class, "postPengajuan"]);
Route::get("/proposal/monitoring", [ProposalController::class, "monitoring"]);
Route::post("/proposal/pilih-jadwal", [ProposalController::class, "pilihJadwal"]);
Route::post("/proposal/edit-jadwal", [ProposalController::class, "editJadwal"]);
Route::get("/proposal/monitoring/waiting", [ProposalController::class, "waiting"]);
Route::post("/proposal/monitoring/waiting", [ProposalController::class, "postStatus"]);
Route::get("/proposal/monitoring/approved", [ProposalController::class, "approved"]);
Route::get("/proposal/monitoring/declined", [ProposalController::class, "declined"]);

// Route Profile
Route::get("/profile", [ProfilController::class, "index"]);
Route::post("/profile", [ProfilController::class, "editBagan"]);
Route::get("/profile/edit", [ProfilController::class, "edit"]);
Route::post("/profile/edit", [ProfilController::class, "editProfile"]);

// Route LPJ
Route::get("/lpj", [LpjController::class, "index"]);
Route::post("/lpj", [LpjController::class, "postLpj"]);
Route::get("/lpj/lpj-detail", [LpjController::class, "lpjDetail"]);
Route::post("/lpj/lpj-detail", [LpjController::class, "postLpjDetail"]);

// Route Rapor
Route::get("/rapor", [RaporController::class, "index"]);
Route::get("/rapor/ukm-terbaik", [RaporController::class, "ukmTerbaik"]);
Route::get("/rapor/rapor-detail", [RaporController::class, "raporDetail"]);
Route::get("/rapor/rapor-detail/penilaian-detail", [RaporController::class, "penilaianDetail"]);
Route::post("/rapor/rapor-detail/penilaian-detail", [RaporController::class, "postPenilaian"]);

// Route Banner 
Route::get("/banner", [BannerController::class, "index"]);
Route::get("/banner/tambah", [BannerController::class, "tambah"]);
Route::get("/banner/riwayat", [BannerController::class, "riwayat"]);
Route::post("/banner/riwayat", [BannerController::class, "postRiwayat"]);
Route::post("/banner/tambah", [BannerController::class, "postBanner"]);
Route::delete("/banner", [BannerController::class, "deleteBanner"]);

// Route FAQ
Route::get("/faq", [FaqController::class, "index"]);
Route::get("/faq/tambah", [FaqController::class, "tambah"]);
Route::post("/faq/tambah", [FaqController::class, "postTambah"]);