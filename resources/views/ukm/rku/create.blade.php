@extends('layouts.primary')

@section('header')
  <div class="col d-flex align-items-center">
    <a href="/rku">
      <img src="/images/icons/back.png" alt="Icon" width="20px">
    </a>
    <h3 class="pt-4 pb-3 fw-semibold ms-4">Tambah Rencana Kegiatan UKM</h3>
  </div>
@endsection

@section('content')
  <form action="/rku/create" class="p-5" method="post">
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
        <label for="nama_kegiatan" class="form-label fw-medium">Nama Kegiatan</label>
        <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" placeholder="Nama Kegiatan">
      </div>
      <div class="mb-3">
        <label for="lokasi" class="form-label fw-medium">Lokasi</label>
        <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Lokasi Kegiatan">
      </div>
      <div class="mb-3">
        <label for="sdgs" class="form-label fw-medium">SDGs</label>
        <select class="form-select shadow-none" id="sdgs" name="sdgs" required>
          <option>Pilih SDGs</option>
          <option value="1">SDGs (1); Tanpa Kemiskinan</option>
          <option value="2">SDGs (2); Tanpa Kelaparan</option>
          <option value="3">SDGs (3); Kehidupan Sehat dan Sejahtera</option>
          <option value="4">SDGs (4); Pendidikan Berkualitas</option>
          <option value="5">SDGs (5); Kesetaraan Gender</option>
          <option value="6">SDGs (6); Air Bersih dan Sanitasi Layak</option>
          <option value="7">SDGs (7); Energi Bersih dan Terjangkau</option>
          <option value="8">SDGs (8); Pekerjaan Layak dan Pertumbuhan Ekonomi</option>
          <option value="9">SDGs (9); Industri, Inovasi dan Infrastruktur</option>
          <option value="10">SDGs (10); Berkurangnya Kesenjangan</option>
          <option value="11">SDGs (11); Kota dan Pemukiman yang Berkelanjutan</option>
          <option value="12">SDGs (12); Konsumsi dan Produksi yang Bertanggung Jawab</option>
          <option value="13">SDGs (13); Penanganan Perubahan Iklim</option>
          <option value="14">SDGs (14); Ekosistem Lautan</option>
          <option value="15">SDGs (15); Ekosistem Daratan</option>
          <option value="16">SDGs (16); Perdamaian, Keadilan dan Kelembahaan yang Tangguh</option>
          <option value="17">SDGs (17); Kemitraan untuk Mencapai Tujuan</option>
        </select>
      </div>
    </div>
    <div class="col-5">
      <div class="mb-3">
        <label for="tanggal_mulai" class="form-label fw-medium">Tanggal Mulai</label>
        <input type="date" class="form-control text-uppercase" id="tanggal_mulai" name="tanggal_mulai">
      </div>
      <div class="mb-3">
        <label for="tanggal_berakhir" class="form-label fw-medium">Tanggal Berakhir</label>
        <input type="date" class="form-control text-uppercase" id="tanggal_berakhir" name="tanggal_berakhir">
      </div>
    </div>
    <div class="col-12 d-flex justify-content-center mt-5">
      <button type="submit" class="btn text-white px-5 border-0 submit-button" style="background-color:#507CA5;" disabled>Submit</button>
    </div>
  </form>
@endsection

@section('myscript')
  <script src="/js/form-handler.js"></script>
@endsection