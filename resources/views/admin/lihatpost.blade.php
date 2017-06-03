<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')<h1>Dashboard</h1>@stop
@section('content')
<div class="panel panel-default"><div class="panel-body">
<h4><i class="fa fa-home"></i> Tabel Posting</h4><hr>
<div class=row><div class="col-md-6">
     <a href="{{Url('/admin/tambahpost')}}" class="btn btn-primary">
       <i class="fa fa-plus-circle"></i> Tambah Posting</a></div>
	<div class="col-md-2"> </div>
<!-- Form Pencarian -->
 	<div class="col-md-4">
 			<div class="input-group custom-search-form">
  				<input type="text" class="form-control" name="search" placeholder="Search...">
   				<span class="input-group-btn">
   					<span class="input-group-btn">
  						<button class="btn btn-default" type="submit"><i class="fa fa-search"></i> Cari</button>
  					</span>
  				</span>
 			</div>
	</div>
	<div class="container">
		<h3>&nbsp;</h3>
		<div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Judul</th>
            <th>Tanggal</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; ?>
          @foreach($blog as $key => $value)
            <tr>
              <td>{{$no++}}</td>
              <td>{{ $value->blog_title }}</td>
              <td>{{ $value->created_at }}</td>
              <td><a href="{{Url('/admin/editpost/'.$value->blog_id)}}"><button type="button" class="btn btn-default btn-sm"/>Edit</button></a>
                  <a href="{{Url('/admin/deletepost/'.$value->blog_id)}}"><button type="button" class="btn btn-danger btn-sm"/>Delete</button></a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>			
		</div>
  </div>
</div>
</div>
<br>
</div>
@stop
