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
				<li class="active">{{$hasil}}</li>
			</ul>
		</div>

	</div>

	<div class="panel panel-default">
		<div class="panel-body">
					
			<p style="text-align:left;"> 

			Nomor SPM:  {{$hasil}}
			<br>Perusahaan: {{$cetakpajak->perusahaan}}
			<br>Uraian: {{$cetakpajak->uraian}}
			<br>Nilai Kotor: {{$cetakpajak->bruto}}
			<br>Total Potongan: {{$cetakpajak->potongan}}
			</p>
			@php
			$nospm=$cetakpajak->nospm;
			@endphp


			</p><br> 
			<table width="360">
			<tr>
			<td>Jenis</td>
			<td>Nilai</td>
			<td></td>
			</tr>

			@if (($cetakpajak->PPh21)>0)
			<tr height="50">
			<td>PPh21</td>
			<td>{{$cetakpajak->pph21_rupiah}}</td>
			<td><a class="btn btn-xs btn-primary" href="{{ url('/cetakpajaks/'.$nospm.'/pph21') }}"."">CETAK</a></td>
			</tr>
			@endif

			@if (($cetakpajak->PPh22)>0)
			<tr height="50">
			<td>PPh22</td>
			<td>{{$cetakpajak->pph22_rupiah}}</td>
			<td><a class="btn btn-xs btn-primary" href="{{ url('/cetakpajaks/'.$nospm.'/pph22') }}"."">CETAK</a></td>
			</tr>
			@endif

			@if (($cetakpajak->PPh23)>0)
			<tr height="50">
			<td>PPh23</td>
			<td>{{$cetakpajak->pph23_rupiah}}</td>
			<td><a class="btn btn-xs btn-primary" href="{{ url('/cetakpajaks/'.$nospm.'/pph23') }}"."">CETAK</a></td>
			</tr>
			@endif

			@if (($cetakpajak->PPh4Ayat2)>0)
			<tr height="50">
			<td>PPh 4 Ayat 2</td>
			<td>{{$cetakpajak->pph4ayat2_rupiah}}</td>
			<td><a class="btn btn-xs btn-primary" href="{{ url('/cetakpajaks/'.$nospm.'/pph4ayat2') }}"."">CETAK</a></td>
			</tr>
			@endif

			@if (($cetakpajak->PPN)>0)
			<tr height="50">
			<td>PPN</td>
			<td>{{$cetakpajak->ppn_rupiah}}</td>
			<td><a class="btn btn-xs btn-primary" href="{{ url('/cetakpajaks/'.$nospm.'/ppn') }}"."">CETAK</a></td>
			</tr>
			@endif
			</table>


		</div>
	</div>
</div>
@endsection



