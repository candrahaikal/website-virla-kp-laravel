@extends('layouts.app')

@section('title', 'Tambah Data Award')

@section('content')
<section class="content">
  <section class="create-award">

    <!-- Section Title -->
    <div class="container section-title mb-4">
      <h2>Tambah Data Award</h2>
  </div><!-- End Section Title -->

  <div class="container d-flex justify-content-center align-items-center">
    <div class="card mt-6 shadow-sm" style="width: 30rem;">
      <div class="card-body p-4">
        {{-- <h5 class="card-title text-center">Tambah Data Penghargaan</h5> --}}
        {{-- <p class="card-text .fs-6 text-center">Tambahkan data award PT Berkah Sarana Inti</p> --}}
        <form action="{{ route('award.store') }}" method="post" enctype="multipart/form-data" class="d-flex row justify-content-center">
          @csrf

          <div class="mb-3">
            <label for="title"  class="form-label">Nama Penghargaan</label>
            <input type="text" name="title" class="form-control" id="title">

          </div>
          <div class="mb-3">
            <label for="description"class="form-label">Deskripsi Penghargaan</label>
            <textarea class="form-control"  name="description"  placeholder="Tambahkan deskripsi award" id="floatingTextarea2" style="height: 100px"></textarea>
          </div>

          <div class="mb-3">
            <label for="image"  class="form-label">Masukkan Foto Penghargaan</label>
            <input type="file" name="image" class="form-control" id="image">
          </div>
          <div class="mb-3 d-flex gap-2">
            <button type="submit" class="btn btn-primary w-50">Submit</button>
          <a href="/award" class="btn btn-secondary w-50">Batal</a>
          </div>
          
        </form>
      </div>
    </div>
  </div>

  </section>
</section>
@endsection