@extends('layouts.secondary')

@section('header')
  <div class="col">
    <h3 class="pt-4 pb-3 fw-semibold">Daftar UKM</h3>
  </div>
  @if (auth()->user()->role == "ditmawa")
    <div class="col-3 text-end me-4">
      <a href="/ukm/tambah" class="btn border-0 text-white" style="background-color: #507ca5">+ Tambah UKM Baru</a>
    </div>
  @endif
  <div class="col-3">
    <div class="bg-white d-flex align-items-center rounded px-1">
      <input type="text" class="form-control border-0 shadow-none py-2" placeholder="Search">
      <button class="btn border-0">
        <img src="/images/icons/search.png" alt="Icon" width="20px">
      </button>
    </div>
  </div>
@endsection

@section('content')
  @if (auth()->user()->role == "ditmawa")
    <div class="col-12" style="margin-top: -20px">
      <div class="d-flex align-items-center">
        <h5 class="pt-4 pb-3 fw-semibold me-3" style="color: #5f5f5f">Bidang UKM</h5>
        <button type="button" class="btn border-0 d-flex align-items-center position-relative px-3 btn-pilih-tahun" style="background-color: #FCD980">
          Semua Bidang UKM <img src="/images/icons/chevron-right.png" alt="Icon" width="9px" class="ms-3 icon">
          <div class="bg-white rounded-2 w-100 d-none position-absolute z-3 shadow-sm" style="left: 0; top: 36px">
            <ul class="pilih-tahun rounded-2 text-center m-0" style="overflow: hidden">
              <li>Kesenian & Kebudayaan</li>
              <li>Olahraga</li>
              <li>Bidang Penalaran</li>
              <li>Bidang Kerohanian</li>
              <li>Bidang Sosial</li>
            </ul>
          </div>
        </button>
      </div>
    </div>
  @endif
  <div class="col mx-4">
    <div class="row gx-5 mb-5">
      <div>
        <h3 class="pb-3 fw-semibold " style="color: #5f5f5f; border-bottom: 3px solid #507ca5">Kesenian & Kebudayaan</h3>
      </div>
      @foreach ($ukmList as $ukm)
        @if ($ukm["jenis_ukm"] != "Kesenian & Kebudayaan")
          @continue
        @endif
        <div class="col-4 d-flex my-4">
          <div class="card border-0 position-relative ps-2 pe-3 py-2" style="width: 100%; background-color: {{ $ukm["status_ukm"] == "aktif" ? "white" : "#d7d2d2" }}">
            <div class="card-body d-flex align-items-center">
              <img src="/images/logo-ukm/{{ $ukm["logo_ukm"] != null ? $ukm["logo_ukm"] : "no-logo.png" }}" alt="Gambar UKM" width="130px" height="130px">
              <div class="ms-4">
                <span class="d-block mb-1">Nama UKM</span>
                <h6>{{ $ukm["nama_ukm"] }}</h6>
                <span class="d-block mb-1">Jenis UKM</span>
                <h6>{{ $ukm["jenis_ukm"] }}</h6>
              </div>
            </div>
            <div class="position-absolute btn-detail">
              @if ($ukm["nama_ukm"] == "UKM Aceh")           
                <button type="button" class="btn p-0 border-0 text-3xs" data-bs-toggle="modal" data-bs-target="#detailModal" style="color: #507ca5;">Lihat detail</button>
              @else
                <button type="button" class="btn p-0 border-0 text-3xs"" style="color: #507ca5;">Lihat detail</button>
              @endif
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <div class="row gx-5 mb-5">
      <div>
        <h3 class="pb-3 fw-semibold " style="color: #5f5f5f; border-bottom: 3px solid #507ca5">Olahraga</h3>
      </div>
      @foreach ($ukmList as $ukm)
        @if ($ukm["jenis_ukm"] != "Olahraga")
          @continue
        @endif
        <div class="col-4 d-flex my-4">
          <div class="card border-0 position-relative ps-2 pe-3 py-2" style="width: 100%; background-color: {{ $ukm["status_ukm"] == "aktif" ? "white" : "#d7d2d2" }}">
            <div class="card-body d-flex align-items-center">
              <img src="/images/logo-ukm/{{ $ukm["logo_ukm"] != null ? $ukm["logo_ukm"] : "no-logo.png" }}" alt="Gambar UKM" width="130px" height="130px">
              <div class="ms-4">
                <span class="d-block mb-1">Nama UKM</span>
                <h6>{{ $ukm["nama_ukm"] }}</h6>
                <span class="d-block mb-1">Jenis UKM</span>
                <h6>{{ $ukm["jenis_ukm"] }}</h6>
              </div>
            </div>
            <div class="position-absolute btn-detail">
              <button type="button" class="btn p-0 border-0 text-3xs"" style="color: #507ca5;">Lihat detail</button>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <div class="row gx-5 mb-5">
      <div>
        <h3 class="pb-3 fw-semibold " style="color: #5f5f5f; border-bottom: 3px solid #507ca5">Penalaran</h3>
      </div>
      @foreach ($ukmList as $ukm)
        @if ($ukm["jenis_ukm"] != "Penalaran")
          @continue
        @endif
        <div class="col-4 d-flex my-4">
          <div class="card border-0 position-relative ps-2 pe-3 py-2" style="width: 100%; background-color: {{ $ukm["status_ukm"] == "aktif" ? "white" : "#d7d2d2" }}">
            <div class="card-body d-flex align-items-center">
              <img src="/images/logo-ukm/{{ $ukm["logo_ukm"] != null ? $ukm["logo_ukm"] : "no-logo.png" }}" alt="Gambar UKM" width="130px" height="130px">
              <div class="ms-4">
                <span class="d-block mb-1">Nama UKM</span>
                <h6>{{ $ukm["nama_ukm"] }}</h6>
                <span class="d-block mb-1">Jenis UKM</span>
                <h6>{{ $ukm["jenis_ukm"] }}</h6>
              </div>
            </div>
            <div class="position-absolute btn-detail">
              <button type="button" class="btn p-0 border-0 text-3xs"" style="color: #507ca5;">Lihat detail</button>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <div class="row gx-5 mb-5">
      <div>
        <h3 class="pb-3 fw-semibold " style="color: #5f5f5f; border-bottom: 3px solid #507ca5">Kerohanian</h3>
      </div>
      @foreach ($ukmList as $ukm)
        @if ($ukm["jenis_ukm"] != "Kerohanian")
          @continue
        @endif
        <div class="col-4 d-flex my-4">
          <div class="card border-0 position-relative ps-2 pe-3 py-2" style="width: 100%; background-color: {{ $ukm["status_ukm"] == "aktif" ? "white" : "#d7d2d2" }}">
            <div class="card-body d-flex align-items-center">
              <img src="/images/logo-ukm/{{ $ukm["logo_ukm"] != null ? $ukm["logo_ukm"] : "no-logo.png" }}" alt="Gambar UKM" width="130px" height="130px">
              <div class="ms-4">
                <span class="d-block mb-1">Nama UKM</span>
                <h6>{{ $ukm["nama_ukm"] }}</h6>
                <span class="d-block mb-1">Jenis UKM</span>
                <h6>{{ $ukm["jenis_ukm"] }}</h6>
              </div>
            </div>
            <div class="position-absolute btn-detail">
              <button type="button" class="btn p-0 border-0 text-3xs"" style="color: #507ca5;">Lihat detail</button>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <div class="row gx-5 mb-5">
      <div>
        <h3 class="pb-3 fw-semibold " style="color: #5f5f5f; border-bottom: 3px solid #507ca5">Sosial</h3>
      </div>
      @foreach ($ukmList as $ukm)
        @if ($ukm["jenis_ukm"] != "Sosial")
          @continue
        @endif
        <div class="col-4 d-flex my-4">
          <div class="card border-0 position-relative ps-2 pe-3 py-2" style="width: 100%; background-color: {{ $ukm["status_ukm"] == "aktif" ? "white" : "#d7d2d2" }}">
            <div class="card-body d-flex align-items-center">
              <img src="/images/logo-ukm/{{ $ukm["logo_ukm"] != null ? $ukm["logo_ukm"] : "no-logo.png" }}" alt="Gambar UKM" width="130px" height="130px">
              <div class="ms-4">
                <span class="d-block mb-1">Nama UKM</span>
                <h6>{{ $ukm["nama_ukm"] }}</h6>
                <span class="d-block mb-1">Jenis UKM</span>
                <h6>{{ $ukm["jenis_ukm"] }}</h6>
              </div>
            </div>
            <div class="position-absolute btn-detail">
              <button type="button" class="btn p-0 border-0 text-3xs"" style="color: #507ca5;">Lihat detail</button>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>

  <div class="modal fade" id="detailModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content position-relative rounded-4">
        <button type="button" class="btn-close position-absolute z-3 shadow-none" data-bs-dismiss="modal"></button>
        <div class="modal-body m-3 detail-modal-body">
          <div class="row gx-5">
            <div class="col-3 text-center">
              <img class="mt-2 rounded-4" src="/images/logo-ukm/ukm-aceh.png" alt="Gambar UKM" width="95%">
            </div>
            <div class="col mt-2">
              <div class="mb-3">
                <span class="mb-1 d-block text-3xs">Nama UKM</span>
                <h6 class="text-2xs">UKM Aceh</h6>
              </div>
              <div class="mb-3">
                <span class="mb-1 d-block text-3xs">Jenis UKM</span>
                <h6 class="text-2xs">Kesenian & Kebudayaan</h6>
              </div>
              <div class="mb-3">
                <span class="mb-1 d-block text-3xs">Pengurus</span>
                <h6 class="text-2xs">XXXXX - Ketua</h6>
                <h6 class="text-2xs">YYYYY - Wakil Ketua</h6>
                <h6 class="text-2xs">BBBBB - Bendahara</h6>
                <h6 class="text-2xs">AAAA - Sekretaris</h6>
              </div>
              <div class="mb-3">
                <span class="mb-1 d-block text-3xs">Contact Person</span>
                <h6 class="text-2xs"><img src="/images/icons/telp.png" alt="Icon">(Farhan)+62 812 3847 3847</h6>
                <h6 class="text-2xs"><img src="/images/icons/line.png" alt="Icon">@hsgd78</h6>
                <h6 class="text-2xs"><img src="/images/icons/instagram.png" alt="Icon">@ukmaceh_telU</h6>
              </div>
              <div>
                <span class="mb-1 d-block text-3xs">Tentang UKM</span>
                <h6 class="text-2xs" style="text-align: justify">Qorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad </h6>
              </div>
            </div>
          </div>
          @if (auth()->user()->role == "ditmawa") 
            <div class="row gx-5 justify-content-end">
              <div class="col-3 d-flex justify-content-end">
                <button type="button" class="btn border-0 d-flex align-items-center status {{ $ukmList[1]["status_ukm"] == "aktif" ? "ditolak" : "acc" }}" data-bs-toggle="modal" data-bs-target="#confirmModal"><img class="me-2" src="/images/icons/nonaktif.png" alt="Icon">{{ $ukmList[1]["status_ukm"] == "aktif" ? "Nonaktifkan" : "Aktifkan" }} UKM</button>
              </div>
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="confirmModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal">
      <div class="modal-content position-relative rounded-4">
        <div class="modal-body d-flex justify-content-center align-items-center" style="height: 200px">
          <div class="text-center">
            <span class="fw-medium d-block mb-4">Apakah anda yakin ingin {{ $ukmList[1]["status_ukm"] == "aktif" ? "menonaktifkan" : "mengaktifkan" }} UKM?</span>
            <div class="d-flex justify-content-center">
              <form action="/ukm/2" method="post">
                @method("patch")
                @csrf
                <button type="submit" class="btn border-0 py-2 px-5 text-white text-3xs me-4" name="status" value="{{ $ukmList[1]["status_ukm"] == "aktif" ? "nonaktif" : "aktif" }}" style="background-color: #507CA5">Ya</button>
              </form>
              <button type="button" class="btn border-0 py-2 px-5 text-white text-3xs" style="background-color: #e82e45" data-bs-dismiss="modal" data-bs-target="#confirmModal">Tidak</button>
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
  <script>
    const btnPilihTahun = document.querySelector(".btn-pilih-tahun");
    const listTahun = document.querySelectorAll(".pilih-tahun li");
    const tahunYgDipilih = document.querySelector(".tahun");

    btnPilihTahun.addEventListener("click", () => {
      btnPilihTahun.lastElementChild.classList.toggle("d-none");
      if(document.querySelector(".icon").src == "http://127.0.0.1:8000/images/icons/chevron-right.png") {
        document.querySelector(".icon").src = "http://127.0.0.1:8000/images/icons/chevron-down-black.png"
        document.querySelector(".icon").setAttribute("width", "16px")
      } else {
        document.querySelector(".icon").src = "http://127.0.0.1:8000/images/icons/chevron-right.png"
        document.querySelector(".icon").setAttribute("width", "9px")
      } 
    })

    listTahun.forEach(tahun => {
      tahun.addEventListener("click", function() {
        tahunYgDipilih.textContent = this.textContent;
      })
    })
  </script>
  <script>
    const myModal = new bootstrap.Modal(document.getElementById('success'))
    myModal.show()
  </script>
@endsection