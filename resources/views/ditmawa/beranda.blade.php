@extends('layouts.beranda')

@section('navigation')
  <div class="container d-flex justify-content-start align-items-center" style="height: 35rem">
    <div class="row gx-5 gy-4">
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
        <a href="/proposal/monitoring/waiting" class="navigation bg-white d-flex align-items-center rounded-3 p-4">
          <div class="rounded-circle bg-sky p-4 me-3">
            <img src="/images/icons/navigation/monitoring-proposal.png" alt="Icon">
          </div>
          <div>
            <h5 class="text-xs">Monitoring Proposal</h5>
            <span class="text-3xs">Monitoring pengajuan proposal UKM</span>
          </div>
        </a>
      </div>
      <div class="col-4">
        <a href="/rapor" class="navigation bg-white d-flex align-items-center rounded-3 p-4">
          <div class="rounded-circle bg-sky p-4 me-3">
            <img src="/images/icons/navigation/rapor-ukm.png" alt="Icon">
          </div>
          <div>
            <h5 class="text-xs">Rapor UKM</h5>
            <span class="text-3xs">Lakukan penilaian untuk UKM</span>
          </div>
        </a>
      </div>
      <div class="col-4">
        <a href="/rku/waiting" class="navigation bg-white d-flex align-items-center rounded-3 p-4">
          <div class="rounded-circle bg-sky p-4 me-3">
            <img src="/images/icons/navigation/rku.png" alt="Icon">
          </div>
          <div>
            <h5 class="text-xs">RKU</h5>
            <span class="text-3xs">Monitoring rencana kegiatan UKM</span>
          </div>
        </a>
      </div>
      <div class="col-4">
        <a href="/edit-banner" class="navigation bg-white d-flex align-items-center rounded-3 p-4">
          <div class="rounded-circle bg-sky p-4 me-3">
            <img src="/images/icons/navigation/edit-banner-pengajuan-proposal.png" alt="Icon">
          </div>
          <div>
            <h5 class="text-xs">Edit Banner</h5>
            <span class="text-3xs">Edit banner ISAM</span>
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
            <span class="text-3xs">Monitoring laporan pertanggung jawaban UKM</span>
          </div>
        </a>
      </div>
    </div>
  </div>
@endsection