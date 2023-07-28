@extends('layouts.secondary')

@section('header')
  <div class="col d-flex align-items-center">
    <a href="/lpj">
      <img src="/images/icons/back.png" alt="Icon" width="20px">
    </a>
    <h3 class="pt-4 pb-3 fw-semibold ms-4" style="color: #5f5f5f;">LPJ UKM Teklom University E-Sports</h3>
  </div>
  <div class="col-6 text-end me-4">
    <button type="button" class="btn border-0 text-white" style="background-color: #58CAF4" data-bs-toggle="modal" data-bs-target="#statistikModal"><img class="me-2" src="/images/icons/statistik.png" alt="Icon" width="18px">Lihat Statistik</button>
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

  <div class="col bg-white rounded-top-5 min-vh-100 mt-2" style="padding: 16px 36px">
    <table class="table table-borderless align-middle">
      <thead>
        <tr class="pt-4" style="color: rgba(37, 37, 37, 0.87);">
          <th class="pt-4" style="width: 30%">Nama Kegiatan</th>
          <th class="pt-4">Pelaksanaan Kegiatan</th>
          <th class="pt-4" style="width: 25%">Deadline Pengumpulan</th>
          <th class="pt-4">Dokumen LPJ</th>
          <th class="pt-4">Feedback</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-bottom">
          <td class="py-4 text-3xs">Kegiatan 1</td>
          <td class="text-3xs">15 Juni 2023</td>
          <td>
            <span class="text-4xs text-danger">Batas pengumpulan dalam</span>
            <span class="d-block text-4xs text-warning">(13 Hari ; 12 : 01 : 00 Jam)</span>
          </td>
          <td>
            <div class="d-flex align-items-center">
              <a href="" class="text-3xs" style="color: #93B8CD"><img class="me-1" src="/images/icons/unduh-biru.png" alt="Icon" width="12px">DOC_LPJ Kegiatan 1</a>
            </div>
          </td>
          <td>
            @if (session()->has("success"))
              @if (session("success")[1] == "ACC")
                <button type="button" class="btn text-white text-3xs status acc" data-bs-toggle="modal" data-bs-target="#statusModal">
                  <img class="me-2" src="/images/icons/status/acc.png" alt="Icon" width="20px">
                  ACC
                </button>
              @elseif (session("success")[1] == "Revisi")
                <button type="button" class="btn text-white text-3xs status review" data-bs-toggle="modal" data-bs-target="#statusModal">
                  <img class="me-2" src="/images/icons/status/revisi.png" alt="Icon" width="20px">
                  Revisi
                </button>
              @else
              <button type="button" class="btn text-white text-3xs status ditolak" data-bs-toggle="modal" data-bs-target="#statusModal">
                <img class="me-2" src="/images/icons/status/revisi.png" alt="Icon" width="20px">
                Ditolak
              </button>
              @endif
            @else
              <button type="button" class="btn text-white text-3xs status aksi" data-bs-toggle="modal" data-bs-target="#aksiModal">
                <img class="me-2" src="/images/icons/status/aksi.png" alt="Icon" width="20px">
                Aksi
              </button>
            @endif
          </td>
        </tr>
        <tr class="border-bottom">
          <td class="py-4 text-3xs">Kegiatan 2</td>
          <td class="text-3xs">01 Juni 2023</td>
          <td>
            <span class="text-4xs text-secondary">Pengumpulan LPJ terlambat</span>
            <span class="d-block text-4xs text-danger">(1 Hari ; 00 : 00 : 00 Jam)</span>
          </td>
          <td>
            <div class="d-flex align-items-center ">
              <a href="" class="text-3xs" style="color: #93B8CD"><img class="me-1" src="/images/icons/unduh-biru.png" alt="Icon" width="12px">DOC_LPJ Kegiatan 2</a>
            </div>
          </td>
          <td>
            <button type="button" class="btn text-white text-3xs status aksi" data-bs-toggle="modal" data-bs-target="#aksiModal">
              <img class="me-2" src="/images/icons/status/aksi.png" alt="Icon" width="20px">
              Aksi
            </button>
          </td>
        </tr>
        <tr class="border-bottom">
          <td class="py-4 text-3xs">Kegiatan 3</td>
          <td class="text-3xs">15 Mei 2023</td>
          <td>
            <span class="text-4xs text-secondary">Pengumpulan LPJ terlambat</span>
            <span class="d-block text-4xs text-danger">(1 Hari ; 00 : 00 : 00 Jam)</span>
          </td>
          <td>
            <div class="d-flex align-items-center ">
              <a href="" class="text-3xs" style="color: #93B8CD"><img class="me-1" src="/images/icons/unduh-biru.png" alt="Icon" width="12px">DOC_LPJ Kegiatan 1</a>
            </div>
          </td>
          <td>
            <button type="button" class="btn text-white text-3xs status aksi" data-bs-toggle="modal" data-bs-target="#aksiModal">
              <img class="me-2" src="/images/icons/status/aksi.png" alt="Icon" width="20px">
              Aksi
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="modal fade" id="aksiModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content position-relative rounded-4">
        <button type="button" class="btn-close position-absolute z-3 shadow-none" data-bs-dismiss="modal"></button>
        <div class="modal-body mt-4 mb-2 mx-2">
          <div>
            <form action="/lpj/lpj-detail" method="post">
              @csrf
              <div class="row">
                <div class="col-10 mb-3">
                  <label for="aksi" class="form-label fw-medium">Aksi</label>
                  <select class="form-select shadow-none" id="aksi" name="aksi" required>
                    <option>Pilih Aksi</option>
                    <option value="ACC">ACC</option>
                    <option value="Revisi">Revisi</option>
                    <option value="Tolak">Tolak</option>
                  </select>
                </div>
                <div class="col-12 mb-4">
                  <label for="catatan" class="form-label fw-medium">Catatan</label>
                  <textarea class="form-control shadow-none" id="catatan" name="catatan" rows="4" placeholder="Deskripsi"></textarea>
                </div>
                <div class="d-flex w-100 justify-content-end">
                  <button type="submit" class="btn text-white text-3xs border-0 status submit-button" style="background-color:#507CA5;" disabled>Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="statistikModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content rounded-4">
        <div class="row mx-4 mt-4">
          <div class="col-12">
            <div class="border-1 border-bottom d-flex justify-content-between align-items-center">
              <h4 class="mb-4">Statistik LPJ Tahun Akademik 2022/2023</h4>
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

  <div class="modal fade" id="statusModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content position-relative rounded-4">
        <button type="button" class="btn-close position-absolute z-3 shadow-none" data-bs-dismiss="modal"></button>
        <div class="modal-body d-flex align-items-center justify-content-center" style="min-height: 13rem">
          <div class="text-center mt-3">
            <span class="d-block mb-4">{{ session()->has("success") ? session("success")[2] : "Tidak ada feedback" }}</span>
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
              <span class="fw-medium d-block mb-4" style="color: #32bea6">{{ session("success")[0] }}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endif
@endsection

@section('myscript')
  <script src="/js/form-handler.js"></script>
  <script>
    const myModal = new bootstrap.Modal(document.getElementById('success'))
    myModal.show()
  </script>
@endsection