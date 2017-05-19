@extends('adminlte::page')
@section('content')
<!-- include summernote css/js-->
<div class="panel panel-default"><div class="panel-body">
<h4><i class="fa fa-home"></i> Tambah Posting</h4><hr>
<div class=row>
<!-- Form Pencarian -->
	<div class="container">
    <div class="box">
      <!-- /.box-header -->
      <div class="box-body pad">
        {{Form::open()}}
        <div class="box-body">
        <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title',null,array('class' => 'form-control', 'placeholder'=>'Title'))}}
        </div>
        <div class="form-group">
        {{Form::label('body', 'Content')}}
        <div id="summernote"><p>Hello Summernote</p></div>
        </div>
        <div class="form-group">
        {{Form::submit('Publish Post',array('class' => 'btn btn-primary btn-sm'))}} </div>
        {{Form::close()}}
      </div>
    </div>
	</div>
</div>
<br>
</div>
<br>

@stop
