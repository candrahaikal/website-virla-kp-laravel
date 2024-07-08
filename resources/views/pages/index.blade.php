@extends('layouts.app')
@section('title', 'Home');
@section('content')
    <section class="content">
        <div class="" style="margin-top: -100px">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/sampulgambar.jpg') }}" class="d-block w-100" alt="carousel image">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/sampulgambar2.jpg') }}" class="d-block w-100" alt="carousel image">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/sampul1.jpg') }}" class="d-block w-100" alt="carousel image">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/sampul3.jpg') }}" class="d-block w-100" alt="carousel image">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/sampul4.jpg') }}" class="d-block w-100" alt="carousel image">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/sampulfront.jpg') }}" class="d-block w-100" alt="carousel image">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <section id="description" class="description section">

            <!-- Section Title -->
            <div class="container section-title">
                <h2>Deskripsi Perusahaan</h2>
                <p>PT. PBM Berkah Sarana Inti</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8 col-md-6 service-item d-flex justify-content-around mt-4">
                        <div class="col-5">
                            <h4 class="title">Tentang Kami</h4>
                            <p class="description align-text-justify">PT Perusahaan Bongkar Muat Berkah Sarana Inti
                                didirikan pada tanggal 24 Januari 1986 di Jakarta dan telah mengalami beberapa kali
                                perubahan mengenai nama perusahaan. <br> <br>
                                Perusahaan ini berkedudukan dan beroperasi di Surabaya, dengan alamat di Jalan Perak Barat
                                No.143 Kota Surabaya, Jawa Timur 60177 telah memulai kegiatan operasional sejak tahun 1989.
                                PT. PBM Berkah Sarana Inti juga memiliki kegiatan lain yaitu persewaan Forklift. Perusahaan
                                ini saat ini memiliki 17 karyawan di tahun 2022</p>
                            {{-- <a href="#" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a> --}}
                        </div>
                        <div class="col-5">
                            <h4 class="title">Pengurus Perseroan</h4>
                            <p class="description align-text justify">
                            <ul>
                                <li>Komisaris: Muzaki, SE</li>
                                <li>Direktur: Drs.Muwiknyo</li>
                            </ul>
                            </p>
                            {{-- <a href="#" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a> --}}
                        </div>
                    </div>
                    <!-- End Service Item -->



                </div>

            </div>
            <hr class="w-50 mx-auto mt-4 border-0" style="height: 3px; background-color: rgba(0, 0, 0, 0.3)">

        </section><!-- /Featured Services Section -->

        {{-- </section><!-- /Featured Services Section --> --}}

        <!-- potency Section -->
        <section id="potency" class="potency section">

            <!-- Section Title -->
            <div class="container section-title">
                <h2>Potensi</h2>
                <p>Yang dimiliki PT. PBM Berkah Sarana Inti</p>
            </div><!-- End Section Title -->

            <div class="container mt-2 d-flex justify-content-center w-75">

                <div class="row gy-4 px-2 py-3 rounded align-items-center potency-item d-flex justify-content-center">
                    {{-- <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
            <img src="assets/img/potency-1.jpg" class="img-fluid" alt="">
          </div> --}}
                    <div class="col">
                        <ul>
                            <li><i class="bi bi-check"></i><span> SDM yang baik</span></li>
                            <li><i class="bi bi-check"></i> <span>Kinerja yang baik yang telah dibakukan dalam system
                                    manajemen mutu ISO 9001 : 2000</span></li>
                            <li><i class="bi bi-check"></i> <span>Peralatan yang cukup memadai</span></li>
                            <li><i class="bi bi-check"></i> <span>Image Perusahaan yang baik</span></li>
                        </ul>
                    </div>
                </div><!-- potency Item -->

            </div>
            <hr class="w-50 mx-auto mt-4 border-0" style="height: 3px; background-color: rgba(0, 0, 0, 0.3)">
        </section><!-- /potency Section -->

        {{-- </div> --}}


        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title">
                <h2>Bidang Usaha</h2>
                <p>Yang dimiliki PT. PBM Berkah Sarana Inti</p>

            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6">
                        <div class="card p-3">
                            <h3>Stevedoring</h3>
                            <p>Adalah suatu pekerjaan membongkar dari kapal ke dermaga, tongkang, truck dan sebaliknya dari
                                dermaga, tongkang, truck dimuat dan disusun rapi di dalam kapal.</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6">
                        <div class="card p-3">
                            <h3>Cargodoring</h3>
                            <p>Adalah suatu kegiatan mengangkut barang dari dermaga ke gudang/lapangan penumpukan dan
                                sebaliknya.</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6">
                        <div class="card p-3">
                            <h3>Receiving/Delivery</h3>
                            <p>Adalah suatu kegiatan mengambil barang dari gudang atau lapangan penumpukan dan diserahkan
                                pada pemilik barang dan sebaliknya./p>
                        </div>
                    </div><!-- End Card Item -->

                </div>

            </div>
            {{-- <hr class="w-50 mx-auto border-0" style="height: 3px; background-color: rgba(0, 0, 0, 0.3)"> --}}

        </section><!-- /Services Section -->


        <!-- Stats Section -->
        <section id="stats" class="stats section">

            <!-- Section Title -->
            <div class="container section-title">
                <h2>Pelanggan Utama</h2>
                <p>PT. PBM Berkah Sarana Inti</p>

            </div><!-- End Section Title -->

            <div class="container" data-aos-delay="100">


                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span>1</span>
                            <p>International Total Service & Logistic</p>
                            {{-- <p>Projects</p> --}}
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span>2</span>
                            <p>Eastern car Liner</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span>3</span>
                            <p>PT. Karana Line</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span>4</span>
                            <p>PT. Dalian Putra Maritim</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span>5</span>
                            <p>PT. Sunrise Steel</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span>6</span>
                            <p>PT. Karana Panorama Logistik</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span>7</span>
                            <p>PT. Panca Kusuma Logistik</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span>8</span>
                            <p> PT. Steel Pipe Indonesia</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </section><!-- /Stats Section -->
        </div>
        </div>
    </section>
@endsection
