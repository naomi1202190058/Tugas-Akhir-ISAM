@extends('layouts.secondary')

@section('header')
  <div class="col-6">
    <h3 class="pt-4 pb-3 fw-semibold" style="color: #5f5f5f;">Rapor UKM</h3>
  </div>
  <div class="col-6 text-end">
    <a href="/rapor/ukm-terbaik" class="btn border-0 text-white" style="background-color: #E2BA54"><img class="me-2" src="/images/icons/ukm-terbaik.png" alt="Icon" width="18px">UKM Terbaik</a>
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
  <div class="col-12 mt-1 mb-5">
    <table class="table table-bordered bg-white table-rapor">
      <thead>
        <tr>
          <th>No</th>
          <th>Kode Penilaian</th>
          <th>Nama Penilaian</th>
          <th>Tanggal Pelaksanaan</th>
          <th>Keterangan</th>
          <th>Nilai</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>10293849</td>
          <td>Latihan Rutin</td>
          <td>11-Nov-2022 S/D 20-Nov-2022</td>
          <td><a href="" style="color: #507CA5">Lihat keterangan</a></td>
          <td>-</td>
        </tr>
        <tr>
          <td>2</td>
          <td>10293849</td>
          <td>Kegiatan Regional 1</td>
          <td>11-Nov-2022 S/D 20-Nov-2022</td>
          <td><a href="" style="color: #507CA5">Lihat keterangan</a></td>
          <td>-</td>
        </tr>
        <tr>
          <td>3</td>
          <td>10293849</td>
          <td>Kegiatan Nasional 1</td>
          <td>11-Nov-2022 S/D 20-Nov-2022</td>
          <td><a href="" style="color: #507CA5">Lihat keterangan</a></td>
          <td>-</td>
        </tr>
        <tr>
          <td>4</td>
          <td>10293849</td>
          <td>Pengabdian Masyarakat</td>
          <td>11-Nov-2022 S/D 20-Nov-2022</td>
          <td><a href="" style="color: #507CA5">Lihat keterangan</a></td>
          <td>-</td>
        </tr>
        <tr>
          <td>5</td>
          <td>10293849</td>
          <td>Kegiatan Internasional</td>
          <td>11-Nov-2022 S/D 20-Nov-2022</td>
          <td><a href="" style="color: #507CA5">Lihat keterangan</a></td>
          <td>-</td>
        </tr>
        <tr>
          <td>6</td>
          <td>10293849</td>
          <td>Kompetisi Mandiri</td>
          <td>11-Nov-2022 S/D 20-Nov-2022</td>
          <td><a href="" style="color: #507CA5">Lihat keterangan</a></td>
          <td>-</td>
        </tr>
        <tr>
          <td>7</td>
          <td>10293849</td>
          <td>Kegiatan Regional 2</td>
          <td>11-Nov-2022 S/D 20-Nov-2022</td>
          <td><a href="" style="color: #507CA5">Lihat keterangan</a></td>
          <td>-</td>
        </tr>
        <tr>
          <td>8</td>
          <td>10293849</td>
          <td>Kegiatan Belmawa</td>
          <td>11-Nov-2022 S/D 20-Nov-2022</td>
          <td><a href="" style="color: #507CA5">Lihat keterangan</a></td>
          <td>-</td>
        </tr>
      </tbody>
    </table>
    <span class="text-danger text-4xs">Pilih salah satu kegiatan untuk melihat detail dan melakukan penliaian</span>
  </div>
@endsection