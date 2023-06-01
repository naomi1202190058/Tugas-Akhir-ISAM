@extends('layouts.primary')

@section('header')
  <div class="col d-flex align-items-center">
    <a href="/profile">
      <img src="/images/icons/back.png" alt="Icon" width="20px">
    </a>
    <h3 class="pt-4 pb-3 fw-semibold ms-4">Edit Profil UKM</h3>
  </div>
@endsection

@section('content')
  <div class="mx-4 my-5">
    <form action="">
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
          <label for="nama_ukm" class="form-label fw-medium">Nama</label>
          <input type="text" class="form-control" id="nama_ukm" name="nama_ukm" placeholder="Nama">
        </div>
        <div class="mb-3">
          <label for="kepengurusan_ukm" class="form-label fw-medium">Kepengurusan UKM</label>
          <input type="text" class="form-control" id="kepengurusan_ukm" name="kepengurusan_ukm" placeholder="Nama Kepengurusan">
        </div>
        <div class="mb-3">
          <label for="tahun_kepengurusan" class="form-label fw-medium">Tahun Kepengurusan</label>
          <input type="text" class="form-control" id="tahun_kepengurusan" name="tahun_kepengurusan" placeholder="Tahun">
        </div>
        <div class="mb-3">
          <label for="jenis_ukm" class="form-label fw-medium">Jenis UKM</label>
          <input type="text" class="form-control" id="jenis_ukm" name="jenis_ukm" placeholder="Jenis">
        </div>
      </div>
      <div class="row g-0" style="height: min-content">
        <div class="col-5 me-4">
          <div class="mb-3">
            <label for="nama_ketua" class="form-label fw-medium">Ketua UKM</label>
            <input type="text" class="form-control" id="nama_ketua" name="nama_ketua" placeholder="Nama Ketua">
          </div>
        </div>
        <div class="col-5 d-flex align-items-end">
          <div class="mb-3" style="width: 95%">
            <div class="input-group">
              <span class="input-group-text bg-transparent border border-end-0" style="color: #7b7a7a">(+62)</span>
              <input type="text" class="form-control border border-start-0" id="no_ketua" name="no_ketua" style="margin-left: -10px">
            </div>
          </div>
        </div>
      </div>
      <div class="row g-0" style="height: min-content">
        <div class="col-5 me-4">
          <div class="mb-3">
            <label for="nama_wakil" class="form-label fw-medium">Wakil Ketua UKM</label>
            <input type="text" class="form-control" id="nama_wakil" name="nama_wakil" placeholder="Nama Wakil">
          </div>
        </div>
        <div class="col-5 d-flex align-items-end">
          <div class="mb-3" style="width: 95%">
            <div class="input-group">
              <span class="input-group-text bg-transparent border border-end-0" style="color: #7b7a7a">(+62)</span>
              <input type="text" class="form-control border border-start-0" id="no_wakil" name="no_wakil" style="margin-left: -10px">
            </div>
          </div>
        </div>
      </div>
      <div class="row g-0" style="height: min-content">
        <div class="col-5 me-4">
          <div class="mb-3">
            <label for="nama_bendahara" class="form-label fw-medium">Bendahara UKM</label>
            <input type="text" class="form-control" id="nama_bendahara" name="nama_bendahara" placeholder="Nama Bendahara">
          </div>
        </div>
        <div class="col-5 d-flex align-items-end">
          <div class="mb-3" style="width: 95%">
            <div class="input-group">
              <span class="input-group-text bg-transparent border border-end-0" style="color: #7b7a7a">(+62)</span>
              <input type="text" class="form-control border border-start-0" id="no_bendahara" name="no_bendahara" style="margin-left: -10px">
            </div>
          </div>
        </div>
      </div>
      <div class="row g-0" style="height: min-content">
        <div class="col-5 me-4">
          <div class="mb-3">
            <label for="nama_sekretaris" class="form-label fw-medium">Sekretaris UKM</label>
            <input type="text" class="form-control" id="nama_sekretaris" name="nama_sekretaris" placeholder="Nama Sekretaris">
          </div>
        </div>
        <div class="col-5 d-flex align-items-end">
          <div class="mb-3" style="width: 95%">
            <div class="input-group">
              <span class="input-group-text bg-transparent border border-end-0" style="color: #7b7a7a">(+62)</span>
              <input type="text" class="form-control border border-start-0" id="no_bendahara" name="no_bendahara" style="margin-left: -10px">
            </div>
          </div>
        </div>
      </div>
      <div class="col-10">
        <div class="mb-3">
          <label for="tentang_ukm" class="form-label fw-medium">Tentang UKM</label>
          <textarea class="form-control shadow-none" id="tentang_ukm" name="tentang_ukm" rows="6" placeholder="Deskripsi"></textarea>
        </div>
      </div>
      <div class="col-10">
        <label for="nama_cp" class="form-label fw-medium">Dokumen SK</label>
        <div class="d-flex align-items-center">
          <button type="button" class="btn text-white me-3 d-flex align-items-center upload-button"><img class="me-2" src="/images/icons/upload-dokumen.png" alt="Icon" width="20px">Upload Dokumen</button>
          <input type="file" class="d-none input-file" accept=".docx, .doc, .pdf" name="dokumen">
          <span style="color: #7b7a7a"></span>
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