@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Data Pertanyaan
					<a href="{{url('admin/pertanyaan/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah</a>
				</div>
				<div class="card-body">
					<table class="table table-datatable">
						<thead>
							<th>No</th>
							<th>Aksi</th>
							<th>Kategori</th>
							<th>Judul Pertanyaan</th>
							<th>Pertanyaan</th>
						</thead>
						<tbody>
							@foreach($list_pertanyaan as $pertanyaan)
						 <tr>
							<td>{{$loop->iteration}}</td>
							<td>
								<div class="btn-group">
								<a href="{{url('admin/pertanyaan', $pertanyaan->id)}}" class="btn btn-dark float-right"><i class="fa fa-info"></i></a>
								<a href="{{url('admin/pertanyaan', $pertanyaan->id)}}/edit" class="btn btn-warning float-right"><i class="fa fa-edit"></i></a>
								@include('admin.template.utils.delete', ['url' => url('admin/pertanyaan', $pertanyaan->id)])
								</div>
							</td>
							<td>{{$pertanyaan->kategori->nama}}</td>
							<td>{{$pertanyaan->judul}}</td>
							<td>{{$pertanyaan->pertanyaan}}</td>
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