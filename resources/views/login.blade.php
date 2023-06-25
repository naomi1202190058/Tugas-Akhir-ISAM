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
</head>
<body class="bg-login">
  <div class="bg-white-transparent">
    <div class="row justify-content-center">
      <div class="col-8 my-5">
        <img src="/images/logo/logo.png" alt="Logo">
        <div class="my-4">
          <h1 class="font-alegreya text-xl mb-1" style="color: #3F3F3F">LOGIN</h1>
          <p class="text-sm" style="color: #868B90">Selamat datang di Sistem Informasi Pengajuan Proposal Terintegrasi</p>
        </div>
        <div class="bg-white rounded-3 pt-5 pb-2 px-4">  
          <form action="/authenticate" method="post" class="mx-3 mt-2 mb-4">
            @csrf
            <div class="mb-3">
              <label for="username" class="form-label fw-medium" style="color: #929292">Username/SSO</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Username UKM/SSO">
            </div>
            <div class="mb-2">
              <label for="password" class="form-label fw-medium" style="color: #929292">Kata Sandi</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan kata sandi">
            </div>
            <div class="text-end">
              <a href="/reset-password" class="text-3xs" style="color: #58CAF4">Lupa kata sandi</a>
            </div>
            <div class="d-grid mt-5 mb-5 pt-3">
              <button type="submit" class="btn text-white mb-4 py-2 submit-button" style="background-color:#507CA5;" disabled>Masuk</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="/js/form-handler.js"></script>
  <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>