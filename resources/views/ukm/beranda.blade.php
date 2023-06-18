@extends('layouts.beranda')

@section('navigation')
  <div class="container d-flex align-items-center" style="height: 35rem">
    <div class="row g-4">
      <div class="col-4">
        <a href="/ukm" class="navigation bg-white d-flex align-items-center rounded-3 p-4">
          <div class="rounded-circle bg-sky p-4 me-3">
            <img src="/images/icons/navigation/ukm.png" alt="Icon">
          </div>
          <div>
            <h5 class="text-xs">UKM</h5>
            <span class="text-3xs">Lihat daftar UKM yang ada di Telkom University</span>
          </div>
        </a>
      </div>
      <div class="col-4">
        <a href="/proposal/pengajuan" class="navigation bg-white d-flex align-items-center rounded-3 p-4">
          <div class="rounded-circle bg-sky p-4 me-3">
            <img src="/images/icons/navigation/edit-banner-pengajuan-proposal.png" alt="Icon">
          </div>
          <div>
            <h5 class="text-xs">Pengajuan Proposal</h5>
            <span class="text-3xs">Buat ajuan proposal kegiatan UKM</span>
          </div>
        </a>
      </div>
      <div class="col-4">
        <a href="/rapor" class="navigation bg-white d-flex align-items-center rounded-3 p-4">
          <div class="rounded-circle bg-sky p-4 me-3">
            <img src="/images/icons/navigation/edit-banner-pengajuan-proposal.png" alt="Icon">
          </div>
          <div>
            <h5 class="text-xs">Rapor UKM</h5>
            <span class="text-3xs">Lihat hasil penilaian UKM</span>
          </div>
        </a>
      </div>
      <div class="col-4">
        <a href="/rku" class="navigation bg-white d-flex align-items-center rounded-3 p-4">
          <div class="rounded-circle bg-sky p-4 me-3">
            <img src="/images/icons/navigation/rku.png" alt="Icon">
          </div>
          <div>
            <h5 class="text-xs">RKU</h5>
            <span class="text-3xs">Tambahkan rencana kegiatan UKM</span>
          </div>
        </a>
      </div>
      <div class="col-4">
        <a href="/proposal/monitoring" class="navigation bg-white d-flex align-items-center rounded-3 p-4">
          <div class="rounded-circle bg-sky p-4 me-3">
            <img src="/images/icons/navigation/monitoring-proposal.png" alt="Icon">
          </div>
          <div>
            <h5 class="text-xs">Monitoring Proposal</h5>
            <span class="text-3xs">Cek status pengajuan proposal</span>
          </div>
        </a>
      </div>
      <div class="col-4">
        <a href="/lpj" class="navigation bg-white d-flex align-items-center rounded-3 p-4">
          <div class="rounded-circle bg-sky p-4 me-3">
            <img src="/images/icons/navigation/lpj.png" alt="Icon">
          </div>
          <div>
            <h5 class="text-xs">LPJ</h5>
            <span class="text-3xs">Laporan pertanggung jawaban</span>
          </div>
        </a>
      </div>
    </div>
  </div>
@endsection