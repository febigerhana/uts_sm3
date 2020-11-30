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
        @foreach($list_jawaban as $jawaban )
        <!-- Single Comment -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">jawaban : {{$jawaban->judul}}</h5>
            <h6>nama : {{$jawaban->user->username}}</h6>
            <p>{{$jawaban->jawaban}}</p>

          </div>
        </div>
        @endforeach

      </div>
    </div>
    <!-- /.row -->

      </div>
    </section><!-- End Team Section -->

@endsection