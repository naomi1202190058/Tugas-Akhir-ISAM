@extends('layouts.secondary')

@section('header')
  <div class="col">
    <h3 class="pt-4 pb-3 fw-semibold" style="color: #5f5f5f;">Rapor  UKM (Telkom University Esports)</h3>
  </div>
@endsection

@section('content')
  <div class="col-8">
    <table class="table table-borderless fw-medium" style="width: 70%">
      <tbody>
        <tr>
          <td>Nama Organisasi/UKM</td>
          <td>: Telkom University Esports</td>
        </tr>
        <tr>
          <td>Kode Organisasi/UKM</td>
          <td>: ABC092183</td>
        </tr>
        <tr>
          <td>Bidang Kegiatan</td>
          <td>: Bidang A</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="col-4">
    <table class="table table-borderless fw-medium">
      <tbody>
        <tr>
          <td>Nama Ketua</td>
          <td>: John Doe</td>
        </tr>
        <tr>
          <td>Tahun Kepengurusan</td>
          <td>: 2022</td>
        </tr>
        <tr>
          <td>Periode</td>
          <td>: Ganjil</td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="col bg-white rounded-top-5 min-vh-100 mt-2">
    <form action="">
      <div class="row my-4 mx-1">
        <div class="col-3 text-center">
          <img class="mt-2 me-4 rounded-4" src="/images/logo-ukm/telu-esport.png" alt="Gambar UKM" width="80%">
        </div>
        <div class="col-9 mt-2 detail-proker">
          <div class="row g-0">
            <div class="col-8">
              <div class="mb-3">
                <span class="mb-1 d-block text-3xs">Nama UKM</span>
                <h6 class="text-2xs">Telkom University Esports</h6>
              </div>
              <div class="mb-3">
                <span class="mb-1 d-block text-3xs">Nama Kegiatan</span>
                <h6 class="text-2xs">Tournament Mobile Legend</h6>
              </div>
              <div class="mb-3">
                <span class="mb-1 d-block text-3xs">Tanggal Pelaksanaan</span>
                <h6 class="text-2xs">01-Mei-2023  s/d  07-Mei-2023</h6>
              </div>
              <div class="mb-3">
                <span class="mb-1 d-block text-3xs">SDGs</span>
                <h6 class="text-2xs">SDGs (9); Industri, Inovasi dan Infrastruktur</h6>
              </div>
              <div class="mb-3">
                <span class="mb-1 d-block text-3xs">Lokasi Kegiatan</span>
                <h6 class="text-2xs">Telkom University Landmark Tower (TULT) - Lantai 3  </h6>
              </div>
              <div class="mb-3">
                <span class="mb-1 d-block text-3xs">Deskripsi Kegiatan</span>
                <h6 class="text-2xs" style="text-align: justify">Qorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad </h6>
              </div>
              <div class="mb-3">
                <span class="mb-1 d-block text-3xs">Dokumen LPJ</span>
                <div class="d-flex align-items-center">
                  <a class="text-3xs me-5" href="" style="color: #93B8CD">DOC_LPJ Kegiatan 2</a>
                  <a class="btn status finished text-4xs" href="">
                    <img class="me-2" src="/images/icons/unduh.png" alt="Icon" width="18px">
                    Unduh Dokumen
                  </a>
                </div>
              </div>
            </div>
            <div class="col-10 mt-5">
              <div class="mb-3">
                <label for="nilai_kegiatan" class="form-label fw-medium">Nilai Kegiatan</label>
                <input type="number" class="form-control" id="nilai_kegiatan" name="nilai_kegiatan" placeholder="Input Nilai" min="0" max="100">
              </div>
              <div class="mb-3">
                <label for="keterangan" class="form-label fw-medium">Keterangan</label>
                <textarea class="form-control shadow-none" id="keterangan" name="keterangan" rows="6" placeholder="Deskripsi"></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 d-flex justify-content-center my-4">
          <button type="submit" class="btn text-white px-5 border-0 submit-button" style="background-color:#507CA5;" disabled>Submit</button>
        </div>
      </div>
    </form>
  </div>
@endsection

@section('myscript')
  <script src="/js/form-handler.js"></script>
@endsection