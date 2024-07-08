@extends('pages.admin.app')

@section('title', 'Admin Award')

@section('content')
<section class="content">

    <!-- Award Section -->
    <section id="award" class="award section">

        <!-- Section Title -->
        <div class="container section-title mb-4">
            <h2>Dashboard Award</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos-delay="100">
            <a href="{{ route('admin.create') }}" class="btn btn-primary me-auto mb-6">Tambah +</a>

            <div class="table-responsive mt-5">
                <table class="table table-striped table-centered mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Gambar</th>
                            <th>Title</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($awards as $award)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="table-user">
                                    <img style="width: 18rem;" src="{{ asset('/storage/' . $award->image) }}" alt="table-user" class="me-2" />
                                </td>
                                <td>{{ $award->title }}</td>
                                <td>{{ $award->description }}</td>
                                <td class="text-center align-middle">
                                    <div class="d-flex justify-content-center">
                                        {{-- <a href="{{ route('admin.show', ['id' => $award->id]) }}" class="btn btn-primary btn-sm me-2">
                                            <span class="material-symbols-outlined">visibility</span>
                                        </a> --}}
                                        <a href="{{ route('admin.edit', ['id' => $award->id]) }}" class="btn btn-success btn-sm me-2">
                                            <span class="material-symbols-outlined">edit</span>
                                        </a>
                                        <form action="{{ route('admin.destroy', ['id' => $award->id]) }}" method="post" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">
                                                <span class="material-symbols-outlined">delete</span>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section><!-- /award Section -->

</section>
@endsection
