@extends('layouts.tertiary')

@section('header')
  <div class="col">
    <h3 class="pt-4 pb-3 fw-semibold">Proposal Kegiatan UKM</h3>
  </div>
  <div class="col-2 text-end">
    <button type="button" class="btn border-0" style="background-color: white"><img class="me-2" src="/images/icons/jadwal.png" alt="Icon" width="18px">Edit Jadwal Presentasi</button>
  </div>
@endsection

@section('content')
  <div class="col min-vh-100 mx-4">
    <table class="table table-borderless align-middle">
      <thead>
        <tr style="color: rgba(37, 37, 37, 0.87);">
          <th class="pt-4">Nama UKM</th>
          <th class="pt-4">Nama Kegiatan</th>
          <th class="pt-4" style="width: 25%">Dokumen Proposal</th>
          <th class="pt-4">Jadwal Presentasi</th>
          <th class="pt-4" style="width: 10%">Status</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-bottom">
          <td class="py-4 text-3xs">UKM 1</td>
          <td class="py-4 text-3xs">Kegiatan 1</td>
          <td>
            <div class="d-flex align-items-center">
              <img class="me-1" src="/images/icons/file.svg" alt="Icon" width="12px">
              <span class="text-3xs" style="color: #7b7a7a">DOC_Proposal Kegiatan 1</span>
            </div>
          </td>
          <td>
            <span class="text-4xs">5 Januari 2023 (09:00 WIB)</span>
            <span class="d-block text-4xs text-success">Presentasi telah dilaksanakan</span>
          </td>
          <td>
            <div class="text-white text-3xs status acc">
              <img class="me-2" src="/images/icons/status/acc.png" alt="Icon" width="20px">
              ACC
            </div>
          </td>
        </tr>
        <tr class="border-bottom">
          <td class="py-4 text-3xs">UKM 2</td>
          <td class="py-4 text-3xs">Kegiatan 2</td>
          <td>
            <div class="d-flex align-items-center">
              <img class="me-1" src="/images/icons/file.svg" alt="Icon" width="12px">
              <span class="text-3xs" style="color: #7b7a7a">DOC_Proposal Kegiatan 2</span>
            </div>
          </td>
          <td>
            <span class="text-4xs">5 Januari 2023 (09:00 WIB)</span>
            <span class="d-block text-4xs text-success">Presentasi telah dilaksanakan</span>
          </td>
          <td>
            <div class="text-white text-3xs status acc">
              <img class="me-2" src="/images/icons/status/acc.png" alt="Icon" width="20px">
              ACC
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  {{-- Modal Detail Kegiatan --}}
  <div class="modal fade" id="detailModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content rounded-4">
        <div class="row mx-4 mt-4">
          <div class="col-12">
            <div class="border-1 border-bottom d-flex justify-content-between align-items-center">
              <h4 class="mb-4">Detail Kegiatan</h4>
              <button type="button" class="btn-close z-3 shadow-none mb-4" data-bs-dismiss="modal"></button>
            </div>
          </div>
        </div>
        <div class="modal-body m-3 detail-modal-body">
          <div class="container">
            <div class="row gx-5">
              <div class="col-3">
                <img class="mt-2 rounded-4" src="/images/rku/ml.png" alt="Gambar UKM" width="100%">
              </div>
              <div class="col mt-2">
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Modal Statistik --}}
  <div class="modal fade" id="statistikModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content rounded-4">
        <div class="row mx-4 mt-4">
          <div class="col-12">
            <div class="border-1 border-bottom d-flex justify-content-between align-items-center">
              <h4 class="mb-4">Statistik RKU</h4>
              <button type="button" class="btn-close z-3 shadow-none mb-4" data-bs-dismiss="modal"></button>
            </div>
          </div>
        </div>
        <div class="modal-body m-3 modal-statistik">
          <div class="container">
            <div class="row gx-5">
              <div class="col-12">
                <div class="row gx-0 mb-4 align-items-center waiting">
                  <div class="col-11">
                    <h6 class="fw-medium mb-3 d-block">Waiting</h6>
                    <div class="progress">
                      <div class="progress-bar" style="width: 10%;"></div>
                    </div>
                    <span class="text-4xs mt-2 d-block">2/20</span>
                  </div>
                  <div class="col-1 text-end mt-3">
                    <h5 class="text-2xs">10%</h5>
                  </div>
                </div>
                <div class="row gx-0 mb-4 align-items-center approved">
                  <div class="col-11">
                    <h6 class="fw-medium mb-3 d-block">Approved</h6>
                    <div class="progress">
                      <div class="progress-bar" style="width: 85%;"></div>
                    </div>
                    <span class="text-4xs mt-2 d-block">17/20</span>
                  </div>
                  <div class="col-1 text-end mt-3">
                    <h5 class="text-2xs">85%</h5>
                  </div>
                </div>
                <div class="row gx-0 mb-2 align-items-center declined">
                  <div class="col-11">
                    <h6 class="fw-medium mb-3 d-block">Declined</h6>
                    <div class="progress">
                      <div class="progress-bar" style="width: 5%;"></div>
                    </div>
                    <span class="text-4xs mt-2 d-block">1/20</span>
                  </div>
                  <div class="col-1 text-end mt-3">
                    <h5 class="text-2xs">5%</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection