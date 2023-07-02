@extends('layouts.primary')

@section('header')
  <div class="col">
    <h3 class="pt-4 pb-3 fw-semibold">Proposal Kegiatan UKM</h3>
  </div>
@endsection

@section('content')
  <div class="col min-vh-100 my-3 mx-4">
    <table class="table table-borderless align-middle">
      <thead>
        <tr style="color: rgba(37, 37, 37, 0.87);">
          <th class="pt-4" style="width: 30%">Nama Kegiatan</th>
          <th class="pt-4" style="width: 25%">Dokumen Proposal</th>
          <th class="pt-4" >Jadwal Presentasi</th>
          <th class="pt-4" style="width: 17%">Status Proposal</th>
          <th class="pt-4 text-center" style="width: 5%">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-bottom">
          <td class="py-4 text-3xs">Kegiatan 1</td>
          <td>
            <div class="d-flex align-items-center">
              <img class="me-1" src="/images/icons/file.svg" alt="Icon" width="12px">
              <span class="text-3xs" style="color: #7b7a7a">DOC_Proposal Kegiatan 1</span>
            </div>
          </td>
          <td>
            <span class="text-4xs text-danger">(Jadwal belum ditentukan)</span>
            <a href="" class="d-block text-4xs jadwal-presentasi" data-bs-toggle="modal" data-bs-target="#jadwalModal">Klik disini untuk menentukan jadwal</a>
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
          <td class="py-4 text-3xs">Kegiatan 2</td>
          <td>
            <div class="d-flex align-items-center ">
              <img class="me-1" src="/images/icons/file.svg" alt="Icon" width="12px">
              <span class="text-3xs" style="color: #7b7a7a">DOC_Proposal Kegiatan 2</span>
            </div>
          </td>
          <td>
            <span class="text-4xs text-warning">9 Januari 2023 (09:00 WIB)</span>
            <a class="d-block text-4xs jadwal-presentasi" href="https://meet.google.com/isb-aqjx-xba">https://meet.google.com/isb-aqjx-xba</a>
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
          <td>
            <div class="d-flex align-items-center">
              <img class="me-1" src="/images/icons/file.svg" alt="Icon" width="12px">
              <span class="text-3xs" style="color: #7b7a7a">DOC_Proposal Kegiatan 3</span>
            </div>
          </td>
          <td>
            <span class="text-4xs text-danger">(Jadwal belum ditentukan)</span>
            <a href="" class="d-block text-4xs jadwal-presentasi" data-bs-toggle="modal" data-bs-target="#jadwalModal">Klik disini untuk menentukan jadwal</a>
          </td>
          <td>
            <div class="text-white text-3xs status pending review">
              <img class="me-2" src="/images/icons/status/revisi.png" alt="Icon" width="20px">
              <span class="text-3xs">Revisi</span>
            </div>
          </td>
          <td class="text-center">
            <a href="" data-bs-toggle="modal" data-bs-target="#statusModal">
              <img src="/images/icons/eye.png" alt="Icon" width="20px">
            </a>
          </td>
        </tr>
        <tr class="border-bottom">
          <td class="py-4 text-3xs">Kegiatan 4</td>
          <td>
            <div class="d-flex align-items-center">
              <img class="me-1" src="/images/icons/file.svg" alt="Icon" width="12px">
              <span class="text-3xs" style="color: #7b7a7a">DOC_Proposal Kegiatan 4</span>
            </div>
          </td>
          <td>
            <span class="text-4xs text-danger">(Pengajuan ditolak)</span>
            <span class="d-block text-4xs text-danger">Tidak dapat melakukan presentasi</span>
          </td>
          <td>
            <div class="text-white text-3xs status pending ditolak">
              <img class="me-2" src="/images/icons/status/ditolak.png" alt="Icon" width="20px">
              <span class="text-3xs">Ditolak</span>
            </div>
          </td>
          <td class="text-center">
            <a href="" data-bs-toggle="modal" data-bs-target="#statusModal">
              <img src="/images/icons/eye.png" alt="Icon" width="20px">
            </a>
          </td>
        </tr>
        <tr class="border-bottom">
          <td class="py-4 text-3xs">Kegiatan 5</td>
          <td>
            <div class="d-flex align-items-center">
              <img class="me-1" src="/images/icons/file.svg" alt="Icon" width="12px">
              <span class="text-3xs" style="color: #7b7a7a">DOC_Proposal Kegiatan 5</span>
            </div>
          </td>
          <td>
            <span class="text-4xs text-secondary">5 Januari 2023 (09:00 WIB)</span>
            <span class="d-block text-4xs text-success">Presentasi telah dilaksanakan</span>
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

  <div class="modal fade" id="jadwalModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content position-relative rounded-4">
        <button type="button" class="btn-close position-absolute z-3 shadow-none" data-bs-dismiss="modal"></button>
        <div class="row mt-4 pt-2">
          <div class="col-12 text-center">
            <h4>Pilih Tanggal Presentasi</h4>
          </div>
        </div>
        <div class="modal-body m-3">
          <form action=""> 
            <div class="row jadwal">
              <div class="col-6">
                <div class="px-4 pt-4 pb-2 rounded-4 h-100" style="background-color: #F5F5F5">
                  <div class="d-flex justify-content-between">
                    <div class="rounded-circle bg-white d-flex shadow-sm prev-next">
                      <img class="m-auto prev" src="/images/icons/prev.png" alt="Icon" width="25px">
                    </div>
                    <div class="d-flex">
                      <div class="bg-white px-3 py-2 rounded-2 d-flex align-items-center me-2">
                        <span class="fw-bold text-xs month"></span>
                      </div>
                      <div class="bg-white px-3 py-2 rounded-2 d-flex align-items-center">
                        <span class="fw-bold text-xs year"></span>
                      </div>
                    </div>
                    <div class="rounded-circle bg-white d-flex shadow-sm prev-next">
                      <img class="m-auto next" src="/images/icons/next.png" alt="Icon" width="25px">
                    </div>
                  </div>
                  <div class="calendar">
                    <ul class="my-4 weeks">
                      <li>Su</li>
                      <li>Mo</li>
                      <li>Tu</li>
                      <li>We</li>
                      <li>Th</li>
                      <li>Fr</li>
                      <li>Sa</li>
                    </ul>
                    <ul class="days">
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="px-4 pt-4 pb-2 rounded-4 h-100" style="background-color: #F5F5F5;">
                  <div class="d-flex justify-content-center">
                    <div class="d-flex">
                      <div class="bg-white px-3 py-2 rounded-2 d-flex me-2">
                        <span class="fw-bold text-xs weekday"></span>
                      </div>
                      <div class="bg-white px-3 py-2 rounded-2 d-flex">
                        <span class="fw-bold text-xs time-year"></span>
                      </div>
                    </div>
                  </div>
                  <div class="time mt-4">
                    <ul>
                      <li class="inactive">
                        <input type="radio" name="time" id="08:00" disabled />
                        <label for="08:00">08:00</label>
                      </li>
                      <li>
                        <input type="radio" name="time" id="08:30" />
                        <label for="08:30">08:30</label>
                      </li>
                      <li>
                        <input type="radio" name="time" id="09:00" />
                        <label for="09:00">09:00</label>
                      </li>
                      <li class="inactive">
                        <input type="radio" name="time" id="09:30" disabled />
                        <label for="09:30">09:30</label>
                      </li>
                      <li>
                        <input type="radio" name="time" id="10:00" />
                        <label for="10:00">10:00</label>
                      </li>
                      <li class="inactive">
                        <input type="radio" name="time" id="10:30" disabled />
                        <label for="10:30">10:30</label>
                      </li>
                      <li>
                        <input type="radio" name="time" id="11:00" />
                        <label for="11:00">11:00</label>
                      </li>
                      <li>
                        <input type="radio" name="time" id="11:30" />
                        <label for="11:30">11:30</label>
                      </li>
                      <li>
                        <input type="radio" name="time" id="12:00" />
                        <label for="12:00">12:00</label>
                      </li>
                      <li>
                        <input type="radio" name="time" id="12:30" />
                        <label for="12:30">12:30</label>
                      </li>
                      <li class="inactive">
                        <input type="radio" name="time" id="13:00" disabled />
                        <label for="13:00">13:00</label>
                      </li>
                      <li>
                        <input type="radio" name="time" id="13:30" />
                        <label for="13:30">13:30</label>
                      </li>
                      <li>
                        <input type="radio" name="time" id="14:00" />
                        <label for="14:00">14:00</label>
                      </li>
                      <li>
                        <input type="radio" name="time" id="14:30" />
                        <label for="14:30">14:30</label>
                      </li>
                      <li class="inactive">
                        <input type="radio" name="time" id="15:00" disabled />
                        <label for="15:00">15:00</label>
                      </li>
                      <li>
                        <input type="radio" name="time" id="15:30" />
                        <label for="15:30">15:30</label>
                      </li>
                      <li>
                        <input type="radio" name="time" id="16:00" />
                        <label for="16:00">16:00</label>
                      </li>
                      <li class="inactive">
                        <input type="radio" name="time" id="16:30" disabled />
                        <label for="16:30">16:30</label>
                      </li>
                      <li>
                        <input type="radio" name="time" id="17:00" />
                        <label for="17:00">17:00</label>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-4 pt-2">
              <div class="col-12 text-end">
                <button type="button" class="btn text-white px-5 border-0 submit-jadwal" style="background-color:#507CA5;" data-bs-target="#confirmModal" data-bs-toggle="modal" disabled>Submit</button>
              </div>
            </div>
          </form>
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

  <div class="modal fade" id="confirmModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal">
      <div class="modal-content position-relative rounded-4">
        <div class="modal-body d-flex justify-content-center align-items-center" style="height: 200px">
          <div class="text-center">
            <span class="fw-medium d-block mb-4">Apakah anda yakin jadwal yang dipilih sudah benar?</span>
            <div class="d-flex justify-content-center">
              <form action="/proposal/pilih-jadwal" method="post">
                @csrf
                <button type="submit" class="btn border-0 py-2 px-5 text-white text-3xs me-4" style="background-color: #507CA5">Ya</button>
              </form>
              <button type="button" class="btn border-0 py-2 px-5 text-white text-3xs" style="background-color: #e82e45" data-bs-toggle="modal" data-bs-target="#jadwalModal">Tidak</button>
            </div>
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
  <script src="/js/calendar.js"></script>
  <script>
    const submitBtn = document.querySelector(".submit-jadwal");
    const radioDate = Array.from(document.querySelectorAll(".days li input[type=radio]"));
    const radioTime = Array.from(document.querySelectorAll(".time ul li input[type=radio]"));
    const elements = [...radioDate, ...radioTime];
    
    
  </script>
  <script>
    const myModal = new bootstrap.Modal(document.getElementById('success'))
    myModal.show()
  </script>
@endsection