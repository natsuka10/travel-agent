@extends('frontend.layout')
@section('content')
     <!-- slider_area_start -->
     <div class="slider_area">
        <div class="slider_active owl-carousel">
          @foreach ($sliders as $slider)
          <div
          style="background-image: url({{Storage::url($slider->image) }})"
          class="single_slider d-flex align-items-center overlay"
        >
          <div class="container">
            <div class="row align-items-center">
              <div class="col-xl-12 col-md-12">
                <div class="slider_text text-center">
                  <h3>{{$slider->judul}}</h3>
                  <p>{{$slider->subjudul}}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
          @endforeach
        </div>
      </div>
      <!-- slider_area_end -->
  
      <!-- destination -->
      <div class="popular_places_area">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="section_title text-center mb_70">
                <h3>Rekomendasi Destinasi Wisata</h3>
                <p>
                 Bingung ingin kemana? Mungkin destinasi ini cocok untukmu
                </p>
              </div>
            </div>
          </div>
          <div class="row">
            @foreach ($destinations as $destination)
            <div class="col-lg-4 col-md-6">
              <div class="single_place">
                <div class="thumb">
                  <img src="{{Storage::url($destination->image)}}" alt="" />
                  <a href="{{route('destination.show',$destination->kota)}}" class="prise">@currency($destination->harga)</a>
                </div>
                <div class="place_info">
                  <a href="{{route('destination.show',$destination->kota)}}"><h3>{{$destination->kota}}</h3></a>
                  <p>{{$destination->provinsi}}</p>
                  <div class="rating_days d-flex justify-content-between">
                    <div class="days">
                      <i class="fa fa-clock-o"></i>
                      <a href="{{route('destination.show',$destination->kota)}}">{{$destination->durasi}}</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <!-- end -->
  
      <!-- testimonial_area  -->
      <div class="testimonial_area">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <h2 style="text-align: center">Testimoni tentang Travelgo</h2>
              <div class="testmonial_active owl-carousel">
                @foreach ($testimonials as $testimonial)
                <div class="single_carousel">
                  <div class="row justify-content-center">
                    <div class="col-lg-8">
                      <div class="single_testmonial text-center">
                        <div class="author_thumb">
                          <img src="{{Storage::url($testimonial->photo)}}" alt="" />
                        </div>
                        <p>
                          {{$testimonial->judul}}
                        </p>
                        <div class="testmonial_author">
                          <h3>- {{$testimonial->nama}}</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> 
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /testimonial_area  -->
@endsection