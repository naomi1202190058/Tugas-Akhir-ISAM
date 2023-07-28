@extends('layouts.primary')

@section('header')
  <div class="col">
    <h3 class="pt-4 pb-3 fw-semibold" style="color: #5f5f5f;">Pengajuan Proposal Kegiatan UKM</h3>
  </div>
@endsection

@section('content')
  <form action="/proposal/pengajuan" class="p-5" method="post">
    @csrf
    <div class="col-10">
      <div class="mb-3">
        <label for="kegiatan" class="form-label fw-medium">Nama Kegiatan</label>
        <input type="text" class="form-control" id="kegiatan" name="kegiatan" placeholder="Nama Kegiatan">
      </div>
      <div class="mb-3">
        <label for="deskripsi_kegiatan" class="form-label fw-medium">Deskripsi Kegiatan</label>
        <input type="text" class="form-control" id="deskripsi_kegiatan" name="deskripsi_kegiatan" placeholder="Deskripsi Kegiatan">
      </div>
      <div class="mb-3">
        <label for="sdgs" class="form-label fw-medium">SDGs</label>
        <select class="form-select shadow-none" id="sdgs" name="sdgs" required>
          <option>Pilih SDGs</option>
          <option value="1">SDGs (1); Tanpa Kemiskinan</option>
          <option value="2">SDGs (2); Tanpa Kelaparan</option>
          <option value="3">SDGs (3); Kehidupan Sehat dan Sejahtera</option>
          <option value="4">SDGs (4); Pendidikan Berkualitas</option>
          <option value="5">SDGs (5); Kesetaraan Gender</option>
          <option value="6">SDGs (6); Air Bersih dan Sanitasi Layak</option>
          <option value="7">SDGs (7); Energi Bersih dan Terjangkau</option>
          <option value="8">SDGs (8); Pekerjaan Layak dan Pertumbuhan Ekonomi</option>
          <option value="9">SDGs (9); Industri, Inovasi dan Infrastruktur</option>
          <option value="10">SDGs (10); Berkurangnya Kesenjangan</option>
          <option value="11">SDGs (11); Kota dan Pemukiman yang Berkelanjutan</option>
          <option value="12">SDGs (12); Konsumsi dan Produksi yang Bertanggung Jawab</option>
          <option value="13">SDGs (13); Penanganan Perubahan Iklim</option>
          <option value="14">SDGs (14); Ekosistem Lautan</option>
          <option value="15">SDGs (15); Ekosistem Daratan</option>
          <option value="16">SDGs (16); Perdamaian, Keadilan dan Kelembahaan yang Tangguh</option>
          <option value="17">SDGs (17); Kemitraan untuk Mencapai Tujuan</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="jenis_kegiatan" class="form-label fw-medium">Jenis Kegiatan</label>
        <input type="text" class="form-control" id="jenis_kegiatan" name="jenis_kegiatan" placeholder="Jenis Kegiatan">
      </div>
      <div class="mb-3">
        <label for="tanggal_pelaksanaan" class="form-label fw-medium">Tanggal Pelaksanaan</label>
        <input type="date" class="form-control text-uppercase" id="tanggal_pelaksanaan" name="tanggal_pelaksanaan">
      </div>
      <div class="mb-3">
        <label for="tempat_kegiatan" class="form-label fw-medium">Lokasi Kegiatan</label>
        <input type="text" class="form-control" id="tempat_kegiatan" name="tempat_kegiatan" placeholder="Lokasi Kegiatan">
      </div>
      <div class="mb-3">
        <label for="target_peserta" class="form-label fw-medium">Target Peserta</label>
        <input type="number" class="form-control" id="target_peserta" name="target_peserta" placeholder="Peserta" min="1">
      </div>
      <div class="mb-3">
        <label for="jumlah_panitia" class="form-label fw-medium">Jumlah Panitia</label>
        <input type="number" class="form-control" id="jumlah_panitia" name="jumlah_panitia" placeholder="Panitia" min="1">
      </div>
    </div>
    <div class="col-5">
      <div class="mb-3">
        <label for="anggaran_kegiatan" class="form-label fw-medium">Anggaran Kegiatan</label>
        <div class="input-group">
          <span class="input-group-text bg-transparent border border-end-0" style="color: #7b7a7a">Rp.</span>
          <input type="text" class="form-control border border-start-0" id="anggaran_kegiatan" name="anggaran_kegiatan" style="margin-left: -10px">
        </div>
      </div>
      <div class="mb-3">
        <label for="budget_submited" class="form-label fw-medium">Budget Submited</label>
        <div class="input-group">
          <span class="input-group-text bg-transparent border border-end-0" style="color: #7b7a7a">Rp.</span>
          <input type="text" class="form-control border border-start-0" id="budget_submited" name="budget_submited" style="margin-left: -10px">
        </div>
      </div>
    </div>
    <div class="row g-0" style="height: min-content">
      <div class="col-5 me-4">
        <div class="mb-3">
          <label for="nama_cp" class="form-label fw-medium">Contact Person</label>
          <input type="text" class="form-control" id="nama_cp" name="nama_cp" placeholder="Nama CP">
        </div>
      </div>
      <div class="col-5 d-flex align-items-end">
        <div class="mb-3" style="width: 95%">
          <div class="input-group">
            <span class="input-group-text bg-transparent border border-end-0" style="color: #7b7a7a">(+62)</span>
            <input type="text" class="form-control border border-start-0" id="no_cp" name="no_cp" style="margin-left: -10px">
          </div>
        </div>
      </div>
    </div>
    <div class="col-10">
      <label for="nama_cp" class="form-label fw-medium">Dokumen Proposal</label>
      <p class="m-0 text-3xs mb-3">PDF, Max 5 mb</p>
      <div class="d-flex align-items-center">
        <button type="button" class="btn text-white me-3 d-flex align-items-center upload-button"><img class="me-2" src="/images/icons/upload-dokumen.png" alt="Icon" width="20px">Upload Dokumen</button>
        <input type="file" class="d-none input-file" accept=".docx, .doc, .pdf" name="dokumen">
        <span style="color: #7b7a7a"></span>
      </div>
    </div>
    <div class="col-12 d-flex justify-content-center mt-5">
      <button type="submit" class="btn text-white px-5 border-0 submit-button" style="background-color:#507CA5;" disabled>Submit</button>
    </div>
  </form>
@endsection

@section('myscript')
  <script src="/js/form-handler.js"></script>
  <script>
    const anggaranKegiatan = document.getElementById('anggaran_kegiatan');
    const budgetSubmitted = document.getElementById('budget_submited');
    
    const formatRupiah = (value) => {
      let number_string = value.replace(/[^,\d]/g, '').toString(),
      split    = number_string.split(','),
      sisa     = split[0].length % 3,
      rupiah     = split[0].substr(0, sisa),
      ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
      
      if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
      }
      
      rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return rupiah;
    }
    
    anggaranKegiatan.addEventListener('keyup', function() {
      anggaranKegiatan.value = formatRupiah(this.value);
    });

    budgetSubmitted.addEventListener('keyup', function() {
        budgetSubmitted.value = formatRupiah(this.value);
      });
  </script>
@endsection