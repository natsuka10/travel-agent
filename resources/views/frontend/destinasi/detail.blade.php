@extends('frontend.layout')
@section('content')
<div class="destination_banner_wrap overlay">
    <div class="destination_text text-center">
      <h3>{{$destination->kota}}</h3>
      <p>{{$destination->provinsi}}</p>
    </div>
  </div>

  <div class="destination_details_info">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-9">
          <div class="destination_info">
            <h3>Deskripsi Destinasi</h3>
            <p>
              {{$destination->deskripsi}}
            </p>
          </div>
          <div class="bordered_1px"></div>
          <div class="contact_join">
            <h3 class="text-center">Booking</h3>
            <form action="#">
              <div class="row">
                <div class="col-lg-12">
                  <div class="submit_btn">
                    <a href="whatsapp://send?text=Saya ingin Booking&phone=+6285155322826" class="boxed-btn4 d-block"
                      ><i class="fa fa-whatsapp"></i> Whatsapp</a
                    >
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection