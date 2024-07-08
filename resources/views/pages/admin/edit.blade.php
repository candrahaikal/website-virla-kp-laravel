@extends('pages.admin.app')

@section('title', 'Edit Data Award')

@section('content')
<section class="content">
  <section class="edit-award">

    <!-- Section Title -->
    <div class="container section-title mb-4">
      <h2>Edit Data Award</h2>
    </div><!-- End Section Title -->

    <div class="container d-flex justify-content-center align-items-center">
      <div class="card mt-6 shadow-sm" style="width: 30rem;">
        <div class="card-body p-4">
          <form action="{{ route('admin.update', ['id' => $award->id]) }}" method="post" enctype="multipart/form-data" class="d-flex row justify-content-center">
            @csrf
            @method('PUT')

            <div class="mb-3">
              <label for="title" class="form-label">Nama Penghargaan</label>
              <input type="text" name="title" class="form-control" id="title" value="{{ $award->title }}">
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Deskripsi Penghargaan</label>
              <textarea class="form-control" name="description" placeholder="Tambahkan deskripsi award" id="floatingTextarea2" style="height: 100px">{{ $award->description }}</textarea>
            </div>

            <div class="mb-3">
              <label for="image" class="form-label">Foto Penghargaan Saat Ini</label>
              <div class="mb-2">
                <img src="{{ asset('/storage/' . $award->image) }}" alt="Award Image" style="max-width: 100%; height: auto;">
              </div>
              <input type="file" name="image" class="form-control" id="image">
            </div>

            <div class="mb-3 d-flex gap-2">
              <button type="submit" class="btn btn-primary w-50">Update</button>
              <a href="{{ route('admin.index') }}" class="btn btn-secondary w-50">Batal</a>
            </div>

          </form>
        </div>
      </div>
    </div>

  </section>
</section>
@endsection
