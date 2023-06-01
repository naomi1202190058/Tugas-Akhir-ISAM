@extends('layouts.secondary')

@section('header')
  <div class="col">
    <h3 class="pt-4 pb-3 fw-semibold" style="color: #5f5f5f;">Rapor UKM (Telkom University Esports)</h3>
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

  <div class="col-12 mt-1">
    <table class="table table-bordered bg-white table-rapor">
      <thead>
        <tr>
          <th>No</th>
          <th>Kode Program Kerja</th>
          <th>Nama Program Kerja</th>
          <th>Tanggal Pelaksanaan</th>
          <th>Detail Kegiatan</th>
          <th>Nilai</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>10293849</td>
          <td>Proker 1</td>
          <td>11-Nov-2022 S/D 20-Nov-2022</td>
          <td><a href="/rapor/rapor-detail/proker-detail" style="color: #507CA5">Lihat detail</a></td>
          <td>-</td>
        </tr>
        <tr>
          <td>1</td>
          <td>10293849</td>
          <td>Proker 2</td>
          <td>11-Nov-2022 S/D 20-Nov-2022</td>
          <td><a href="/rapor/rapor-detail/proker-detail" style="color: #507CA5">Lihat detail</a></td>
          <td>-</td>
        </tr>
        <tr>
          <td>1</td>
          <td>10293849</td>
          <td>Proker 3</td>
          <td>11-Nov-2022 S/D 20-Nov-2022</td>
          <td><a href="/rapor/rapor-detail/proker-detail" style="color: #507CA5">Lihat detail</a></td>
          <td>-</td>
        </tr>
        <tr>
          <td>1</td>
          <td>10293849</td>
          <td>Proker 4</td>
          <td>11-Nov-2022 S/D 20-Nov-2022</td>
          <td><a href="/rapor/rapor-detail/proker-detail" style="color: #507CA5">Lihat detail</a></td>
          <td>-</td>
        </tr>
        <tr>
          <td>1</td>
          <td>10293849</td>
          <td>Proker 5</td>
          <td>11-Nov-2022 S/D 20-Nov-2022</td>
          <td><a href="/rapor/rapor-detail/proker-detail" style="color: #507CA5">Lihat detail</a></td>
          <td>-</td>
        </tr>
        <tr>
          <td>1</td>
          <td>10293849</td>
          <td>Proker 6</td>
          <td>11-Nov-2022 S/D 20-Nov-2022</td>
          <td><a href="/rapor/rapor-detail/proker-detail" style="color: #507CA5">Lihat detail</a></td>
          <td>-</td>
        </tr>
        <tr>
          <td>1</td>
          <td>10293849</td>
          <td>Proker 7</td>
          <td>11-Nov-2022 S/D 20-Nov-2022</td>
          <td><a href="/rapor/rapor-detail/proker-detail" style="color: #507CA5">Lihat detail</a></td>
          <td>-</td>
        </tr>
      </tbody>
    </table>
    <span class="text-danger text-4xs">Pilih salah satu kegiatan untuk melihat detail dan melakukan penliaian</span>
  </div>
@endsection

@section('myscript')
  <script src="/js/form-handler.js"></script>
@endsection