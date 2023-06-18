<nav class="navbar bg-red py-3 fixed-top">
  <div class="container-fluid mx-5">
    <a data-bs-toggle="offcanvas" href="#sidebar" role="button">
      <img src="/images/icons/menu.png" alt="Icon" width="25px">
    </a>
    <a href="/" class="logo-navbar">
      <img src="/images/logo/logo.png" alt="Logo" />
    </a>
    <div class="d-flex align-items-center">
      @if (session()->get("role") == "ukm")
        <a href="/profile" class="text-decoration-none">
          <div class="d-flex align-items-center me-5">
            <img class="rounded-circle" src="/images/logo-ukm/telkom-university-esports.png" alt="Profile Picture" width="40px">
            <div class="text-3xs ms-2">
              <span class="text-white fw-medium">Tel-U E-Sports</span>
              <span class="d-block" style="color: #E0E0E0">Admin</span class="text-3xs">
            </div>
          </div>
        </a>
      @else
        <div class="d-flex align-items-center me-5">
          <img class="rounded-circle" src="/images/ditmawa.png" alt="Profile Picture" width="40px">
          <div class="text-3xs ms-2">
            <span class="text-white fw-medium">Ditmawa</span>
            <span class="d-block" style="color: #E0E0E0">Admin</span class="text-3xs">
          </div>
        </div>
      @endif
      <button type="button" class="btn border-0 notif-icon">
        <img src="/images/icons/notif.png" alt="Icon" width="25px">
      </button>
    </div>
  </div>
  <div class="position-absolute bg-white d-none notif-container">
    <div class="d-flex justify-content-between align-items-center py-2 px-3">
      <div class="d-flex align-items-center">
        <span class="text-3xs fw-medium d-block me-2">Notifications</span>
      </div>
      <div class="read-all">
        <span class="text-3xs">Mark all as read</span>
        <img src="/images/icons/read.png" alt="Icon" width="12px">
      </div>
    </div>
    @if (session()->get("role") == "ukm")
      <div class="d-flex border-bottom py-2 px-3 position-relative notif-message">
        <div class="new-notif"></div>
        <div class="pt-2 pe-3">
          <img class="rounded-circle" src="/images/logo-ukm/telkom-university-esports.png" alt="Logo UKM" width="34px">
        </div>
        <div>
          <span class="fw-semibold text-3xs">RKU baru berhasil diajukan, menunggu ACC Ditmawa</span>
          <span class="fw-medium text-3xs d-block pt-2" style="color: #A5ACB8">Yesterday at 11:42 PM</span>
        </div>
      </div>
      <div class="d-flex border-bottom py-2 px-3 position-relative notif-message">
        <div class="new-notif"></div>
        <div class="pt-2 pe-3">
          <img class="rounded-circle" src="/images/logo-ukm/telkom-university-esports.png" alt="Logo UKM" width="34px">
        </div>
        <div>
          <span class="fw-semibold text-3xs">LPJ berhasil diupload, menunggu ACC Ditmawa</span>
          <span class="fw-medium text-3xs d-block pt-2" style="color: #A5ACB8">Yesterday at 11:42 PM</span>
        </div>
      </div>
    @else
      <div class="d-flex border-bottom py-2 px-3 position-relative notif-message">
        <div class="new-notif"></div>
        <div class="pt-2 pe-3">
          <img class="rounded-circle" src="/images/logo-ukm/telkom-university-esports.png" alt="Logo UKM" width="34px">
        </div>
        <div>
          <span class="fw-semibold text-3xs">LPJ berhasil diajukan, menunggu ACC Ditmawa</span>
          <span class="fw-medium text-3xs d-block pt-2" style="color: #A5ACB8">Yesterday at 11:42 PM</span>
        </div>
      </div>
      <div class="d-flex border-bottom py-2 px-3 position-relative notif-message">
        <div class="new-notif"></div>
        <div class="pt-2 pe-3">
          <img class="rounded-circle" src="/images/logo-ukm/telkom-university-esports.png" alt="Logo UKM" width="34px">
        </div>
        <div>
          <span class="fw-semibold text-3xs">Telkom University E-sports telah melakukan upload LPJ</span>
          <span class="fw-medium text-3xs d-block pt-2" style="color: #A5ACB8">Yesterday at 11:42 PM</span>
        </div>
      </div>
      <div class="d-flex border-bottom py-2 px-3 position-relative notif-message">
        <div class="pt-2 pe-3">
          <img class="rounded-circle" src="/images/logo-ukm/telkom-university-esports.png" alt="Logo UKM" width="34px">
        </div>
        <div>
          <span class="fw-semibold text-3xs">Telkom University E-sports telah memilih Jadwal Presentasi</span>
          <span class="fw-medium text-3xs d-block pt-2" style="color: #A5ACB8">Last Wednesday at 11:15 AM</span>
        </div>
      </div>
      <div class="d-flex border-bottom py-2 px-3 position-relative notif-message">
        <div class="pt-2 pe-3">
          <img class="rounded-circle" src="/images/logo-ukm/telkom-university-esports.png" alt="Logo UKM" width="34px">
        </div>
        <div>
          <span class="fw-semibold text-3xs">Telkom University E-sports telah mengajukan Proposal Baru</span>
          <span class="fw-medium text-3xs d-block pt-2" style="color: #A5ACB8">Last Wednesday at 11:15 AM</span>
        </div>
      </div>
    </div>
    @endif
</nav>