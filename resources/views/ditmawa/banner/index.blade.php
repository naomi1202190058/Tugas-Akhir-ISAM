@extends('layouts.primary')

@section('header')
<div class="col d-flex align-items-center">
  <a href="/">
    <img src="/images/icons/back.png" alt="Icon" width="20px">
  </a>
  <h3 class="pt-4 pb-3 fw-semibold ms-4">Edit Banner</h3>
</div>
@endsection

@section('content')
  <div class="mx-4 my-5 min-vh-100">
    <div class="row ps-3 align-items-center mb-4">
      <div class="col-4">
        <img class="me-2" src="/images/home-header/home-header-1.png" alt="Banner" width="100%">
      </div>
      <div class="col-6 me-5">
        <span class="fw-bold d-block mb-2">Timeline Pencarian Dana Kegiatan UKM</span>
        <span>Pencairan dana untuk kegiatan UKM Telkom University terbagi pada time line yang telah ditentukan. Ajukan proposal kegiatan untuk mendapatkan pencairan dana sesuai dengan syarat dan ketentuan yang berlaku.</span>
      </div>
      <div class="col">
        <form action="/banner" method="post">
          @method("delete")
          @csrf
          <button type="submit" class="btn border-0" style="background-color: #e82e45"><img src="/images/icons/hapus.png" alt="Icon"></button>  
        </form>
      </div>
    </div>
    <div class="row ps-3 align-items-center mb-4">
      <div class="col-4">
        <img class="me-2" src="/images/home-header/home-header-2.png" alt="Banner" width="100%">
      </div>
      <div class="col-6 me-5">
        <span class="fw-bold d-block mb-2">Alur pencairan dana Kegiatan UKM</span>
        <span>Selamat datang di program pencairan dana kegiatan UKM! Kami sangat senang untuk mendukung kegiatan UKM Anda dengan memberikan akses ke dana yang diperlukan untuk mewujudkan ide-ide brilian Anda.</span>
      </div>
      <div class="col">
        <form action="/banner" method="post">
          @method("delete")
          @csrf
          <button type="submit" class="btn border-0" style="background-color: #e82e45"><img src="/images/icons/hapus.png" alt="Icon"></button>  
        </form>
      </div>
    </div>
    <div class="row ps-3 align-items-center mb-4">
      <div class="col-4">
        <img class="me-2" src="/images/home-header/home-header-3.png" alt="Banner" width="100%">
      </div>
      <div class="col-6 me-5">
        <span class="fw-bold d-block mb-2">SDGs</span>
        <span>Norem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</span>
      </div>
      <div class="col">
        <form action="/banner" method="post">
          @method("delete")
          @csrf
          <button type="submit" class="btn border-0" style="background-color: #e82e45"><img src="/images/icons/hapus.png" alt="Icon"></button>  
        </form>
      </div>
    </div>
    <div class="row ps-3 mt-5">
      <div class="col">
        <a href="/banner/tambah" class="py-2 px-3 rounded-2 fw-medium btn-home-header">+ Tambah Banner</a>
      </div>
    </div>
  </div>

  @if (session()->has('success'))
    <div class="modal fade" id="success" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered modal">
        <div class="modal-content position-relative rounded-4">
          <div class="modal-body mt-4 mb-2 mx-2">
            <div class="text-center">
              <img class="my-4" src="/images/done.png" alt="Done" width="50px">
              <span class="fw-medium d-block mb-4" style="color: #32bea6">{{ session("success") }}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endif
@endsection

@section('myscript')
  <script src="/js/form-handler.js"></script>
  <script>
    const myModal = new bootstrap.Modal(document.getElementById('success'))
    myModal.show()
  </script>
@endsection