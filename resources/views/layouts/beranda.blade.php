<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SIPPROSI</title>
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
  
  <div id="home-header" class="carousel slide header ">
    <div class="carousel-indicators align-items-center">
      <button type="button" data-bs-target="#home-header" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#home-header" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#home-header" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" style="background: url('/images/home-header/home-header-1.png'); height: 566px; background-size: cover">
        <div class="d-flex align-items-center h-100">
          <div class="row" style="margin-left: 100px">
            <div class="col-7">
              <h1 class="text-xl fw-semibold">Timeline pencairan dana Kegiatan UKM</h1>
              <p class="my-4">Pencairan dana untuk kegiatan UKM Telkom University terbagi pada time line yang telah ditentukan. Ajukan proposal kegiatan untuk mendapatkan pencairan dana sesuai dengan syarat dan ketentuan yang berlaku.</p>
              <a href="" class="py-2 px-3 rounded-2 fw-medium btn-home-header">Lihat Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item" style="background: url('/images/home-header/home-header-2.png'); height: 566px; background-size: cover">
        <div class="d-flex align-items-center h-100">
          <div class="row" style="margin-left: 100px">
            <div class="col-7">
              <h1 class="text-xl fw-semibold">Alur pencairan dana Kegiatan UKM</h1>
              <p class="my-4">Selamat datang di program pencairan dana kegiatan UKM! Kami sangat senang untuk mendukung kegiatan UKM Anda dengan memberikan akses ke dana yang diperlukan untuk mewujudkan ide-ide brilian Anda.</p>
              <a href="" class="py-2 px-3 rounded-2 fw-medium btn-home-header">Lihat Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item" style="background: url('/images/home-header/home-header-3.png'); height: 566px; background-size: cover">
        <div class="d-flex align-items-center h-100">
          <div class="row" style="margin-left: 100px">
            <div class="col-7">
              <h1 class="text-xl fw-semibold">SDGs</h1>
              <p class="my-4">Norem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
              <a href="" class="py-2 px-3 rounded-2 fw-medium btn-home-header">Lihat Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#home-header" data-bs-slide="prev" style="width: fit-content">
      <svg width="60" height="60" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-left: 35px">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.28098 10.0234C7.03237 11.4245 9.17684 13.5579 10.6182 16.4406L8.38208 17.5586C7.15674 15.1078 5.30121 13.2412 3.71926 11.9756C2.93272 11.3464 2.226 10.8755 1.72002 10.5642C1.46739 10.4087 1.26583 10.2936 1.13067 10.2191C1.06313 10.1818 1.01226 10.1547 0.980009 10.1378L0.945858 10.1201L0.941134 10.1176L0.940539 10.1173C0.940567 10.1174 0.940595 10.1174 0.941134 10.1164L0.941106 7.88284C0.940568 7.88183 0.940539 7.88185 0.940511 7.88186L0.941106 7.88156L0.945831 7.87914L0.979983 7.86141C1.01224 7.84449 1.0631 7.81739 1.13065 7.78012C1.26581 7.70556 1.46736 7.59049 1.72 7.43502C2.22598 7.12365 2.9327 6.65274 3.71925 6.0235C5.3012 4.75791 7.15673 2.8912 8.38208 0.44043L10.6182 1.55844C9.17684 4.44116 7.03238 6.57453 5.281 7.97566C4.78498 8.37247 4.31655 8.71371 3.89881 8.99957C4.31655 9.28542 4.78497 9.62664 5.28098 10.0234Z" fill="#BCB8AC"/>
        </svg>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#home-header" data-bs-slide="next" style="width: fit-content">
      <svg width="60" height="60" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-right: 35px">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.719 13.0234C11.9676 14.4245 9.82316 16.5579 8.38184 19.4406L10.6179 20.5586C11.8433 18.1078 13.6988 16.2412 15.2807 14.9756C16.0673 14.3464 16.774 13.8755 17.28 13.5642C17.5326 13.4087 17.7342 13.2936 17.8693 13.2191C17.9369 13.1818 17.9877 13.1547 18.02 13.1378L18.0541 13.1201L18.0589 13.1176L18.0595 13.1173C18.0594 13.1174 18.0594 13.1174 18.0589 13.1164L18.0589 10.8828C18.0594 10.8818 18.0595 10.8818 18.0595 10.8819L18.0589 10.8816L18.0542 10.8791L18.02 10.8614C17.9878 10.8445 17.9369 10.8174 17.8693 10.7801C17.7342 10.7056 17.5326 10.5905 17.28 10.435C16.774 10.1236 16.0673 9.65274 15.2808 9.0235C13.6988 7.75791 11.8433 5.8912 10.6179 3.44043L8.38184 4.55844C9.82316 7.44116 11.9676 9.57453 13.719 10.9757C14.215 11.3725 14.6834 11.7137 15.1012 11.9996C14.6835 12.2854 14.215 12.6266 13.719 13.0234Z" fill="#BCB8AC"/>
      </svg>
    </button>
  </div>

  @yield('navigation')

  <script src="/js/sidebar.js"></script>
  <script src="/js/notification.js"></script>
  <script src="/js/bootstrap.bundle.min.js"></script>
  @yield('myscript')
</body>
</html>