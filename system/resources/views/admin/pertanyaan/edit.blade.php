@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Tambah Data pertanyaan
				</div>
				<div class="card-body">
					<form action="{{url('admin/pertanyaan', $pertanyaan->id)}}" method="post">
						@csrf
						@method("PUT")

	                <div class="form-group">
						<label for="" class="control-label">Nama Kategori</label>
						<input type="text" class="form-control" name="judul" value="{{$pertanyaan->Kategori->nama}}" readonly="">
					</div>

					<div class="form-group">
						<label for="" class="control-label">Judul Pertanyaan</label>
						<input type="text" class="form-control" name="judul" value="{{$pertanyaan->judul}}">
					</div>

					<div class="form-group">
						<label for="" class="control-label">Pertanyaan</label>
						<textarea name="pertanyaan" class="form-control">{{$pertanyaan->pertanyaan}}</textarea>
					</div>
					
					<button type="submit" class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection