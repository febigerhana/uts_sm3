@extends('customer.base')

@section('content')
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

            <div class="section-title" data-aos="fade-right">
              <h2>judul : {{$detail_pertanyaan->judul}}</h2>
              <p>{{$detail_pertanyaan->pertanyaan}}</p>
            </div>
      </div>
    </section><!-- End Testimonials Section -->
    
@endsection