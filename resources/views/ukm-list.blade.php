@extends('layouts.secondary')

@section('header')
  <div class="col">
    <h3 class="pt-4 pb-3 fw-semibold">Daftar UKM</h3>
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

  <div class="modal fade" id="detailModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content position-relative rounded-4">
        <button type="button" class="btn-close position-absolute z-3 shadow-none" data-bs-dismiss="modal"></button>
        <div class="modal-body m-3 detail-modal-body">
          <div class="row gx-5">
            <div class="col-3 text-center">
              <img class="mt-2 rounded-4" src="/images/logo-ukm/telu-esport.png" alt="Gambar UKM" width="95%">
            </div>
            <div class="col mt-2">
              <div class="mb-3">
                <span class="mb-1 d-block text-3xs">Nama UKM</span>
                <h6 class="text-2xs">Telkom University Esports</h6>
              </div>
              <div class="mb-3">
                <span class="mb-1 d-block text-3xs">Jenis UKM</span>
                <h6 class="text-2xs">Olahraga</h6>
              </div>
              <div class="mb-3">
                <span class="mb-1 d-block text-3xs">Pengurus</span>
                <h6 class="text-2xs">XXXXX - Ketua</h6>
                <h6 class="text-2xs">YYYYY - Wakil Ketua</h6>
                <h6 class="text-2xs">BBBBB - Bendahara</h6>
                <h6 class="text-2xs">AAAA - Sekretaris</h6>
              </div>
              <div class="mb-3">
                <span class="mb-1 d-block text-3xs">Contact Person</span>
                <h6 class="text-2xs"><img src="/images/icons/telp.png" alt="Icon">(Farhan)+62 812 3847 3847</h6>
                <h6 class="text-2xs"><img src="/images/icons/line.png" alt="Icon">@hsgd78</h6>
                <h6 class="text-2xs"><img src="/images/icons/instagram.png" alt="Icon">@volleyball_telU</h6>
              </div>
              <div>
                <span class="mb-1 d-block text-3xs">Tentang UKM</span>
                <h6 class="text-2xs" style="text-align: justify">Qorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad </h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection