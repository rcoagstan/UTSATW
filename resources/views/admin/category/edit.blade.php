@extends('tmpt_admin.home')
@section('sub-judul', 'Edit Kategori')
@section('content')

@if(Session::has('success'))
	<div class="alert alert-success" role="POST">
	{{ Session('success')}}
	</div>
@endif


<form action="{{url('category.update')}}" method="POST">
	@csrf
 	<div class="form-group">
        <label>Data Kategori</label>
        <input type="text" class="form-control" name="name" value="{{URL('category.edit')}}">
    </div>

	<div class="form-group">
        <button class="btn btn-primary btn-block">Simpan Data Kategori</button>
    </div>
</form>





@endsection