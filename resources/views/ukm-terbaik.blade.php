@extends('layouts.primary')

@section('header')
  <div class="col-6 d-flex align-items-center">
    <a href="/rapor">
      <img src="/images/icons/back.png" alt="Icon" width="20px">
    </a>
    <h3 class="pt-4 pb-3 fw-semibold ms-4" style="color: #5f5f5f;">Rapor UKM</h3>
  </div>
  <div class="col-6 d-flex justify-content-end">
    <button type="button" class="btn border-0 d-flex align-items-center position-relative px-3 btn-pilih-tahun" style="background-color: #FCD980">
      Tahun <span class="tahun ms-1">2023</span> <img src="/images/icons/chevron-right.png" alt="Icon" width="9px" class="ms-3 icon">
      <div class="bg-white position-absolute rounded-2 w-100 d-none shadow-sm" style="left: 0; top: 36px">
        <ul class="pilih-tahun rounded-2 m-0" style="overflow: hidden">
          <li>2023</li>
          <li>2022</li>
          <li>2021</li>
        </ul>
      </div>
    </button>
  </div>
@endsection

@section('content')
  <div class="col min-vh-100 m-5">
    <div class="row pb-4 px-3">
      <div class="col-2">
        <span class="fw-medium">Kode UKM</span>
      </div>
      <div class="col-3">
        <span class="fw-medium">Nama UKM</span>
      </div>
      <div class="col-3">
        <span class="fw-medium">Bidang</span>
      </div>
      <div class="col-2">
        <span class="fw-medium">Rata-Rata Rapor</span>
      </div>
    </div>
    <div class="row rounded py-4 px-3 align-items-center mb-3" style="background-color: #e0e0e0">
      <div class="col-2">
        <span>ABC092183</span>
      </div>
      <div class="col-3">
        <span>Tel-U Esports</span>
      </div>
      <div class="col-3">
        <span>Olahraga</span>
      </div>
      <div class="col-2">
        <span>92</span>
      </div>
    </div>
    <div class="row rounded py-4 px-3 align-items-center mb-3" style="background-color: #e0e0e0">
      <div class="col-2">
        <span>ABS592183</span>
      </div>
      <div class="col-3">
        <span>SEARCH</span>
      </div>
      <div class="col-3">
        <span>Penalaran</span>
      </div>
      <div class="col-2">
        <span>90</span>
      </div>
    </div>
    <div class="row rounded py-4 px-3 align-items-center mb-3" style="background-color: #e0e0e0">
      <div class="col-2">
        <span>QBC192183</span>
      </div>
      <div class="col-3">
        <span>Fotografi Telkom</span>
      </div>
      <div class="col-3">
        <span>Kesenian & Kebudayaan</span>
      </div>
      <div class="col-2">
        <span>2023</span>
      </div>
    </div>
  </div>
@endsection

@section('myscript')
  <script>
    const btnPilihTahun = document.querySelector(".btn-pilih-tahun");
    const listTahun = document.querySelectorAll(".pilih-tahun li");
    const tahunYgDipilih = document.querySelector(".tahun");

    btnPilihTahun.addEventListener("click", () => {
      btnPilihTahun.lastElementChild.classList.toggle("d-none");
      if(document.querySelector(".icon").src == "http://127.0.0.1:8000/images/icons/chevron-right.png") {
        document.querySelector(".icon").src = "http://127.0.0.1:8000/images/icons/chevron-down-black.png"
        document.querySelector(".icon").setAttribute("width", "16px")
      } else {
        document.querySelector(".icon").src = "http://127.0.0.1:8000/images/icons/chevron-right.png"
        document.querySelector(".icon").setAttribute("width", "9px")
      } 
    })

    listTahun.forEach(tahun => {
      tahun.addEventListener("click", function() {
        tahunYgDipilih.textContent = this.textContent;
      })
    })
  </script>
@endsection