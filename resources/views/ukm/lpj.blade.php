@extends('layouts.primary')

@section('header')
  <div class="col">
    <h3 class="pt-4 pb-3 fw-semibold" style="color: #5f5f5f;">Laporan Pertanggungjawaban UKM</h3>
  </div>
@endsection

@section('content')
  <div class="col min-vh-100 my-3 mx-4">
    <table class="table table-borderless align-middle">
      <thead>
        <tr style="color: rgba(37, 37, 37, 0.87);">
          <th class="pt-4" style="width: 22%">Nama Kegiatan</th>
          <th class="pt-4">Pelaksanaan Kegiatan</th>
          <th class="pt-4" style="width: 18%">Deadline Pengumpulan</th>
          <th class="pt-4">Dokumen LPJ</th>
          <th class="pt-4" style="width: 17%">Status LPJ</th>
          <th class="pt-4 text-center" style="width: 8%">Feedback</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-bottom">
          <td class="py-4 text-3xs">Kegiatan 1</td>
          <td class="text-4xs">15 Juni 2023</td>
          <td>
            <span class="text-4xs text-danger">Batas pengumpulan dalam</span>
            <span class="d-block text-4xs text-warning">(13 Hari ; 12 : 01 : 00 Jam)</span>
          </td>
          <td>
            <div class="d-flex align-items-center">
              <img class="me-1" src="/images/icons/file.svg" alt="Icon" width="12px">
              <span class="text-3xs" style="color: #7b7a7a">LPJ belum diupload</span>
            </div>
          </td>
          <td>
            <button type="button" class="text-white upload-button border-0 text-3xs status" data-bs-toggle="modal" data-bs-target="#uploadModal">
              <img class="me-2" src="/images/icons/upload-dokumen.png" alt="Icon" width="20px">
              Upload Dokumen
            </button>
          </td>
          <td class="text-center">
            <a href="" data-bs-toggle="modal" data-bs-target="#statusModal">
              <img src="/images/icons/eye.png" alt="Icon" width="20px">
            </a>
          </td>
        </tr>
        <tr class="border-bottom">
          <td class="py-4 text-3xs">Kegiatan 2</td>
          <td class="text-4xs">01 Juni 2023</td>
          <td>
            <span class="text-4xs text-secondary">Pengumpulan LPJ terlambat</span>
            <span class="d-block text-4xs text-danger">(1 Hari ; 00 : 00 : 00 Jam)</span>
          </td>
          <td>
            <div class="d-flex align-items-center ">
              <img class="me-1" src="/images/icons/file.svg" alt="Icon" width="12px">
              <span class="text-3xs" style="color: #7b7a7a">DOC_LPJ Kegiatan 2</span>
            </div>
          </td>
          <td>
            <div class="text-white text-3xs status pending">
              <img class="me-2" src="/images/icons/status/pending.png" alt="Icon" width="20px">
              <span class="text-3xs">Waiting</span>
            </div>
          </td>
          <td class="text-center">
            <a href="" data-bs-toggle="modal" data-bs-target="#statusModal">
              <img src="/images/icons/eye.png" alt="Icon" width="20px">
            </a>
          </td>
        </tr>
        <tr class="border-bottom">
          <td class="py-4 text-3xs">Kegiatan 3</td>
          <td class="text-4xs">15 Mei 2023</td>
          <td>
            <span class="text-4xs text-secondary">Batas pengumpulan dalam</span>
            <span class="d-block text-4xs text-danger">(1 Hari ; 00 : 00 : 00 Jam)</span>
          </td>
          <td>
            <div class="d-flex align-items-center ">
              <img class="me-1" src="/images/icons/file.svg" alt="Icon" width="12px">
              <span class="text-3xs" style="color: #7b7a7a">DOC_LPJ Kegiatan 2</span>
            </div>
          </td>
          <td>
            <div class="text-white text-3xs status finished">
              <img class="me-2" src="/images/icons/status/acc.png" alt="Icon" width="20px">
              <span class="text-3xs">Finished</span>
            </div>
          </td>
          <td class="text-center">
            <a href="" data-bs-toggle="modal" data-bs-target="#statusModal">
              <img src="/images/icons/eye.png" alt="Icon" width="20px">
            </a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="modal fade" id="uploadModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content position-relative rounded-4">
        <button type="button" class="btn-close position-absolute z-3 shadow-none" data-bs-dismiss="modal"></button>
        <div class="modal-body mt-4 mb-2 mx-2">
          <div class="text-center">
            <span class="fw-medium d-block mb-4">Upload dokumen LPJ</span>
            <p class="m-0 text-3xs mb-3">PDF, Max 5 mb</p>
            <div class="d-flex align-items-center justify-content-center d-none upload-dokumen">
              <img class="me-1" src="/images/icons/file.svg" alt="Icon" width="12px">
              <span class="text-3xs" style="color: #7b7a7a"></span>
            </div>
            <form action="/lpj" method="post">
              @csrf
              <div class="d-flex justify-content-center my-4">
                <button type="button" class="btn text-white text-3xs status modal-upload-button">Upload Dokumen</button>
              </div>
              <input type="file" class="d-none input-file" accept=".docx, .doc, .pdf">
              <div class="d-flex w-100 justify-content-end">
                <button type="submit" class="btn text-white text-3xs border-0 status submit-button" style="background-color:#507CA5;" disabled>Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="statusModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content position-relative rounded-4">
        <div class="modal-body d-flex align-items-center justify-content-center" style="min-height: 13rem">
          <div class="text-center mt-3">
            <span class="d-block mb-4">Tidak ada feedback</span>
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
    const inputFile = document.querySelector(".input-file");
    const uploadButton = document.querySelector(".modal-upload-button");
    const submitButton = document.querySelector(".submit-button");
    const uploadDokumen = document.querySelector(".upload-dokumen");

    uploadButton.addEventListener("click", () => {
      inputFile.click();
    });

    inputFile.addEventListener("change", () => {
      submitButton.disabled = false;
      uploadDokumen.classList.remove("d-none");
      uploadDokumen.lastElementChild.textContent = inputFile.files[0].name;
    })

    const myModal = new bootstrap.Modal(document.getElementById('success'))
    myModal.show()

  </script>
@endsection