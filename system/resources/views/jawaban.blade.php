@extends('customer.base')

@section('content')

    <section id="team" class="team">
      <div class="container">

	<div class="form-group">
    <form action="{{url('jawaban/cari')}}" method="get">
  		<label for="" class="control-label">Cari jawaban</label>
  		<input type="text" class="form-control" name="jawaban" value="{{$jawaban ?? ''}}">

  		<button type="input" class="btn btn-dark float-right"><i class="fa fa-search"></i> Cari</button>
    </form>
	</div>

    <div class="row">


      <!-- Post Content Column -->
      <div class="col-lg-8">
      <br>
        @foreach($list_pertanyaan as $pertanyaan )
        <!-- Single Comment -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Pertanyaan : {{$pertanyaan->judul}}</h5>
            <h6>nama : {{$pertanyaan->user->username}}</h6>
            <p>{{$pertanyaan->pertanyaan}}</p>
              @foreach($pertanyaan->jawaban as $jawaban )
        <hr>
            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">{{$pertanyaan->user->username}}</h5>
                {!! nl2br($jawaban->jawaban) !!}<br>
                <i> Di posting pada {{$pertanyaan->created_at}}</i>
              </div>
            </div>
              @endforeach

          </div>
        </div>
        @endforeach

      </div>
    </div>
    <!-- /.row -->

      </div>
    </section><!-- End Team Section -->

@endsection