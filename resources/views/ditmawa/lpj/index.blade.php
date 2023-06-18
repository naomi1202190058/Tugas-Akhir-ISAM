@extends('layouts.primary')

@section('header')
  <div class="col">
    <h3 class="pt-4 pb-3 fw-semibold">LPJ</h3>
  </div>
  <div class="col-2 text-end me-4">
    <button type="button" class="btn border-0 text-white" style="background-color: #58CAF4" data-bs-toggle="modal" data-bs-target="#statistikModal"><img class="me-2" src="/images/icons/statistik.png" alt="Icon" width="18px">Lihat Statistik</button>
  </div>
  <div class="col-3 text-end">
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
        <a href="/lpj/lpj-detail" class="btn border-0 text-white" style="background-color: #54ad46">
          <img src="/images/icons/lihat-lpj.png" class="me-2" alt="Icon">
          Lihat LPJ
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
          <img src="/images/icons/lihat-lpj.png" class="me-2" alt="Icon">
          Lihat LPJ
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
          <img src="/images/icons/lihat-lpj.png" class="me-2" alt="Icon">
          Lihat LPJ
        </a>
      </div>
    </div>
  </div>

  {{-- Modal Statistik --}}
  <div class="modal fade" id="statistikModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content rounded-4">
        <div class="row mx-4 mt-4">
          <div class="col-12">
            <div class="border-1 border-bottom d-flex justify-content-between align-items-center">
              <h4 class="mb-4">Statistik RKU</h4>
              <button type="button" class="btn-close z-3 shadow-none mb-4" data-bs-dismiss="modal"></button>
            </div>
          </div>
        </div>
        <div class="modal-body m-3 modal-statistik">
          <div class="container">
            <div class="row gx-5">
              <div class="col-12">
                <div class="row gx-0 mb-4 align-items-center waiting">
                  <div class="col-11">
                    <h6 class="fw-medium mb-3 d-block">Waiting</h6>
                    <div class="progress">
                      <div class="progress-bar" style="width: 10%;"></div>
                    </div>
                    <span class="text-4xs mt-2 d-block">2/20</span>
                  </div>
                  <div class="col-1 text-end mt-3">
                    <h5 class="text-2xs">10%</h5>
                  </div>
                </div>
                <div class="row gx-0 mb-4 align-items-center approved">
                  <div class="col-11">
                    <h6 class="fw-medium mb-3 d-block">Approved</h6>
                    <div class="progress">
                      <div class="progress-bar" style="width: 85%;"></div>
                    </div>
                    <span class="text-4xs mt-2 d-block">17/20</span>
                  </div>
                  <div class="col-1 text-end mt-3">
                    <h5 class="text-2xs">85%</h5>
                  </div>
                </div>
                <div class="row gx-0 mb-2 align-items-center declined">
                  <div class="col-11">
                    <h6 class="fw-medium mb-3 d-block">Declined</h6>
                    <div class="progress">
                      <div class="progress-bar" style="width: 5%;"></div>
                    </div>
                    <span class="text-4xs mt-2 d-block">1/20</span>
                  </div>
                  <div class="col-1 text-end mt-3">
                    <h5 class="text-2xs">5%</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection