@extends('customer.base')

@section('content')
    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

      <div class="form-group">
        <form action="{{url('pertanyaan/cari')}}" method="get">
          <label for="" class="control-label">Cari Pertanyaan</label>
          <input type="text" class="form-control" name="pertanyaan" value="{{$pertanyaan ?? ''}}">

          <button type="input" class="btn btn-dark float-right"><i class="fa fa-search"></i> Cari</button>
        </form>
      </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="row">

              @foreach($list_pertanyaan as $pertanyaan)
              <div class="col-lg-3">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <div class="pic"><img src="{{ url('public/assets/img/team/team-1.jpg')}}" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4><a href="{{url('pertanyaan', $pertanyaan->id )}}">{{$pertanyaan->user->username}}</a></h4>
                    <span>{{$pertanyaan->kategori->nama}}</span>
                    <p>{{$pertanyaan->judul}}</p>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Team Section -->

@endsection