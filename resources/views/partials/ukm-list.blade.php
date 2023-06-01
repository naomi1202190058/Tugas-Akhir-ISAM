@if (Request::is("rapor*"))
  <a href="/rapor/rapor-detail" class="text-decoration-none">
    <div class="col-4 d-flex justify-content-center my-4">
      <div class="card border-0 position-relative pe-3 ukm-card" style="width: fit-content">
        <div class="card-body d-flex align-items-center">
          <img src="/images/logo-ukm/telu-esport.png" alt="Gambar UKM" width="110px">
          <div class="ms-4">
            <span class="d-block mb-1">Nama UKM</span>
            <h6>Telkom University Esports</h6>
            <span class="d-block mb-1">Jenis UKM</span>
            <h6>Olahraga</h6>
          </div>
        </div>
      </div>
    </div>
  </a>
@elseif (Request::is("lpj*"))
  <a href="/lpj/lpj-detail" class="text-decoration-none">
    <div class="col-4 d-flex justify-content-center my-4">
      <div class="card border-0 position-relative pe-3 ukm-card" style="width: fit-content">
        <div class="card-body d-flex align-items-center">
          <img src="/images/logo-ukm/telu-esport.png" alt="Gambar UKM" width="110px">
          <div class="ms-4">
            <span class="d-block mb-1">Nama UKM</span>
            <h6>Telkom University Esports</h6>
            <span class="d-block mb-1">Jenis UKM</span>
            <h6>Olahraga</h6>
          </div>
        </div>
      </div>
    </div>
  </a>
@elseif (Request::is("ukm"))
  <div class="col-4 d-flex justify-content-center my-4">
    <div class="card border-0 position-relative pe-3 ukm-card" style="width: fit-content">
      <div class="card-body d-flex align-items-center">
        <img src="/images/logo-ukm/telu-esport.png" alt="Gambar UKM" width="110px">
        <div class="ms-4">
          <span class="d-block mb-1">Nama UKM</span>
          <h6>Telkom University Esports</h6>
          <span class="d-block mb-1">Jenis UKM</span>
          <h6>Olahraga</h6>
        </div>
      </div>
      <div class="position-absolute btn-detail">
        <button type="button" class="btn p-0 border-0" data-bs-toggle="modal" data-bs-target="#detailModal" style="color: #507ca5;">Lihat detail</button>
      </div>
    </div>
  </div>
@endif
