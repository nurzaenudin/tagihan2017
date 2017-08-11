@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li><a href="{{ url('/admin/ppks') }}">Ppk</a></li>
				<li class="active">Tambah Ppk</li>
			</ul>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">Tambah Ppk</h2>
				</div>
				<div class="panel-body">
					{!! Form::open(['url' => route('admin.ppks.store'),
					'method' => 'post', 'class'=>'form-horizontal']) !!}
					@include('ppks._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


