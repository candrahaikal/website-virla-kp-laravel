@extends('layouts.app')

@section('title', 'Why Choose Us')

@section('content')

    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title">
            {{-- <span>Our Services<br></span> --}}
            <h2>Mengapa Memilih Kami?</h2>
            <p>Ada beberapa alasan mengapa Anda harus memilih PT Berkah Sarana Inti sebagai perusahaan jasa bongkar muat</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="d-flex justify-content-center align-items-center">
                <img src="{{ asset('/images/pict.jpg') }}" class="" style="width: 30%;" alt="">
                <ul style="list-style:none;">
                    <li><i class="bi bi-check" style="color: #0d42ff; font-size: 18px; margin-right: 6px;"></i><strong> Pengalaman dan Keahlian</strong></li>
                    <li><i class="bi bi-check" style="color: #fff; margin-right: 6px;"></i><span> Memiliki pengalaman dan tim ahli.</span></li>
                    <br>
                    <li><i class="bi bi-check" style="color: #0d42ff; font-size: 18px; margin-right: 6px;"></i><strong>Kualitas Layanan</strong></li>
                    <li><i class="bi bi-check" style="color: #fff; margin-right: 6px;"></i><span> Menyediakan layanan berkualitas dengan keamanan tinggi.</span></li>
                    <br>
                    
                    <li><i class="bi bi-check" style="color: #0d42ff; font-size: 18px; margin-right: 6px;"></i><strong>Peralatan dan Teknologi Terbaru</strong></li>
                    <li><i class="bi bi-check" style="color: #fff; margin-right: 6px;"></i><span>Menggunakan peralatan dan teknologi modern.</span></li>
                    <br>
                    
                    <li><i class="bi bi-check" style="color: #0d42ff; font-size: 18px; margin-right: 6px;"></i><strong>Tim Profesisonal</strong></li>
                    <li><i class="bi bi-check" style="color: #fff; margin-right: 6px;"></i><span> Tim terlatih dan berpengalaman.</span></li>
                    <br>

                    <li><i class="bi bi-check" style="color: #0d42ff; font-size: 18px; margin-right: 6px;"></i><strong>Fleksibilitas dan Skalabilitas</strong></li>
                    <li><i class="bi bi-check" style="color: #fff; margin-right: 6px;"></i><span> Mampu menyesuaikan diri dengan kebutuhan pelanggan.</span></li>
                    <br>

                    <li><i class="bi bi-check" style="color: #0d42ff; font-size: 18px; margin-right: 6px;"></i><strong>Reputasi yang baik</strong></li>
                    <li><i class="bi bi-check" style="color: #fff; margin-right: 6px;"></i><span> Memiliki reputasi yang baik di industri bongkar muat.</span></li>
                    
                </ul>
            </div>

            {{-- <div class="row mx-auto">
      <div class="col-4">
        <img src="{{ asset('/images/pict.jpg')}}" class="img-fluid" style="width: 60%;" alt="">
      </div>
      <div class="col-4">
        <ul style="list-style:none;">
          <li><i class="bi bi-check" style="color: #0d42ff; font-size: 18px; margin-right: 6px;"></i><span> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
          <li><i class="bi bi-check" style="color: #0d42ff; font-size: 18px; margin-right: 6px;"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
          <li><i class="bi bi-check" style="color: #0d42ff; font-size: 18px; margin-right: 6px;"></i> <span>Ullam est qui quos consequatur eos accusamus.</span></li>
        </ul>
      </div>
    </div>

    <div class="row gy-4 d-flex w-100 bg-primary align-items-center justify-content-center ">
      <div class="col-md-5" data-aos-delay="100">
        <img src="{{ asset('/images/pict.jpg')}}" class="img-fluid" style="width: 60%;" alt="">
      </div>
      <div class="col-md-5" data-aos-delay="100">
        <ul style="list-style:none;">
          <li><i class="bi bi-check" style="color: #0d42ff; font-size: 18px; margin-right: 6px;"></i><span> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
          <li><i class="bi bi-check" style="color: #0d42ff; font-size: 18px; margin-right: 6px;"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
          <li><i class="bi bi-check" style="color: #0d42ff; font-size: 18px; margin-right: 6px;"></i> <span>Ullam est qui quos consequatur eos accusamus.</span></li>
        </ul>
      </div>
    </div><!-- Features Item --> --}}

        </div>

    </section><!-- /Services Section -->
@endsection
