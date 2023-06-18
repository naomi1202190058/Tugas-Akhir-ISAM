@extends('layouts.tertiary')

@section('header')
  <div class="col-6">
    <h3 class="pt-4 pb-3 fw-semibold">Rencana Kegiatan UKM</h3>
  </div>
  <div class="col-6 text-end">
    <button type="button" class="btn border-0 text-white" style="background-color: #58CAF4" data-bs-toggle="modal" data-bs-target="#statistikModal"><img class="me-2" src="/images/icons/statistik.png" alt="Icon" width="18px">Lihat Statistik</button>
  </div>
@endsection

@section('content')
  <div class="col min-vh-100 mx-4">
    <table class="table table-borderless align-middle">
      <thead>
        <tr style="color: rgba(37, 37, 37, 0.87);">
          <th class="pt-4">Nama UKM</th>
          <th class="pt-4">Nama Kegiatan</th>
          <th class="pt-4" style="width: 20%">Detail Kegiatan</th>
          <th class="pt-4" style="width: 10%">Status</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-bottom">
          <td class="py-4 text-3xs">Telkom University E-sports</td>
          <td class="py-4 text-3xs">Tournament Mobile Legends</td>
          <td>
            <a class="text-3xs me-5 d-flex align-items-center" href="" style="color: #93B8CD"><img src="/images/icons/unduh-biru.png" class="me-2" alt="Icon" width="12px">DOC_Detail_Kegiatan 1</a>
          </td>
          <td>
            <button type="button" class="btn text-white text-3xs status acc" data-bs-toggle="modal" data-bs-target="#statusModal">
              <img class="me-2" src="/images/icons/status/acc.png" alt="Icon" width="20px">
              ACC
            </button>
          </td>
        </tr>
        <tr class="border-bottom">
          <td class="py-4 text-3xs">Telkom University E-sports</td>
          <td class="py-4 text-3xs">Tournament Mobile Legends</td>
          <td>
            <a class="text-3xs me-5 d-flex align-items-center" href="" style="color: #93B8CD"><img src="/images/icons/unduh-biru.png" class="me-2" alt="Icon" width="12px">DOC_Detail_Kegiatan 2</a>
          </td>
          <td>
            <button type="button" class="btn text-white text-3xs status acc" data-bs-toggle="modal" data-bs-target="#statusModal">
              <img class="me-2" src="/images/icons/status/acc.png" alt="Icon" width="20px">
              ACC
            </button>
          </td>
        </tr>
        <tr class="border-bottom">
          <td class="py-4 text-3xs">Telkom University E-sports</td>
          <td class="py-4 text-3xs">Tournament Mobile Legends</td>
          <td>
            <a class="text-3xs me-5 d-flex align-items-center" href="" style="color: #93B8CD"><img src="/images/icons/unduh-biru.png" class="me-2" alt="Icon" width="12px">DOC_Detail_Kegiatan 3</a>
          </td>
          <td>
            <button type="button" class="btn text-white text-3xs status acc" data-bs-toggle="modal" data-bs-target="#statusModal">
              <img class="me-2" src="/images/icons/status/acc.png" alt="Icon" width="20px">
              ACC
            </button>
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
          <div class="row gx-5 px-3">
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

  {{-- Modal Status --}}
  <div class="modal fade" id="statusModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content position-relative rounded-4">
        <button type="button" class="btn-close position-absolute z-3 shadow-none" data-bs-dismiss="modal"></button>
        <div class="modal-body d-flex align-items-center justify-content-center" style="min-height: 13rem">
          <div class="text-center mt-3">
            <span class="d-block mb-4">Tidak ada feedback</span>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection