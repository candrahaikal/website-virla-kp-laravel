@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<section id="contact" class="contact section">

  <div class="container" data-aos-delay="100">

    <div class="mb-6 embed-responsive embed-responsive-16by9">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.1392950839954!2d112.72903400998007!3d-7.224948428269023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f8bf40ce2de1%3A0xf17556038d3aec48!2sPT%20Berkah%20Sarana%20Inti!5e0!3m2!1sen!2sid!4v1688956240797!5m2!1sen!2sid"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="mt-5 row gy-4">

      <div class="col-lg-4">
        <div class="info-item d-flex" data-aos-delay="300">
          <i class="bi bi-geo-alt flex-shrink-0"></i>
          <div>
            <h3>Alamat</h3>
            <p>Jl. Perak Barat Barat 143</p>
            <p>Kota Surabaya</p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex" data-aos-delay="400">
          <i class="bi bi-telephone flex-shrink-0"></i>
          <div>
            <h3>Phone</h3>
            <p>(031) 3297160</p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex" data-aos-delay="500">
          <i class="bi bi-envelope flex-shrink-0"></i>
          <div>
            <h3>Email</h3>
            <a href="mailto:bsi@bsi-pbm.com">bsi@bsi-pbm.com</a><br>
            <a href="mailto:finance@bsi-pbm.com">finance@bsi-pbm.com</a><br>
            <a href="mailto:operational@bsi-pbm.com">operational@bsi-pbm.com</a>
          </div>
        </div><!-- End Info Item -->

      </div>

      <div class="col-lg-8">
        <form action="#" method="post" class="php-email-form" data-aos-delay="200">
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
            </div>

            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <button type="submit">Send Message</button>
            </div>

          </div>
        </form>
      </div><!-- End Contact Form -->

    </div>

  </div>

</section><!-- /Contact Section -->
@endsection