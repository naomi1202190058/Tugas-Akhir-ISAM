@extends('layouts.secondary')

@section('header')
  <div class="col">
    <h3 class="pt-4 pb-3 fw-semibold" style="color: #5f5f5f;">FAQ</h3>
  </div>
@endsection

@section('content')
  <div class="row justify-content-center mb-5 min-vh-100">
    <div class="col-8">
      {{-- <div class="px-4 py-3 mt-3 mb-4 rounded-3 d-flex align-items-center justify-content-between" style="background-color: #e4e7eb">
        <span class="fw-medium">Bagaimana cara mengajukan proposal kepada Direktorat Kemahasiswaan?</span>
        <button type="button" class="btn border-0">
          <img src="/images/icons/chevron-right.png" alt="Icon">
        </button>
      </div> --}}
      <div class="mt-3 mb-4 rounded-3 faq-container">
        <div class="px-4 py-3 d-flex align-items-center justify-content-between faq-title">
          <span class="fw-medium">Bagaimana cara mengajukan proposal kepada Direktorat Kemahasiswaan?</span>
          <button type="button" class="btn border-0 open-faq">
            <img src="/images/icons/chevron-right.png" alt="Icon">
          </button>
        </div>
        <div class="w-100 px-4 py-3 d-none" style="background-color: #e4e7eb">
          <span>Pada halaman dashboard, piih menu proposal. Lalu, pilih pengajuan proposal dan lengkapi informasi yang diperlukan. Pastikan proposal dibuat dengan sejelas-jelasnya dan kegiatan yang dilaksanakan sudah terdaftar pada saat periode Rencana Kegiatan UKM (RKU).</span>
        </div>
      </div>
      <div class="px-4 py-3 my-4 rounded-3 d-flex align-items-center justify-content-between" style="background-color: #e4e7eb">
        <span class="fw-medium">Bagaimana cara mengajukan jadwal presentasi?</span>
        <button type="button" class="btn border-0">
          <img src="/images/icons/chevron-right.png" alt="Icon">
        </button>
      </div>
      <div class="px-4 py-3 my-4 rounded-3 d-flex align-items-center justify-content-between" style="background-color: #e4e7eb">
        <span class="fw-medium">Bagaimana jika waktu yang saya tentukan pada jadwal presentasi tidak dapat dipilih?</span>
        <button type="button" class="btn border-0">
          <img src="/images/icons/chevron-right.png" alt="Icon">
        </button>
      </div>
      <div class="px-4 py-3 my-4 rounded-3 d-flex align-items-center justify-content-between" style="background-color: #e4e7eb">
        <span class="fw-medium">Berapa lama batas waktu pengumpulan LPJ setiap kegiatan selesai dilaksanakan?</span>
        <button type="button" class="btn border-0">
          <img src="/images/icons/chevron-right.png" alt="Icon">
        </button>
      </div>
      <div class="px-4 py-3 my-4 rounded-3 d-flex align-items-center justify-content-between" style="background-color: #e4e7eb">
        <span class="fw-medium">Bagaimana saya mengetahui batch pencairan dana kegiatan?</span>
        <button type="button" class="btn border-0">
          <img src="/images/icons/chevron-right.png" alt="Icon">
        </button>
      </div>
    </div>
  </div>
@endsection

@section('myscript')
  <script>
    const openFaq= document.querySelector(".open-faq");
    const faqContainer= document.querySelector(".faq-container");
    openFaq.addEventListener("click", () => {
      let src = openFaq.firstElementChild.src;
      console.log(src);
      faqContainer.classList.toggle("open");
      faqContainer.lastElementChild.classList.toggle("d-none");
      if(src == "http://127.0.0.1:8000/images/icons/chevron-right.png") {
        openFaq.innerHTML = /* HTML */ `<img src="/images/icons/chevron-down.png" alt="Icon">`
      } else {
        openFaq.innerHTML = /* HTML */ `<img src="/images/icons/chevron-right.png" alt="Icon">`
      }     
    });
  </script>
@endsection