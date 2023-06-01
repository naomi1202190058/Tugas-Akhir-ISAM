@extends('layouts.login')

@section('login-form')
  <div class="my-4">
    <h1 class="font-alegreya text-xl mb-1" style="color: #3F3F3F">Masuk Sebagai DITMAWA</h1>
    <p class="text-sm" style="color: #868B90">Anda akan masuk dengan akun DITMAWA untuk mengelola kebutuhan sebagai DITMAWA</p>
  </div>
  <div class="bg-white rounded-3 py-5 px-4">  
    <form action="/authenticate/ditmawa" method="post" class="mx-3 mt-2 mb-4">
      @csrf
      <div class="mb-3">
        <label for="sso_id" class="form-label fw-medium" style="color: #929292">SSO</label>
        <input type="text" class="form-control" id="sso_id" name="sso_id" placeholder="SSO ID">
      </div>
      <div class="mb-2">
        <label for="password" class="form-label fw-medium" style="color: #929292">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password">
      </div>
      <div class="text-end">
        <a href="" class="text-3xs" style="color: #868B90">Forgot My Password</a>
      </div>
      <div class="d-grid mt-5 mb-5">
        <button type="submit" class="btn text-white mb-4 py-2" style="background-color: #77C5FD">Masuk</button>
        <a href="/login/ukm" class="btn text-white" style="background-color: #8B8B8B">Masuk sebagai UKM</a>
      </div>
    </form>
  </div>
@endsection