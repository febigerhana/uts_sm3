@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Detail Data jawaban
				</div>
				<div class="card-body">
					<table class="table">
						<tbody>
							<p><h3>Judul Pertanyaan :<b>{{$jawaban->pertanyaan->judul}}</b> </h3>
								<h4>Kategori : <b>{{$jawaban->pertanyaan->kategori->nama}}</b></h4>
								<hr>
							</p><b>Pertanyaan :</b><br>
								{!! nl2br($jawaban->pertanyaan->pertanyaan) !!}
							</p>
							<p> <b>Jawaban :</b> <br>
								{!! nl2br($jawaban->jawaban) !!}
							</p>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection