@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Tambah Data Jawaban
				</div>
				<div class="card-body">
					<form action="{{url('admin/jawaban', $list_jawaban->id)}}" method="post">
						@csrf
						@method("PUT")

					<div class="form-group">
						<label for="" class="control-label">Id_Pertanyaan</label>
						<input name="id_pertanyaan" class="form-control" value="{{$list_jawaban->pertanyaan->id}}" readonly>
					</div>

					<div class="form-group">
						<label for="" class="control-label">Kategori</label>
						<input name="" class="form-control" value="{{$list_jawaban->pertanyaan->kategori->nama}}" readonly>
					</div>

					<div class="form-group">
						<label for="" class="control-label">Pertanyaan</label>
						<input name="" class="form-control" value="{{$list_jawaban->pertanyaan->judul}}" readonly>
					</div>

					<div class="form-group">
						<label for="" class="control-label">Jawaban</label>
						<textarea name="jawaban" class="form-control">{{$list_jawaban->jawaban}}</textarea>
					</div>
					
					<button type="submit" class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection