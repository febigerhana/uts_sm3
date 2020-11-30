@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Tambah Data
				</div>
				<div class="card-body">
					<form action="{{url('admin/jawaban')}}" method="post">
					@csrf

	                <div class="form-group">
	                  <label>Judul Pertanyaan</label>
	                  <select name="id_pertanyaan" class="form-control select2" style="width: 100%;">
	                    <option selected="selected">Pilih Pertanyaan</option>
	                    	@foreach($list_pertanyaan as $pertanyaan)
	                    		<option value="{{$pertanyaan->id}}">{{$pertanyaan->judul}}</option>
	                    	@endforeach	
	                  </select>
	                </div>

					<div class="form-group">
						<label for="" class="control-label">Jawaban</label>
						<textarea name="jawaban" class="form-control"></textarea>
					</div>


					<button type="submit" class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection