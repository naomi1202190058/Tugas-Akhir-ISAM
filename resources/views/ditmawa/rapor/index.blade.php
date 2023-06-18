@extends('layouts.primary')

@section('header')
  <div class="col">
    <h3 class="pt-4 pb-3 fw-semibold" style="color: #5f5f5f;">Rapor UKM</h3>
  </div>
  <div class="col-3">
    <div class="bg-white d-flex align-items-center rounded px-1">
      <input type="text" class="form-control border-0 shadow-none py-2" placeholder="Search">
      <button class="btn border-0">
        <img src="/images/icons/search.png" alt="Icon" width="20px">
      </button>
    </div>
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
        <span class="fw-medium">Tahun Kepengurusan</span>
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
        <span>2023</span>
      </div>
      <div class="col">
        <a href="/rapor/rapor-detail" class="btn border-0 text-white" style="background-color: #54ad46">
          <img src="/images/icons/isi-rapor.png" class="me-2" alt="Icon">
          Isi Rapor
        </a>
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
        <span>2023</span>
      </div>
      <div class="col">
        <a href="" class="btn border-0 text-white" style="background-color: #54ad46">
          <img src="/images/icons/isi-rapor.png" class="me-2" alt="Icon">
          Isi Rapor
        </a>
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
        <span>2023</span>
      </div>
      <div class="col">
        <a href="" class="btn border-0 text-white" style="background-color: #54ad46">
          <img src="/images/icons/isi-rapor.png" class="me-2" alt="Icon">
          Isi Rapor
        </a>
      </div>
    </div>
  </div>
@endsection

@section('myscript')
  <script>
    const ukmCard = document.querySelectorAll(".ukm-card");

    ukmCard.forEach(card => {
      card.style.cursor = "pointer";
      card.addEventListener("click", function() {
        document.location.href = "/rapor/rapor-detail";
      })
    });
  </script>
@endsection