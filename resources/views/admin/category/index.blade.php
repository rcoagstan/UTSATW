@extends('tmpt_admin.home')
@section('sub-judul', 'Kategori')
@section('content')

	<a href="{{url('category.create')}}" class="btn btn-dark btn-sm"><i class="fa fa-plus"></i>&nbsp Tambah Data</a><br><br>

	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Kategori</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($category as $result => $hasil)
			<tr>
				<td>{{ $result + $category->firstitem() }}</td>
				<td>{{ $hasil-> name }}</td>
				<td>
					<form action="category.destroy" method="POST">
						@csrf
						@method('delete')
					<a href="{{URL('category.edit')}}" class="btn btn-primary btn-sm">Edit</a>
					<button type="submit" class="btn btn-danger btn-sm">Delete</button>
				</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
{{$category->links()}}
@endsection