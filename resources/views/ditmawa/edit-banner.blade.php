@extends('layouts.primary')

@section('header')
<div class="col d-flex align-items-center">
  <a href="/">
    <img src="/images/icons/back.png" alt="Icon" width="20px">
  </a>
  <h3 class="pt-4 pb-3 fw-semibold ms-4">Edit Banner ISAM</h3>
</div>
@endsection

@section('content')
  <div class="mx-4 my-5 min-vh-100">
    <form action="">
      <div class="col-10">
        <div class="mb-3">
          <label for="judul_banner" class="form-label fw-medium">Judul Banner</label>
          <input type="text" class="form-control" id="judul_banner" name="judul_banner" placeholder="Nama">
        </div>
        <div class="mb-3">
          <label for="deskripsi_banner" class="form-label fw-medium">Deskripsi</label>
          <textarea class="form-control shadow-none" id="deskripsi_banner" name="deskripsi_banner" rows="6" placeholder="Deskripsi"></textarea>
        </div>
        <div class="mb-3">
          <label for="nama_cp" class="form-label fw-medium d-block">Image Banner</label>
          <img class="d-none mt-1 mb-3 img-preview" alt="Banner Preview" style="width: 100%; height: 100%;">
          <button type="button" class="btn text-white upload-button"><img class="me-2" src="/images/icons/upload-dokumen.png" alt="Icon" width="20px">Upload Image</button>
          <input type="file" class="d-none input-file" accept="image/*" name="image">
        </div>
      </div>
      <div class="col-12 d-flex justify-content-center mt-5">
        <button type="submit" class="btn text-white px-5 border-0 submit-button" style="background-color:#507CA5;" disabled>Submit</button>
      </div>
    </form>
  </div>
@endsection

@section('myscript')
  <script src="/js/form-handler.js"></script>
@endsection