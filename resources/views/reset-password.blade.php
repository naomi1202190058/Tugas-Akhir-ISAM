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
  <div class="bg-white-transparent" style="width: 100vw; height: 100vh;">
    <div class="row g-0 justify-content-center">
      <div class="col-4 my-5">
        <div class="text-center">
          <img src="/images/logo/logo.png" alt="Logo">
        </div>
        <div class="my-4 text-center">
          <h1 class="font-alegreya text-xl mb-1" style="color: #3F3F3F">Reset Password</h1>
          <p class="text-sm" style="color: #868B90">Masukkan email untuk reset password</p>
        </div>
        <div class="bg-white rounded-3 pt-5 pb-2 px-4">  
          <form action="/reset-password" method="post" class="mx-3 mt-2 mb-4">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label fw-medium" style="color: #929292">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email">
            </div>
            <div class="d-grid mt-5 mb-5">
              <button type="submit" class="btn text-white mb-4 py-2 submit-button" style="background-color:#507CA5;" disabled>Masuk</button>
              <a href="/login" class="btn text-white py-2 kembali-btn">Kembali</a>
            </div>
          </form>
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
  <script src="/js/form-handler.js"></script>
  <script src="/js/bootstrap.bundle.min.js"></script>
  <script>
    const myModal = new bootstrap.Modal(document.getElementById('success'))
    myModal.show()
  </script>
</body>
</html>