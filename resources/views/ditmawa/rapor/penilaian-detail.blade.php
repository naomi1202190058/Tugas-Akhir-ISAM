@extends('layouts.secondary')

@section('header')
  <div class="col d-flex align-items-center">
    <a href="/rapor/rapor-detail">
      <img src="/images/icons/back.png" alt="Icon" width="20px">
    </a>
    <h3 class="pt-4 pb-3 fw-semibold ms-4" style="color: #5f5f5f;">Rapor  UKM (Telkom University E-Sports)</h3>
  </div>
@endsection

@section('content')
  <div class="col-8">
    <table class="table table-borderless fw-medium" style="width: 70%">
      <tbody>
        <tr>
          <td>Nama Organisasi/UKM</td>
          <td>: Telkom University E-Sports</td>
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

  <div class="col bg-white rounded-top-5 mt-2" style="min-height: 27.4rem">
    <div class="m-5">
      <form action="/rapor/rapor-detail/penilaian-detail" method="post">
        @csrf
        <div class="row mb-3" style="color: #5f5f5f">
          <div class="col-3">
            <span class="fw-medium">Nama Penilaian</span>
          </div>
          <div class="col">
            <span>: Latihan Rutin</span>
          </div>
        </div>
        <div class="mb-3">
          <label for="nilai_kegiatan" class="form-label fw-medium">Nilai Kegiatan</label>
          <input type="number" class="form-control" id="nilai_kegiatan" name="nilai_kegiatan" min="0" max="100" placeholder="Input nilai">
        </div>
        <div class="mb-3">
          <label for="keterangan" class="form-label fw-medium">Keterangan</label>
          <textarea class="form-control shadow-none" id="keterangan" name="keterangan" rows="6" placeholder="Deskripsi"></textarea>
        </div>
        <div class="text-center mt-5">
          <button type="submit" class="btn text-white px-5 border-0 submit-button" style="background-color:#507CA5;" disabled>Submit</button>
        </div>
      </form>
    </div>
  </div>
@endsection

@section('myscript')
  <script src="/js/form-handler.js"></script>
@endsection