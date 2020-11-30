@extends('customer.base')

@section('content')

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="row">
          <div class="col-lg-12">
            <div class="row">

              @foreach( $list_kategori as $kategori)
              <div class="col-md-3 d-flex align-items-stretch">
                <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon"><i class="bx bxl-dribbble"></i></div>
                  <h4><a href="">{{$kategori->nama}}</a></h4>
                  <p>{!! nl2br($kategori->deskripsi)!!}</p>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

@endsection