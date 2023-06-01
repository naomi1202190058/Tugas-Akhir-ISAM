@extends('layouts.secondary')

@section('header')
  <div class="col">
    <h3 class="pt-4 pb-3 fw-semibold" style="color: #5f5f5f;">LPJ UKM</h3>
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
  @include('partials.ukm-list')
@endsection

@section('myscript')
  <script>
    const ukmCard = document.querySelectorAll(".ukm-card");

    ukmCard.forEach(card => {
      card.style.cursor = "pointer";
      card.addEventListener("click", function() {
        document.location.href = "/lpj/teluesport";
      })
    });
  </script>
@endsection