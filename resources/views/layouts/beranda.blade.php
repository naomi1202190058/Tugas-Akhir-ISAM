<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ISAM</title>
  {{-- My Fonts --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@500&family=Inter:wght@400;500;600&family=Lexend:wght@500;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  {{-- Bootstrap --}}
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  {{-- My CSS --}}
  <link rel="stylesheet" href="/css/style.css">
<body style="background-color: #f6f1f1">
  @include('partials.navbar')

  @include('partials.sidebar')

  <div id="home-header" class="carousel slide header">
    <div class="carousel-indicators align-items-center">
      <button type="button" data-bs-target="#home-header" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#home-header" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#home-header" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner" style="color: #5f5f5f">
      <div class="carousel-item active">
        <div class="d-flex align-items-center">
          <div class="ms-5 ps-2">
            <h1 class="text-xl fw-semibold">Timeline pencairan dana Kegiatan UKM</h1>
            <p class="my-4">Pencairan dana untuk kegiatan UKM Telkom University terbagi pada time line yang telah ditentukan. Ajukan proposal kegiatan untuk mendapatkan pencairan dana sesuai dengan syarat dan ketentuan yang berlaku.</p>
            <a href="" class="py-2 px-3 rounded-2 fw-medium btn-home-header">Lihat Selengkapnya</a>
          </div>
          <img src="/images/home-header/home-header-1.png" class="h-full" alt="...">
        </div>
      </div>
      <div class="carousel-item">
        <div class="d-flex align-items-center">
          <div class="ms-5 ps-2">
            <h1 class="text-xl fw-semibold">Alur pencairan dana Kegiatan UKM</h1>
            <p class="my-4">Selamat datang di program pencairan dana kegiatan UKM! Kami sangat senang untuk mendukung kegiatan UKM Anda dengan memberikan akses ke dana yang diperlukan untuk mewujudkan ide-ide brilian Anda.</p>
            <a href="" class="py-2 px-3 rounded-2 fw-medium btn-home-header">Lihat Selengkapnya</a>
          </div>
          <img src="/images/home-header/home-header-1.png" class="h-full" alt="...">
        </div>
      </div>
      <div class="carousel-item">
        <div class="d-flex align-items-center">
          <div class="ms-5 ps-2">
            <h1 class="text-xl fw-semibold">SDGs</h1>
            <p class="my-4">Norem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
            <a href="" class="py-2 px-3 rounded-2 fw-medium btn-home-header">Lihat Selengkapnya</a>
          </div>
          <img src="/images/home-header/home-header-3.png" class="h-full" alt="...">
        </div>
      </div>
    </div>
  </div>

  @yield('navigation')
  
  @yield('myscript')
  <script src="/js/dropdown.js"></script>
  <script src="/js/notification.js"></script>
  <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>