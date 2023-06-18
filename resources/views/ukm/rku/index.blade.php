@extends('layouts.primary')

@section('header')
  <div class="col-6">
    <h3 class="pt-4 pb-3 fw-semibold">Rencana Kegiatan UKM</h3>
  </div>
  <div class="col-6 text-end">
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
            <a class="aksi" href="" data-bs-toggle="modal" data-bs-target="#statusModal" data-status="Tanggal/tempat harus diubah karena pada tanggal tersebut ruangan telah digunakan untuk kegiatan lain">
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
            <a class="aksi" href="" data-bs-toggle="modal" data-bs-target="#statusModal" data-status="Tidak ada feedback">
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
            <a class="aksi" href="" data-bs-toggle="modal" data-bs-target="#statusModal" data-status="Tidak ada feedback">
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
            <a class="aksi" href="" data-bs-toggle="modal" data-bs-target="#statusModal" data-status="Tidak ada feedback">
              <img src="/images/icons/eye.png" alt="Icon" width="20px">
            </a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="modal fade" id="statusModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content position-relative rounded-4 mx-5">
        <div class="modal-body d-flex align-items-center justify-content-center" style="min-height: 13rem">
          <div class="text-center mt-3">
            <span class="d-block mb-4 status-message"></span>
          </div>
        </div>
      </div>
    </div>
  </div>

  @if (session()->has('success'))
    <div class="modal fade" id="success" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered modal">
        <div class="modal-content position-relative rounded-4">
          <div class="modal-body mt-4 mb-2 mx-2">
            <div class="text-center">
              <img class="my-4" src="/images/done.png" alt="Done" width="50px">
              <span class="fw-medium d-block mb-4" style="color: #32bea6">{{ session("success") }}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endif
@endsection

@section('myscript')
  <script>
    const aksi = document.querySelectorAll(".aksi");
    const statusMessage = document.querySelector(".status-message");
    aksi.forEach(a => {
      a.addEventListener("click", function() {
        statusMessage.textContent= this.dataset.status;
        // if(this.dataset.status == "revisi") {
        //   statusMessage.textContent = "Tanggal/tempat harus diubah karena pada tanggal tersebut ruangan telah digunakan untuk kegiatan lain";
        // } else {
        //   statusMessage.textContent = "Tidak ada feedback"
        // };
      });
    });

    const myModal = new bootstrap.Modal(document.getElementById('success'));
    myModal.show();
  </script>
@endsection