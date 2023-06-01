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
  <form action="" class="p-5">
    <div class="col-12 mb-4 d-flex align-items-center">
      <img class="rounded-3 me-5 img-preview" src="/images/rku/{{ $kegiatan["gambar"] }}.png" alt="Gambar RKU"  >
    </div>
    <div class="col-10">
      <div class="mb-3">
        <label for="nama_kegiatan" class="form-label fw-medium">Nama Kegiatan</label>
        <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" placeholder="Nama Kegiatan" value="{{ $kegiatan["nama"] }}" readonly>
      </div>
      <div class="mb-3">
        <label for="lokasi" class="form-label fw-medium">Lokasi</label>
        <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Lokasi Kegiatan" value="{{ $kegiatan["lokasi"] }}" readonly>
      </div>
      <div class="mb-3">
        <label for="sdgs" class="form-label fw-medium">SDGs</label>
        <input type="text" class="form-control" id="sdgs" name="sdgs" placeholder="SDGs" value="{{ $kegiatan["sdgs"] }}" readonly>
      </div>
    </div>
    <div class="col-5">
      <div class="mb-3">
        <label for="tanggal_mulai" class="form-label fw-medium">Tanggal Mulai</label>
        <input type="text" class="form-control" id="tanggal_mulai" name="tanggal_mulai" placeholder="Tanggal Mulai" value="{{ $kegiatan["tanggal_mulai"] }}" readonly>
      </div>
      <div class="mb-3">
        <label for="tanggal_berakhir" class="form-label fw-medium">Tanggal Berakhir</label>
        <input type="text" class="form-control" id="tanggal_berakhir" name="tanggal_berakhir" placeholder="Tanggal Berakhir" value="{{ $kegiatan["tanggal_berakhir"] }}" readonly>
      </div>
    </div>
    <div class="col-10">
      <div class="mb-3">
        <label for="status_pengajuan" class="form-label fw-medium">Status Pengajuan</label>
        @if ($kegiatan["status"] == "revisi")
          <textarea class="form-control shadow-none revisi-textarea" id="status_pengajuan" name="status_pengajuan" rows="3" placeholder="Deskripsi" readonly>Tanggal/ tempat  harus diubah karena pada tanggal tersebut ruangan telah digunakan untuk kegiatan lain</textarea>
        @elseif ($kegiatan["status"] == "pending")
          <div class="status pending">
            <img class="me-2" src="/images/icons/status/pending.png" alt="Icon" width="20px">
            <span>Pending</span>
          </div>
        @else
          <div class="status acc">
            <img class="me-2" src="/images/icons/status/acc.png" alt="Icon" width="20px">
            <span>ACC</span>
          </div>
        @endif
      </div>
    </div>
    @if ($kegiatan["status"] == "revisi")
      <div class="col-12 d-flex mt-5">
        <div class="status revisi me-3">
          <img class="me-2" src="/images/icons/status/warning.png" alt="Icon" width="20px">
          <span>Revisi</span>
        </div>
        <a href="" class="btn text-white px-3 border-0" style="background-color:#7b7b7b;">Edit pengajuan RKU</a>
      </div>
    @endif
  </form>
@endsection

@section('myscript')
  <script src="/js/form-handler.js"></script>
@endsection