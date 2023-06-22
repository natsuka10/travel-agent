@extends('frontend.layout')
@section('content')
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_4">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="bradcam_text text-center">
                <h3>Contact</h3>
                <p>Punya pertanyaan untuk kami?</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ bradcam_area  -->
  
      <!-- ================ contact section start ================= -->
      <section class="contact-section">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2 class="contact-title">Testimoni Pelanggan</h2>
            </div>
            <div class="col-lg-8">
                <div class="row">
                  @foreach ($testimonials as $testimonial)
                  <div class="col-12 testimonial-box">
                  <h5>{{$testimonial->nama}}</h5>
                  <p>{{$testimonial->judul}}</p>
                  </div>
                  @endforeach
                </div>
              
            </div>
            <div class="col-lg-3 offset-lg-1">
              <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-home"></i></span>
                <div class="media-body">
                  <h3>Malang, Jawa Timur.</h3>
                  <p>Jl. Veteran, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145</p>
                </div>
              </div>
              <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                <div class="media-body">
                  <h3>+62 851 5532 2828</h3>
                  <p>Senin-Sabtu 09.00-17.00 WIB</p>
                </div>
              </div>
              <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-email"></i></span>
                <div class="media-body">
                  <h3>travelgo@gmail.com</h3>
                  <p>Email us for business inquiries</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ================ contact section end ================= -->
@endsection