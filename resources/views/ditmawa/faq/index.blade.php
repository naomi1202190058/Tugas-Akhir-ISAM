@extends('layouts.secondary')

@section('header')
  <div class="col-6">
    <h3 class="pt-4 pb-3 fw-semibold" style="color: #5f5f5f;">FAQ</h3>
  </div>
  <div class="col-6 text-end">
    <a href="/faq/tambah" class="btn border-0 text-white" style="background-color: #507ca5">+ Tambah FAQ</a>
  </div>
@endsection

@section('content')
  <div class="row justify-content-center mb-5 min-vh-100">
    <div class="col-8">
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
      <div class="mt-3 mb-4 rounded-3 faq-container">
        <div class="px-4 py-3 d-flex align-items-center justify-content-between faq-title">
          <span class="fw-medium">Bagaimana cara mengajukan jadwal presentasi?</span>
          <button type="button" class="btn border-0 open-faq">
            <img src="/images/icons/chevron-right.png" alt="Icon">
          </button>
        </div>
        <div class="w-100 px-4 py-3 d-none" style="background-color: #e4e7eb">
          <span>Pada menu proposal, pilih monitoring proposal. Apabila pada proposal yang baru diajukan belum dilakukan pemilihan jadwal presentasi. Anda akan diminta untuk melakukan pemilihan jadwal pada waktu yang masih tersedia.</span>
        </div>
      </div>
      <div class="mt-3 mb-4 rounded-3 faq-container">
        <div class="px-4 py-3 d-flex align-items-center justify-content-between faq-title">
          <span class="fw-medium">Bagaimana jika waktu yang saya tentukan pada jadwal presentasi tidak dapat dipilih?</span>
          <button type="button" class="btn border-0 open-faq">
            <img src="/images/icons/chevron-right.png" alt="Icon">
          </button>
        </div>
        <div class="w-100 px-4 py-3 d-none" style="background-color: #e4e7eb">
          <span>Anda hanya dapat melakukan pemilihan jadwal pada waktu yang masih tersedia. Jadwal yang masih dapat dipilih ditandai oleh warna hijau, sedangkan jadwal yang ditandai oleh warna merah artinya jadwal tersebut telah dipilih oleh UKM lain.</span>
        </div>
      </div>
      <div class="mt-3 mb-4 rounded-3 faq-container">
        <div class="px-4 py-3 d-flex align-items-center justify-content-between faq-title">
          <span class="fw-medium">Berapa lama batas waktu pengumpulan LPJ setiap kegiatan selesai dilaksanakan?</span>
          <button type="button" class="btn border-0 open-faq">
            <img src="/images/icons/chevron-right.png" alt="Icon">
          </button>
        </div>
        <div class="w-100 px-4 py-3 d-none" style="background-color: #e4e7eb">
          <span>Setelah kegiatan terlaksana, UKM wajib mengumpulkan Lembar Pertanggungjawaban melalui menu LPJ yang dapat diakses melalui halaman dashboard maksimal selama 14 hari setelah kegiatan selesai dilaksanakan. Sisa waktu yang tersisa untuk mengumpulkan LPJ juga dapat dilihat pada halaman LPJ.</span>
        </div>
      </div>
      <div class="mt-3 mb-4 rounded-3 faq-container">
        <div class="px-4 py-3 d-flex align-items-center justify-content-between faq-title">
          <span class="fw-medium">Bagaimana saya mengetahui batch pencairan dana kegiatan?</span>
          <button type="button" class="btn border-0 open-faq">
            <img src="/images/icons/chevron-right.png" alt="Icon">
          </button>
        </div>
        <div class="w-100 px-4 py-3 d-none" style="background-color: #e4e7eb">
          <span>Untuk pencairan dana, Direktorat Kemahasiswaan membaginya ke dalam beberapa batch selama satu periode. Timeline tersebut dapat Anda akses pada banner informasi yang tersedia pada halaman dashboard.</span>
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
    const openFaq= document.querySelectorAll(".open-faq");
    openFaq.forEach(of => {
      of.addEventListener("click", function() {
        const faqContainer = this.parentElement.parentElement;
        let src = this.firstElementChild.src;
        console.log(faqContainer);
        faqContainer.classList.toggle("open");
        faqContainer.lastElementChild.classList.toggle("d-none");
        if(src == "http://127.0.0.1:8000/images/icons/chevron-right.png") {
          this.innerHTML = /* HTML */ `<img src="/images/icons/chevron-down.png" alt="Icon">`
        } else {
          this.innerHTML = /* HTML */ `<img src="/images/icons/chevron-right.png" alt="Icon">`
        }     
      });
    })
  </script>
  <script>
    const myModal = new bootstrap.Modal(document.getElementById('success'))
    myModal.show()
  </script>
@endsection