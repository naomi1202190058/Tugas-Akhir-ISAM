<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RkuController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LpjController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\RaporController;

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
Route::get('/login/ukm', [AuthController::class, "loginUkm"])->name("login");
Route::get('/login/ditmawa', [AuthController::class, "loginDitmawa"]);
Route::post('/authenticate/ukm', [AuthController::class, "authenticateUkm"]);
Route::post('/authenticate/ditmawa', [AuthController::class, "authenticateDitmawa"]);
Route::get('/logout', [AuthController::class, "logout"]);

// Route Beranda
Route::get('/', [BerandaController::class, "index"])->middleware("auth:ditmawa,ukm");

// Route UKM
Route::get("/ukm", function() {
  return view("ukm-list");
});

// Route RKU
Route::get("/rku", [RkuController::class, "rkuUkm"]);
Route::get("/rku/status/{param}", [RkuController::class, "status"]);
Route::get("/rku/create", [RkuController::class, "createRku"]);
Route::get("/rku/waiting", [RkuController::class, "waiting"]);
Route::get("/rku/approved", [RkuController::class, "approved"]);
Route::get("/rku/declined", [RkuController::class, "declined"]);

// Route Proposal
Route::get("/proposal/pengajuan", [ProposalController::class, "pengajuan"]);
Route::get("/proposal/monitoring", [ProposalController::class, "monitoring"]);
Route::get("/proposal/monitoring/waiting", [ProposalController::class, "waiting"]);
Route::get("/proposal/monitoring/approved", [ProposalController::class, "approved"]);
Route::get("/proposal/monitoring/declined", [ProposalController::class, "declined"]);

// Route Profile
Route::get("/profile", [ProfilController::class, "index"]);
Route::get("/profile/edit", [ProfilController::class, "edit"]);

// Route LPJ
Route::get("/lpj", [LpjController::class, "index"]);
Route::get("/lpj/lpj-detail", [LpjController::class, "lpjDetail"]);

// Route Rapor
Route::get("/rapor", [RaporController::class, "index"]);
Route::get("/rapor/rapor-detail", [RaporController::class, "raporDetail"]);
Route::get("/rapor/rapor-detail/proker-detail", [RaporController::class, "prokerDetail"]);

// Route Edit Banner 
Route::get("/edit-banner", function() {
  return view("ditmawa.edit-banner");
});