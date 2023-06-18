@extends('layouts.secondary')

@section('header')
  <div class="col">
    <h3 class="pt-4 pb-3 fw-semibold">Profil UKM</h3>
  </div>
  <div class="col-2 d-flex justify-content-end">
    <a href="/profile/edit" class="btn border-0 d-flex align-items-center px-3" style="background-color: white"><img class="me-2" src="/images/icons/edit.png" alt="Icon" width="18px">Edit Profil</a>
  </div>
@endsection

@section('content')
  <div class="col-3 text-center">
    <img class="mt-2 me-4 rounded-4" src="/images/logo-ukm/telu-esport.png" alt="Gambar UKM" width="80%">
  </div>
  <div class="col-9 mt-2 profil-ukm">
    <div class="mb-3">
      <span class="mb-1 d-block text-3xs">Nama UKM</span>
      <h6>Telkom University Esport</h6>
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
      <h6 class="text-2xs"><img src="/images/icons/instagram.png" alt="Icon">@telu_esport</h6>
    </div>
    <div>
      <span class="mb-1 d-block text-3xs">Tentang UKM</span>
      <h6 class="text-2xs" style="text-align: justify">Qorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad </h6>
    </div>
  </div>

  <div class="col-12 border-3 border-bottom">
    <h3 class="pt-4 pb-3 fw-semibold" style="color: #5f5f5f;">Struktur Organisasi</h3>
  </div>
  
  <div class="col-12 my-4 d-flex justify-content-end align-items-start">
    <form action="/profile" method="post" class="d-flex align-items-center">
      @csrf
      <div class="d-flex align-items-center"></div>
      <button type="button" class="btn border-0 d-flex align-items-center px-3 ms-3 edit-bagan" style="background-color: white"><img class="me-2" src="/images/icons/edit.png" alt="Icon" width="18px"><span>Edit Bagan</span></button>
      <input type="file" class="d-none input-file" accept="image/*" name="bagan">
    </form>
  </div>
  <div class="col-12 text-center mb-5">
    <img class="struktur-organisasi" src="/images/bagan.png" alt="Struktur Organisasi" width="70%">
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
    const editBagan = document.querySelector(".edit-bagan");
    const inputFile = document.querySelector(".input-file");
    const strukturOrganisasi = document.querySelector(".struktur-organisasi");

    editBagan.addEventListener("click", () => {
      inputFile.click();
    }, {once: true})
    
    inputFile.addEventListener("change", () => {
      const newImageSrc = URL.createObjectURL(inputFile.files[0]);
      
      editBagan.previousElementSibling.innerHTML = /* HTML */ `<img class="me-1" src="/images/icons/file.svg" alt="Icon" width="12px"><span style="color: #7b7a7a">${inputFile.files[0].name.split(".")[0]}</span>`;
      editBagan.style.backgroundColor = "#507CA5";
      editBagan.style.color = "white";
      editBagan.lastChild.textContent = "Simpan";
      editBagan.firstChild.src = "/images/icons/save.png";
      editBagan.type = "submit";
      strukturOrganisasi.src = newImageSrc;
    })

    const myModal = new bootstrap.Modal(document.getElementById('success'))
    myModal.show()
  </script>
@endsection