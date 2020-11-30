@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Tambah Data Pertanyaan
				</div>
				<div class="card-body">
					<form action="{{url('admin/pertanyaan')}}" method="post">
						@csrf

					<div class="form-group">
	                  <label>Kategori</label>
	                  <select name="id_kategori" class="form-control select2" style="width: 100%;">
	                    <option selected="selected">Pilih Kategori</option>
	                    	@foreach($list_kategori as $kategori)
	                    		<option value="{{$kategori->id}}">{{$kategori->nama}}</option>
	                    	@endforeach	
	                  </select>
	                </div>

					<div class="form-group">
						<label for="" class="control-label">Judul</label>
						<input type="text" name="judul" class="form-control">
					</div>

					<div class="form-group">
						<label for="" class="control-label">Pertanyaan</label>
						<textarea name="pertanyaan" class="form-control"></textarea>
					</div>


					<button type="submit" class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection