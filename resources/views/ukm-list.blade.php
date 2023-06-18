@extends('layouts.secondary')

@section('header')
  <div class="col">
    <h3 class="pt-4 pb-3 fw-semibold">Daftar UKM</h3>
  </div>
  @if (session()->get("role") == "ditmawa")
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
          <div class="card border-0 position-relative ps-2 pe-3 py-2" style="width: 100%">
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
              @if ($ukm["nama_ukm"] == "Telkom University Esports")           
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
          <div class="card border-0 position-relative ps-2 pe-3 py-2" style="width: 100%">
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
              @if ($ukm["nama_ukm"] == "Telkom University Esports")           
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
        <h3 class="pb-3 fw-semibold " style="color: #5f5f5f; border-bottom: 3px solid #507ca5">Penalaran</h3>
      </div>
      @foreach ($ukmList as $ukm)
        @if ($ukm["jenis_ukm"] != "Penalaran")
          @continue
        @endif
        <div class="col-4 d-flex my-4">
          <div class="card border-0 position-relative ps-2 pe-3 py-2" style="width: 100%">
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
              @if ($ukm["nama_ukm"] == "Telkom University Esports")           
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
        <h3 class="pb-3 fw-semibold " style="color: #5f5f5f; border-bottom: 3px solid #507ca5">Kerohanian</h3>
      </div>
      @foreach ($ukmList as $ukm)
        @if ($ukm["jenis_ukm"] != "Kerohanian")
          @continue
        @endif
        <div class="col-4 d-flex my-4">
          <div class="card border-0 position-relative ps-2 pe-3 py-2" style="width: 100%">
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
              @if ($ukm["nama_ukm"] == "Telkom University Esports")           
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
        <h3 class="pb-3 fw-semibold " style="color: #5f5f5f; border-bottom: 3px solid #507ca5">Sosial</h3>
      </div>
      @foreach ($ukmList as $ukm)
        @if ($ukm["jenis_ukm"] != "Sosial")
          @continue
        @endif
        <div class="col-4 d-flex my-4">
          <div class="card border-0 position-relative ps-2 pe-3 py-2" style="width: 100%">
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
              @if ($ukm["nama_ukm"] == "Telkom University Esports")           
                <button type="button" class="btn p-0 border-0 text-3xs" data-bs-toggle="modal" data-bs-target="#detailModal" style="color: #507ca5;">Lihat detail</button>
              @else
                <button type="button" class="btn p-0 border-0 text-3xs"" style="color: #507ca5;">Lihat detail</button>
              @endif
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
              <img class="mt-2 rounded-4" src="/images/logo-ukm/telu-esport.png" alt="Gambar UKM" width="95%">
            </div>
            <div class="col mt-2">
              <div class="mb-3">
                <span class="mb-1 d-block text-3xs">Nama UKM</span>
                <h6 class="text-2xs">Telkom University Esports</h6>
              </div>
              <div class="mb-3">
                <span class="mb-1 d-block text-3xs">Jenis UKM</span>
                <h6 class="text-2xs">Olahraga</h6>
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
                <h6 class="text-2xs"><img src="/images/icons/instagram.png" alt="Icon">@volleyball_telU</h6>
              </div>
              <div>
                <span class="mb-1 d-block text-3xs">Tentang UKM</span>
                <h6 class="text-2xs" style="text-align: justify">Qorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad </h6>
              </div>
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
    const myModal = new bootstrap.Modal(document.getElementById('success'))
    myModal.show()
  </script>
@endsection