@extends('layouts.app')

@section('title', 'Award')

@section('content')
<section class="content">

  <!-- award Section -->
  <section id="award" class="award section">

      <!-- Section Title -->
      <div class="container section-title mb-4">
          <h2>Award</h2>
          <p>Ragam Pencapaian PT. PBM Sarana Inti</p>

      </div><!-- End Section Title -->

      <div class="container" data-aos-delay="100">


        @foreach($awards as $award)
        <div class="card-award shadow rounded">
          <img src="{{ asset('storage/' . $award->image) }}" alt="Award Image">
          <div class="card-body">
            <h5 class="card-title">{{ $award->title}}</h5>
            <p class="card-text">{{ $award->description}}</p>
          </div>
        </div>
        @endforeach

      </div>

  </section><!-- /award Section -->

</section>
@endsection