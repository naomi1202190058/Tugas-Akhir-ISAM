@extends('layouts.primary')

@section('header')
<div class="col d-flex align-items-center">
  <a href="/faq">
    <img src="/images/icons/back.png" alt="Icon" width="20px">
  </a>
  <h3 class="pt-4 pb-3 fw-semibold ms-4">Tambah FAQ</h3>
</div>
@endsection

@section('content')
  <div class="mx-4 my-5" style="min-height: 27.4rem">
    <form action="/faq/tambah" method="post">
      @csrf
      <div class="col-10">
        <div class="mb-3">
          <label for="pertanyaan" class="form-label fw-medium">Pertanyaan</label>
          <input type="text" class="form-control" id="pertanyaan" name="pertanyaan" placeholder="Masukkan pertanyaan">
        </div>
        <div class="mb-3">
          <label for="jawaban" class="form-label fw-medium">Jawaban</label>
          <textarea class="form-control shadow-none" id="jawaban" name="jawaban" rows="6" placeholder="Masukkan jawaban"></textarea>
        </div>
      </div>
      <div class="col-12 d-flex justify-content-center mt-5">
        <button type="submit" class="btn text-white px-5 border-0 submit-button" style="background-color:#507CA5;" disabled>Submit</button>
      </div>
    </form>
  </div>
@endsection

@section('myscript')
  <script src="/js/form-handler.js"></script>
@endsection