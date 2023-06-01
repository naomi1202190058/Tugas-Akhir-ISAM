@extends('layouts.secondary')

@section('header')
  <div class="col">
    <h3 class="pt-4 pb-3 fw-semibold" style="color: #5f5f5f;">LPJ UKM Teklom University Esports</h3>
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

  <div class="col bg-white rounded-top-5 min-vh-100 mt-2" style="padding: 16px 36px">
    <table class="table table-borderless align-middle">
      <thead>
        <tr class="pt-4" style="color: rgba(37, 37, 37, 0.87);">
          <th class="pt-4" style="width: 30%">Nama Kegiatan</th>
          <th class="pt-4" style="width: 25%">Deadline Pengumpulan</th>
          <th class="pt-4">Dokumen LPJ</th>
          <th class="pt-4" style="width: 17%">Review</th>
          <th class="pt-4" style="width: 5%">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-bottom">
          <td class="py-4 text-3xs">Kegiatan 1</td>
          <td>
            <span class="text-4xs text-danger">Batas pengumpulan dalam</span>
            <span class="d-block text-4xs text-warning">(13 Hari ; 12 : 01 : 00 Jam)</span>
          </td>
          <td>
            <div class="d-flex align-items-center">
              <img class="me-1" src="/images/icons/file.svg" alt="Icon" width="12px">
              <span class="text-3xs" style="color: #7b7a7a">DOC_LPJ Kegiatan 1</span>
            </div>
          </td>
          <td>
            <button type="button" class="btn text-white text-3xs status review">
              <img class="me-2" src="/images/icons/status/review.png" alt="Icon" width="20px">
              Review
            </button>
          </td>
          <td>
            <button type="button" class="btn text-white text-3xs status aksi" data-bs-toggle="modal" data-bs-target="#aksiModal">
              <img class="me-2" src="/images/icons/status/aksi.png" alt="Icon" width="20px">
              Aksi
            </button>
          </td>
        </tr>
        <tr class="border-bottom">
          <td class="py-4 text-3xs">Kegiatan 2</td>
          <td>
            <span class="text-4xs text-danger">Batas pengumpulan dalam</span>
            <span class="d-block text-4xs text-secondary">(0 Hari ; 00 : 00 : 00 Jam)</span>
          </td>
          <td>
            <div class="d-flex align-items-center ">
              <img class="me-1" src="/images/icons/file.svg" alt="Icon" width="12px">
              <span class="text-3xs" style="color: #7b7a7a">DOC_LPJ Kegiatan 2</span>
            </div>
          </td>
          <td>
            <button type="button" class="btn text-white text-3xs status review">
              <img class="me-2" src="/images/icons/status/review.png" alt="Icon" width="20px">
              Review
            </button>
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
            <form action="" method="post">
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
@endsection

@section('myscript')
  <script src="/js/form-handler.js"></script>
@endsection