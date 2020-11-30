@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Data jawaban
					<a href="{{url('admin/jawaban/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah</a>
				</div>
				<div class="card-body">
					<table class="table table-datatable">
						<thead>
							<th>No</th>
							<th>Aksi</th>
							<th>Kategori</th>
							<th>Judul Pertanyaan</th>
							<th>jawaban</th>
						</thead>
						<tbody>
							@foreach($list_jawaban as $jawaban)
						 <tr>
							<td>{{$loop->iteration}}</td>
							<td>
								<div class="btn-group">
								<a href="{{url('admin/jawaban', $jawaban->id)}}" class="btn btn-dark float-right"><i class="fa fa-info"></i></a>
								<a href="{{url('admin/jawaban', $jawaban->id)}}/edit" class="btn btn-warning float-right"><i class="fa fa-edit"></i></a>
								@include('admin.template.utils.delete', ['url' => url('admin/jawaban', $jawaban->id)])
								</div>
							</td>
							<td>{{$jawaban->pertanyaan->kategori->nama}}</td>
							<td>{{$jawaban->pertanyaan->judul}}</td>
							<td>{{$jawaban->jawaban}}</td>
						 </tr>
						 	@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection