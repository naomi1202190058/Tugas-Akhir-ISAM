@extends('layouts.primary')

@section('header')
  <div class="col">
    <h3 class="pt-4 pb-3 fw-semibold">Rencana Kegiatan UKM</h3>
  </div>
  <div class="col-2 text-end">
    <a href="/rku/create" class="btn border-0" style="background-color: white">+ Tambah Kegiatan</a>
  </div>
@endsection

@section('content')
  <div class="col min-vh-100 my-3 mx-4">
    <table class="table table-borderless align-middle">
      <thead>
        <tr style="color: rgba(37, 37, 37, 0.87);">
          <th colspan="2" class="pt-4 pb-2">Nama Kegiatan</th>
          <th style="width: 22%" class="pt-4 pb-2">Status</th>
          <th style="width: 10%" class="pt-4 pb-2 text-center">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="pb-4" style="width: 10%"><img class="rounded gambar-rku" src="/images/rku/ml.png" alt="Gambar Kegiatan"></td>
          <td class="pb-4">
            <div>
              <h6 style="color: rgba(37, 37, 37, 0.6)">Tournament Mobile Legend</h6>
              <span class="d-block pt-2" style="color: rgba(37, 37, 37, 0.6)">SDGs (9); Industri, Inovasi dan Infrastruktur</span>
              <span class="d-block py-1" style="color: rgba(37, 37, 37, 0.38)">1 Mei 2023 - 7 Mei 2023</span>
              <span class="d-block" style="color: rgba(37, 37, 37, 0.38);">Telkom University Landmark Tower (TULT) - Lantai 3  </span>
            </div>
          </td>
          <td class="pb-4">
            <div class="status revisi">
              <img class="me-2" src="/images/icons/status/warning.png" alt="Icon" width="20px">
              <span>Revisi</span>
            </div>
          </td>
          <td class="pb-4 text-center">
            <a href="/rku/status/ml">
              <img src="/images/icons/eye.png" alt="Icon" width="20px">
            </a>
          </td>
        </tr>
        <tr>
          <td class="pb-4"><img class="rounded gambar-rku" src="/images/rku/pubg.png" alt="Gambar Kegiatan"></td>
          <td class="pb-4">
            <div>
              <h6 style="color: rgba(37, 37, 37, 0.6)">Tournament PUBG</h6>
              <span class="d-block pt-2" style="color: rgba(37, 37, 37, 0.6)">SDGs (9); Industri, Inovasi dan Infrastruktur</span>
              <span class="d-block py-1" style="color: rgba(37, 37, 37, 0.38)">7 Februari 2023 - 12 Februari 2023</span>
              <span class="d-block" style="color: rgba(37, 37, 37, 0.38);">Telkom University Landmark Tower (TULT) - Lantai 3  </span>
            </div>
          </td>
          <td class="pb-4">
            <div class="status pending">
              <img class="me-2" src="/images/icons/status/pending.png" alt="Icon" width="20px">
              <span>Pending</span>
            </div>
          </td>
          <td class="pb-4 text-center">
            <a href="/rku/status/pubg">
              <img src="/images/icons/eye.png" alt="Icon" width="20px">
            </a>
          </td>
        </tr>
        <tr>
          <td class="pb-4"><img class="rounded gambar-rku" src="/images/rku/codm.png" alt="Gambar Kegiatan"></td>
          <td class="pb-4">
            <div>
              <h6 style="color: rgba(37, 37, 37, 0.6)">Tournament CODM</h6>
              <span class="d-block pt-2" style="color: rgba(37, 37, 37, 0.6)">SDGs (9); Industri, Inovasi dan Infrastruktur</span>
              <span class="d-block py-1" style="color: rgba(37, 37, 37, 0.38)">5 Januari 2023 - 8 Januari 2023</span>
              <span class="d-block" style="color: rgba(37, 37, 37, 0.38);">Telkom University Landmark Tower (TULT) - Lantai 3  </span>
            </div>
          </td>
          <td class="pb-4">
            <div class="status acc">
              <img class="me-2" src="/images/icons/status/acc.png" alt="Icon" width="20px">
              <span>ACC</span>
            </div>
          </td>
          <td class="text-center pb-4">
            <a href="/rku/status/codm">
              <img src="/images/icons/eye.png" alt="Icon" width="20px">
            </a>
          </td>
        </tr>
        <tr>
          <td class="pb-4"><img class="rounded gambar-rku" src="/images/rku/valo.png" alt="Gambar Kegiatan"></td>
          <td class="pb-4">
            <div>
              <h6 style="color: rgba(37, 37, 37, 0.6)">Tournament Valorant</h6>
              <span class="d-block pt-2" style="color: rgba(37, 37, 37, 0.6)">SDGs (9); Industri, Inovasi dan Infrastruktur</span>
              <span class="d-block py-1" style="color: rgba(37, 37, 37, 0.38)">5 Desember 2023 - 12 Desember 2023</span>
              <span class="d-block" style="color: rgba(37, 37, 37, 0.38);">Telkom University Landmark Tower (TULT) - Lantai 3  </span>
            </div>
          </td>
          <td class="pb-4">
            <div class="status acc">
              <img class="me-2" src="/images/icons/status/acc.png" alt="Icon" width="20px">
              <span>ACC</span>
            </div>
          </td>
          <td class="text-center pb-4">
            <a href="/rku/status/valorant">
              <img src="/images/icons/eye.png" alt="Icon" width="20px">
            </a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection