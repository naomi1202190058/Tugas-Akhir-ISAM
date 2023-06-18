@extends('layouts.primary')

@section('header')
  <div class="col d-flex align-items-center">
    <a href="/rku">
      <img src="/images/icons/back.png" alt="Icon" width="20px">
    </a>
    <h3 class="pt-4 pb-3 fw-semibold ms-4">Tambah UKM Baru</h3>
  </div>
@endsection

@section('content')
  <form action="/ukm/tambah" class="p-5" method="post">
    @csrf
    <div class="col-12 mb-4 d-flex align-items-center">
      <img class="rounded-3 me-5 img-preview" src="/images/rku-image.png" alt="Gambar RKU"  >
      <div class="me-3 d-none status finished">
        <span>Uploaded</span>
        <img class="ms-2" src="/images/icons/status/acc.png" alt="Icon" width="20px">
      </div>
      <button type="button" class="btn text-white upload-button"><img class="me-2" src="/images/icons/upload-dokumen.png" alt="Icon" width="20px">Upload Image</button>
      <input type="file" class="d-none input-file" accept="image/*" name="image">
    </div>
    <div class="col-10">
      <div class="mb-3">
        <label for="username" class="form-label fw-medium">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label fw-medium">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      </div>
      <div class="mb-3">
        <label for="nama_ukm" class="form-label fw-medium">Nama UKM</label>
        <input type="text" class="form-control" id="nama_ukm" name="nama_ukm" placeholder="Nama">
      </div>
      <div class="mb-3">
        <label for="kategori_ukm" class="form-label fw-medium">Kategori UKM</label>
        <input type="text" class="form-control" id="kategori_ukm" name="kategori_ukm" placeholder="Kategori">
      </div>
      <div class="mb-3">
        <label for="pembimbing_ukm" class="form-label fw-medium">Pembimbing UKM</label>
        <input type="text" class="form-control" id="pembimbing_ukm" name="pembimbing_ukm" placeholder="Nama Pembimbing">
      </div>
    </div>
    <div class="col-10">
      <div class="mb-3">
        <label for="detail_ukm" class="form-label fw-medium">Detail UKM</label>
        <textarea class="form-control shadow-none" id="detail_ukm" name="detail_ukm" rows="6" placeholder="Deskripsi"></textarea>
      </div>
    </div>
    <div class="col-10">
      <div class="mb-3">
        <label for="visi_misi_ukm" class="form-label fw-medium">Visi dan Misi UKM</label>
        <textarea class="form-control shadow-none" id="visi_misi_ukm" name="visi_misi_ukm" rows="6" placeholder="Deskripsi"></textarea>
      </div>
    </div>
    <div class="col-10 mb-3">
      <label for="nama_cp" class="form-label fw-medium">Program Kerja</label>
      <div class="d-flex align-items-center">
        <button type="button" class="btn text-white me-3 d-flex align-items-center upload-button"><img class="me-2" src="/images/icons/upload-dokumen.png" alt="Icon" width="20px">Upload Dokumen</button>
        <input type="file" class="d-none input-file" accept=".docx, .doc, .pdf">
        <span style="color: #7b7a7a"></span>
      </div>
    </div>
    <div class="col-10 mb-3">
      <label for="nama_cp" class="form-label fw-medium">Dokumen SK</label>
      <div class="d-flex align-items-center">
        <button type="button" class="btn text-white me-3 d-flex align-items-center upload-button"><img class="me-2" src="/images/icons/upload-dokumen.png" alt="Icon" width="20px">Upload Dokumen</button>
        <input type="file" class="d-none input-file" accept=".docx, .doc, .pdf">
        <span style="color: #7b7a7a"></span>
      </div>
    </div>
    <div class="col-10 mb-3">
      <label for="nama_cp" class="form-label fw-medium">Struktur Organisasi</label>
      <img class="d-none mt-1 mb-3 img-preview-2" alt="Struktur Organisasi Preview" style="width: 100%; height: 100%;">
      <button type="button" class="btn text-white me-3 d-flex align-items-center upload-button"><img class="me-2" src="/images/icons/upload-dokumen.png" alt="Icon" width="20px">Upload Image</button>
      <input type="file" class="d-none input-file" accept="image/*">
    </div>
    <div class="col-12 d-flex justify-content-center mt-5">
      <button type="submit" class="btn text-white px-5 border-0 submit-button" style="background-color:#507CA5;" disabled>Submit</button>
    </div>
  </form>
@endsection

@section('myscript')
  <script src="/js/form-handler.js"></script>
@endsection