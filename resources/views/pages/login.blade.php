@extends('layouts.app')

@section('title', 'Login Admin')

@section('content')
<section id="contact" class="contact section" style="max-width: 100vw;">
  <div class="container d-flex justify-content-center align-items-center">
    <div class="card mt-6 shadow-sm" style="width: 30rem;">
      <div class="card-body p-4">
        <h5 class="card-title text-center">Login Admin</h5>
        <p class="card-text text-center">Silahkan Login untuk Mengakses Menu Admin</p>
        <form action="{{ route('admin.index') }}" method="" class="d-flex row justify-content-center">
          <div class="mb-3">
            <label for="username" name="username" class="form-label">Username</label>
            <input type="username" class="form-control" id="exampleInputusername1" aria-describedby="usernameHelp">
          </div>
          <div class="mb-3">
            <label for="password" name="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password">
          </div>
          <button type="submit" class="btn btn-primary w-50">Login</button>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection