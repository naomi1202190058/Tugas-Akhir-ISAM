@extends('layouts.tertiary')

@section('header')
  <div class="col-6">
    <h3 class="pt-4 pb-3 fw-semibold">Proposal Kegiatan UKM</h3>
  </div>
  <div class="col-6 text-end">
    <button type="button" class="btn border-0 me-3" style="background-color: white" data-bs-toggle="modal" data-bs-target="#jadwalModal"><img class="me-2" src="/images/icons/jadwal.png" alt="Icon" width="18px">Edit Jadwal Presentasi</button>
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
          <th class="pt-4" style="width: 25%">Dokumen Proposal</th>
          <th class="pt-4">Jadwal Presentasi</th>
          <th class="pt-4" style="width: 10%">Aksi</th>
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
            <span class="text-4xs">(Jadwal belum ditentukan)</span>
          </td>
          <td>
            <button type="button" class="btn text-white text-3xs status aksi" data-bs-toggle="modal" data-bs-target="#aksiModal">
              <img class="me-2" src="/images/icons/status/aksi.png" alt="Icon" width="20px">
              Aksi
            </button>
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
            <span class="text-4xs text-warning">9 Januari 2023 (09:00 WIB)</span>
            <a href="" class="d-block text-4xs jadwal-presentasi">https://meet.google.com/isb-aqjx-xbh</a>
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
  
  {{-- Modal Jadwal --}}
  <div class="modal fade" id="jadwalModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content position-relative rounded-4">
        <button type="button" class="btn-close position-absolute z-3 shadow-none" data-bs-dismiss="modal"></button>
        <div class="row mt-4 pt-2">
          <div class="col-12 text-center">
            <h4>Edit Jadwal Presentasi</h4>
          </div>
        </div>
        <div class="modal-body m-3">
          <div class="row jadwal">
            <div class="col-6">
              <div class="px-4 pt-4 pb-2 rounded-4" style="background-color: #F5F5F5">
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
              <div class="px-4 pt-4 pb-2 rounded-4 h-100" style="background-color: #F5F5F5">
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
          <div class="row mt-4">
            <div class="col-6 d-flex justify-content-center date">
              <button type="button" class="btn border-0 py-2 px-5 text-white text-3xs me-4 available" style="background-color: #507CA5">Available</button>
              <button type="button" class="btn border-0 py-2 px-5 text-white text-3xs not-available" style="background-color: #e82e45">Not Available</button>
            </div>
            <div class="col-6 d-flex justify-content-center time">
              <button type="button" class="btn border-0 py-2 px-5 text-white text-3xs me-4 available" style="background-color: #507CA5">Available</button>
              <button type="button" class="btn border-0 py-2 px-5 text-white text-3xs not-available" style="background-color: #e82e45">Not Available</button>
            </div>
          </div>
          <div class="row mt-4 pt-2">
            <div class="col-12 text-end">
              <button type="button" class="btn text-white px-5 border-0 submit-jadwal" style="background-color:#507CA5;" data-bs-target="#confirmModal" data-bs-toggle="modal" disabled>Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
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

  {{-- Modal Aksi --}}
  <div class="modal fade" id="aksiModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content position-relative rounded-4">
        <button type="button" class="btn-close position-absolute z-3 shadow-none" data-bs-dismiss="modal"></button>
        <div class="modal-body mt-4 mb-2 mx-2">
          <form action="/proposal/monitoring/waiting" method="post">
            @csrf
            <div class="row">
              <div class="col-10 mb-3">
                <label for="aksi" class="form-label fw-medium">Aksi</label>
                <select class="form-select shadow-none" id="aksi" name="aksi" required>
                  <option>Pilih Aksi</option>
                  <option value="ACC">ACC</option>
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

  <div class="modal fade" id="confirmModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal">
      <div class="modal-content position-relative rounded-4">
        <div class="modal-body d-flex justify-content-center align-items-center" style="height: 200px">
          <div class="text-center">
            <span class="fw-medium d-block mb-4">Apakah anda yakin jadwal yang dipilih sudah benar?</span>
            <div class="d-flex justify-content-center">
              <form action="/proposal/edit-jadwal" method="post">
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
  <script src="/js/form-handler.js"></script>
  <script src="/js/calendar.js"></script>
  <script>
    const myModal = new bootstrap.Modal(document.getElementById('success'))
    myModal.show()
  </script>
@endsection