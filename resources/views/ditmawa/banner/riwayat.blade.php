@extends('layouts.primary')

@section('header')
<div class="col-6 d-flex align-items-center">
  <a href="/">
    <img src="/images/icons/back.png" alt="Icon" width="20px">
  </a>
  <h3 class="pt-4 pb-3 fw-semibold ms-4">Riwayat Banner</h3>
</div>
<div class="col-6 text-end">
  <a href="/banner/riwayat" class="btn border-0 text-white" style="background-color: #aaa9a9"><img class="me-2" src="/images/icons/riwayat.png" alt="Icon" width="18px">Riwayat</a>
</div>
@endsection

@section('content')
  <div class="mx-4 my-5 min-vh-100">
    <div class="row ps-3 align-items-center mb-4">
      <div class="col-4">
        <img class="me-2" src="/images/home-header/home-header-1.png" alt="Banner" width="100%">
      </div>
      <div class="col-5 me-5">
        <span class="fw-bold d-block mb-2">Timeline Pencarian Dana Kegiatan UKM</span>
        <span class="d-block mb-2">Pencairan dana untuk kegiatan UKM Telkom University terbagi pada time line yang telah ditentukan. Ajukan proposal kegiatan untuk mendapatkan pencairan dana sesuai dengan syarat dan ketentuan yang berlaku.</span>
        <span class="text-danger">Banner akan terhapus otomatis setelah 30 hari</span>
      </div>
      <div class="col">
        <button type="submit" class="btn border-0 text-white" style="background-color: #507CA5" data-bs-toggle="modal" data-bs-target="#bannerModal">Kembalikan banner</button>  
      </div>
    </div>
  </div>

  <div class="modal fade" id="bannerModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal">
      <div class="modal-content position-relative rounded-4">
        <div class="modal-body d-flex justify-content-center align-items-center" style="height: 200px">
          <div class="text-center">
            <span class="fw-medium d-block mb-4">Apakah anda ingin menampilkan kembali banner ini?</span>
            <div class="d-flex justify-content-center">
              <form action="/banner/riwayat" method="post">
                @csrf
                <button type="submit" class="btn border-0 py-2 px-5 text-white text-3xs me-4" style="background-color: #507CA5">Ya</a>
              </form>
              <button type="button" class="btn border-0 py-2 px-5 text-white text-3xs" style="background-color: #e82e45" data-bs-dismiss="modal" data-bs-target="#bannerModal">Tidak</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection