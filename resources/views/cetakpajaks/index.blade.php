@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/') }}"> Tagihan 2017 </a></li>
			</ul>
		</div>

		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/cetakpajaks') }}">Cetak Pajak</a></li>
			</ul>
		</div>

	</div>



	<div class="panel panel-default">
		<div class="panel-body">
			{!! $html->table(['class'=>'table-striped']) !!}
		</div>
	</div>
		

</div>
@endsection

@section('scripts')
	{!! $html->scripts() !!}
@endsection

