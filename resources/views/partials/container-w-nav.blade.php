<div class="row g-0 mt-4 margin-left-right" style="margin-bottom: -2px">
  <div class="col-2 waiting">
    <a class="text-decoration-none" href="{{ Request::is("rku*") ? "/rku/waiting" : "/proposal/monitoring/waiting" }}">
      <div class="rounded-top-5 {{ Request::is("rku/waiting") || Request::is("proposal/monitoring/waiting") ? "nav-active" : "nav-unactive" }}">
        <span class="ms-4 ps-3 d-block fw-bold py-3">Waiting</span>
      </div>
    </a>
  </div>
  <div class="col-2 rounded-top-5 approved">
    <a class="text-decoration-none" href="{{ Request::is("rku*") ? "/rku/approved" : "/proposal/monitoring/approved" }}">
      <div class="rounded-top-5 {{ Request::is("rku/approved") || Request::is("proposal/monitoring/approved") ? "nav-active" : "nav-unactive" }}">
        <span class="ms-4 ps-3 d-block fw-bold py-3">Approved</span>
      </div>
    </a>
  </div>
  <div class="col-2 rounded-top-5 declined">
    <a class="text-decoration-none" href="{{ Request::is("rku*") ? "/rku/declined" : "/proposal/monitoring/declined" }}">
      <div class="rounded-top-5 {{ Request::is("rku/declined") || Request::is("proposal/monitoring/declined") ? "nav-active" : "nav-unactive" }}">
        <span class="ms-4 ps-3 d-block fw-bold py-3">Declined</span>
      </div>
    </a>
  </div>
</div>
<div class="row bg-white margin-left-right" style="border-top-right-radius: 40px">
  @yield('content')
</div>