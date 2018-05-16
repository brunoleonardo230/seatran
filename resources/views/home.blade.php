@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>{{ $title }}</h1>
        <hr>
    </div>
</div>
@include('layouts.msg')
@include('layouts.erros')
<div class="row">
	<div class="col-md-12">
		<form class="content" method="POST" action="{{ url('/submit') }}" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group">
    			<label for="exampleInputEmail1">Arquivo Excel</label>
    			<input type="file" class="form-control-file" id="convenio" type="file" name="convenio">
  			</div>

  			<input type="submit" name="enviar" value="Enviar" class="btn btn-success btn-lg">

		</form>
	</div>
</div>
@endsection
