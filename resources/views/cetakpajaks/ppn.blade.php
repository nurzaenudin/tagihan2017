<!DOCTYPE html>
<html lang="en">
<head>


    <title>Cetak Pajak PPN</title>


	{{-- <link href="{{ asset('css/font-awesome.min.css') }}" rel='stylesheet' type='text/css'> --}}
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <style type="text/css">

    	.border-top{border:0px solid black; border-width: 1px 0px 0px 0px;}
    	.border-right{border:0px solid black; border-width: 0px 1px 0px 0px;}
    	.border-bottom{border:0px solid black; border-width: 0px 0px 1px 0px;}
    	.border-left{border:0px solid black; border-width: 0px 0px 0px 1px;}

    	.border-top-right{border:0px solid black; border-width: 1px 1px 0px 0px;}
    	.border-top-bottom{border:0px solid black; border-width: 1px 0px 1px 0px;}
    	.border-top-left{border:0px solid black; border-width: 1px 0px 0px 1px;}

    	.border-right-bottom{border:0px solid black; border-width: 0px 1px 1px 0px;}
    	.border-right-left{border:0px solid black; border-width: 0px 1px 0px 1px;}
    	    	
    	.border-bottom-left{border:0px solid black; border-width: 0px 0px 1px 1px;}

        .border-semua{border:0px solid black; border-width: 1px 1px 1px 1px;}

        .border-bottom-left-right{border:0px solid black; border-width: 0px 1px 1px 1px;}

        .border-top-bottom-right{border:0px solid black; border-width: 1px 1px 1px 0px;}
        .border-top-bottom-left{border:0px solid black; border-width: 1px 0px 1px 1px;}

        .border-titik{border:0px dotted black; border-width: 0px 0px 1px 0px;}

    table {
    border-collapse: collapse;
	}

/*	table, th, td {
    border: 1px solid black;
	}*/

    .page-break {
    page-break-after: always;
    }


    </style>

</head>
<body>
	

					
{{-- <p style="text-align:center;"> 
Nomor SPM:  {{$nospm}}  <br>
21:  {{$cetakpajak}}  <br>
</p> --}}
@php
$lembar1="Untuk Arsip Wajib Pajak";
$lembar2="Untuk KPPN";
$lembar3="Untuk Dilaporkan oleh <br> Wajib Pajak ke KPP";
$lembar4="Untuk Bank Persepsi/ <br> Kantor Pos & Giro";
$lembar5="Untuk Arsip Wajib Pungut <br> atau Pihak Lain";
$npwp=$cetakpajak->npwp;
$nama_wp=$cetakpajak->perusahaan;
$alamat_wp=$cetakpajak->alamat;
$kota_wp=$cetakpajak->kota;
$propinsi_wp=$cetakpajak->propinsi;
$jenis_pajak="PPN";
$kode_akun_pajak='411211';
$kode_setoran='910';
$tahun_pajak='2017';
$jumlah=$cetakpajak->ppn_rupiah;
$terbilang1=$cetakpajak->ppn_terbilang_pisah[0];
$terbilang2=$cetakpajak->ppn_terbilang_pisah[1];
$terbilang3=$cetakpajak->ppn_terbilang_pisah[2];
$bulan=date("n",strtotime($cetakpajak->tgspp));
setlocale(LC_TIME, 'Indonesian');
$nama_bulan=strftime('%B',strtotime($cetakpajak->tgspp));
$nama_setor="Andi Viky Habibie"
@endphp

<table style="align:center;font-size:8pt;" width="495">
<tbody>

<tr >
<td width="15" style="color:white" class="border-top-left">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top-left">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top-right">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top-right">12</td>
<td width="15" style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td rowspan="3" colspan="3" align="center"> <img src="{{URL::asset('img/logo_kemenkeu.jpg')}}" width="10%"></td>
<td colspan="8"></td>
<td ></td>
<td class="border-left"></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;" colspan="8">SURAT SETORAN PAJAK</td>
<td class="border-right"></td>
<td ></td>
<td colspan="5"></td>
<td style="border:0px solid black; border-width: 1px 1px 1px 1px; text-align:center;font-size:20pt; font-weight: bold;" colspan="2" rowspan="2">1</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
{{-- <td rowspan="3" colspan="3" align="center"> <img src="{{URL::asset('img/logo_kemenkeu.jpg')}}" width="10%"></td> --}}
<td style="text-align:left;font-size:8pt; font-weight: bold;" colspan="8">DEPARTEMEN KEUANGAN R.I. <br>DIREKTORAT JENDERAL PAJAK</td>
<td></td>
<td class="border-left"></td>
<td style="text-align:center;font-size:24pt; font-weight: bold; vertical-align: middle;" colspan="8" rowspan="2">(SSP)</td>
<td class="border-right"></td>
<td></td>
<td style="text-align:left;font-size:8pt; font-weight: bold;" colspan="5">LEMBAR</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
{{-- <td colspan="3"></td> --}}
<td style="text-align:left;font-size:8pt; font-weight: bold;" colspan="8"></td>
<td></td>
<td class="border-left"></td>
<td class="border-right"></td>
<td ></td>
<td style="text-align:left;font-size:9pt; " colspan="7">{!! $lembar1 !!}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
{{-- <tr>
<td class="border-left"></td>
<td colspan="3"></td>
<td style="text-align:left;font-size:8pt; font-weight: bold;" colspan=8></td>
<td></td>
<td class="border-left"></td>
<td style="text-align:center; font-weight: bold;" colspan="8">xxx</td>
<td class="border-right"></td>
<td ></td>
<td style="text-align:left;font-size:9pt; " colspan="7">xxx</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr> --}}
<tr>
<td class="border-left"></td>
<td colspan="11"></td>
<td></td>
<td class="border-left"></td>
<td colspan="8"></td>
<td class="border-right"></td>
<td></td>
<td colspan="7"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-top-left"></td>
<td class="border-top"colspan="30"></td>
<td class="border-top-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;"colspan="5">NPWP</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;">:</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" >{{substr($npwp, 0,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;">{{substr($npwp, 1,1)}}</td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 2,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 3,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;">{{substr($npwp, 4,1)}}</td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 5,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 6,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;">{{substr($npwp, 7,1)}}</td>
<td></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;">{{substr($npwp, 8,1)}}</td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 9,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 10,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;">{{substr($npwp, 11,1)}}</td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 12,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 13,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;">{{substr($npwp, 14,1)}}</td>
<td colspan="4"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="font-style: italic;"colspan="30">Diisi sesuai dengan Nomor Pokok Wajib Pajak  yang dimiliki</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
{{-- <tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr> --}}
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="5">NAMA WP</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" >:</td>
<td style="text-align:left;font-size:9pt;" class="border-titik" colspan="24">{{$nama_wp}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
{{-- <tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr> --}}
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="5">ALAMAT WP</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" >:</td>
<td style="text-align:left;font-size:9pt;" class="border-titik" colspan="24">{{$alamat_wp}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>
<td colspan="5"></td>
<td></td>
<td style="text-align:left;font-size:9pt;" class="border-titik" colspan="24">{{$kota_wp}} {{$propinsi_wp}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-bottom-left"></td>
<td class="border-bottom" colspan="30"></td>
<td class="border-right-bottom"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="5">NOP</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;">:</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;"></td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;"></td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;"></td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;"></td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;"></td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;"></td>
<td></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="font-style: italic;" colspan="30">Diisi sesuai dengan Nomor Objek Pajak</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
{{-- <tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr> --}}
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;"  colspan="5">ALAMAT OP</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" >:</td>
<td style="text-align:left;font-size:10pt; color:white;" class="border-titik" colspan="24">1</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>
<td colspan="5"></td>
<td></td>
<td style="text-align:left;font-size:10pt; color:white;" class="border-titik" colspan="24">1</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-bottom-left"></td>
<td class="border-bottom" colspan="30"></td>
<td class="border-right-bottom"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="12"></td>
<td ></td>
<td class="border-left"></td>
<td colspan="16"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="12"></td>
<td></td>
<td class="border-left"></td>
<td style="text-align:left;font-weight: bold;font-size: 9pt;" colspan="5">Uraian Pembayaran</td>
<td style="text-align:left;font-weight: bold; font-size: 9pt;" >:</td>
<td style="text-align:left;font-size:9pt;" class="border-titik" colspan="10">{{$jenis_pajak}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;" colspan="6">Kode Akun Pajak</td>
<td></td>
<td style="text-align:center;font-size:9pt; font-weight: bold;" colspan="5">Kode Jenis Setoran</td>
<td></td>
<td class="border-left"></td>
<td style="text-align:left;font-size:9pt;" class="border-titik" colspan="16">{{$cetakpajak->perusahaan}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_akun_pajak,0,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_akun_pajak,1,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_akun_pajak,2,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_akun_pajak,3,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_akun_pajak,4,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_akun_pajak,5,1)}}</td>
<td colspan="2"></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_setoran,0,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_setoran,1,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_setoran,2,1)}}</td>
<td></td>
<td></td>
<td class="border-left"></td>
<td style="text-align:left;font-size:9pt;" class="border-titik" colspan="16">TAGIHAN SPP NOMOR {{$hasil}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>
<td colspan="12"></td>
<td></td>
<td class="border-left"></td>
<td style="text-align:left;font-size:9pt; color:white;" class="border-titik" colspan="16">1</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="12"></td>
<td></td>
<td class="border-left"></td>
<td colspan="16"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr >

<td class="border-top-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="24">Masa Pajak</td>
<td class="border-top-left" ></td>
<td class="border-top" colspan="6"></td>
<td class="border-top-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Jan</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Feb</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Mar</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Apr</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Mei</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Jun</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Jul</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Ags</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Sep</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Okt</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Nov</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Des</td>
<td class="border-left" ></td>
<td ></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;" colspan="4">Tahun Pajak</td>
<td></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left" ></td>
<td colspan="6"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==1) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==2) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==3) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==4) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==5) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==6) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==7) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==8) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==9) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==10) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==11) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==12) X @endif</td>
<td class="border-left" ></td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($tahun_pajak,0,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($tahun_pajak,1,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($tahun_pajak,2,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($tahun_pajak,3,1)}}</td>
<td></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>

<td class="border-left" ></td>
<td colspan="6"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-bottom-left" style="text-align:center;font-style: italic;" colspan="24">Beri tanda silang (x) pada kolom bulan, sesuai dengan pembayaran untuk masa yang berkenaan</td>
<td class="border-bottom-left-right" style="text-align:center;font-style: italic;" colspan="8">Diisi Tahun terutangnya Pajak</td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="6">Nomor Ketetapan</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" >:</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;">/</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;">/</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;">/</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;">/</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td></td>
<td></td>
<td colspan="2"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-style: italic;" colspan="30">Diisi sesuai Nomor Ketetapan : STP, SKPKB, SKPKBT</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-bottom-left"></td>
<td class="border-bottom" colspan="30"></td>
<td class="border-right-bottom"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="6">Jumlah Pembayaran</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;">:</td>
<td style="text-align:left;font-size:10pt;" class="border-titik"  colspan="17">{{$jumlah}}</td>
<td style="font-style: italic;" colspan="6">Diisi dengan rupiah penuh</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="3">Terbilang</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" >:</td>
<td style="text-align:left;font-size:10pt; " class="border-titik" colspan="26">{{$terbilang1}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>

<td class="border-left"></td>
<td style="text-align:left;font-size:10pt;" class="border-titik" colspan="30">{{$terbilang2}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt;" class="border-titik" colspan="30">{{$terbilang3}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-bottom-left"></td>
<td class="border-bottom" colspan="30"></td>
<td class="border-right-bottom"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="14"></td>
<td></td>
<td class="border-left"></td>
<td colspan="14"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="14">Diterima oleh Kantor Penerima Pembayaran</td>
<td></td>
<td class="border-left"></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;" colspan="14">Wajib Pajak/ Penyetor</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="4">Tanggal</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;">:</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" class="border-titik" colspan="9"></td>
<td></td>
<td class="border-left"></td>
<td style="text-align:right;font-size:10pt;" class="border-titik" colspan="6">Jakarta</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;">,</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="2">Tanggal</td>
<td style="text-align:left;font-size:10pt;" class="border-titik"></td>
<td style="text-align:left;font-size:10pt;" class="border-titik" colspan="4">{{$nama_bulan}} {{$tahun_pajak}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:center;font-style: italic;" colspan="14">Cap dan tanda tangan</td>
<td></td>
<td class="border-left"></td>
<td style="text-align:center;font-style: italic;" colspan="14">Cap dan tanda tangan</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="14"></td>
<td></td>
<td class="border-left"></td>
<td colspan="14"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="14"></td>
<td></td>
<td class="border-left"></td>
<td colspan="14"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="14"></td>
<td></td>
<td class="border-left"></td>
<td colspan="14"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="14"></td>
<td></td>
<td class="border-left"></td>
<td colspan="14"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>

<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="4">Nama Jelas</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;">:</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" class="border-titik" colspan="9"></td>

<td></td>
<td class="border-left"></td>
<td style="text-align:right;font-size:10pt; font-weight: bold;" colspan="6">Nama Jelas</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;">:</td>
<td style="text-align:left;font-size:10pt;" class="border-titik" colspan="7">{{$nama_setor}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-bottom-left"></td>
<td class= "border-bottom" colspan="15"></td>
<td class="border-bottom-left"></td>
<td class= "border-bottom" colspan="14"></td>
<td class="border-right-bottom"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:center;font-size:10pt;"colspan="30"> Terima kasih Telah Membayar Pajak - Pajak Untuk Pembangunan Bangsa</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;" colspan="30">Ruang Validasi Kantor Penerima Pembayaran</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-bottom-left"></td>
<td class="border-bottom" colspan="30">F.2.0.32.01</td>
<td class="border-right-bottom"></td>
<td style="color:white">12</td>
</tr>


{{-- <tr >
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
</tr> --}}
</tbody>
</table>

<div class="page-break"></div>

<table style="align:center;font-size:8pt;" width="495">
<tbody>

<tr >
<td width="15" style="color:white" class="border-top-left">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top-left">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top-right">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top-right">12</td>
<td width="15" style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td rowspan="3" colspan="3" align="center"> <img src="{{URL::asset('img/logo_kemenkeu.jpg')}}" width="10%"></td>
<td colspan="8"></td>
<td ></td>
<td class="border-left"></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;" colspan="8">SURAT SETORAN PAJAK</td>
<td class="border-right"></td>
<td ></td>
<td colspan="5"></td>
<td style="border:0px solid black; border-width: 1px 1px 1px 1px; text-align:center;font-size:20pt; font-weight: bold;" colspan="2" rowspan="2">2</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
{{-- <td rowspan="3" colspan="3" align="center"> <img src="{{URL::asset('img/logo_kemenkeu.jpg')}}" width="10%"></td> --}}
<td style="text-align:left;font-size:8pt; font-weight: bold;" colspan="8">DEPARTEMEN KEUANGAN R.I. <br>DIREKTORAT JENDERAL PAJAK</td>
<td></td>
<td class="border-left"></td>
<td style="text-align:center;font-size:24pt; font-weight: bold; vertical-align: middle;" colspan="8" rowspan="2">(SSP)</td>
<td class="border-right"></td>
<td></td>
<td style="text-align:left;font-size:8pt; font-weight: bold;" colspan="5">LEMBAR</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
{{-- <td colspan="3"></td> --}}
<td style="text-align:left;font-size:8pt; font-weight: bold;" colspan="8"></td>
<td></td>
<td class="border-left"></td>
<td class="border-right"></td>
<td ></td>
<td style="text-align:left;font-size:9pt; " colspan="7">{!! $lembar2 !!}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
{{-- <tr>
<td class="border-left"></td>
<td colspan="3"></td>
<td style="text-align:left;font-size:8pt; font-weight: bold;" colspan=8></td>
<td></td>
<td class="border-left"></td>
<td style="text-align:center; font-weight: bold;" colspan="8">xxx</td>
<td class="border-right"></td>
<td ></td>
<td style="text-align:left;font-size:9pt; " colspan="7">xxx</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr> --}}
<tr>
<td class="border-left"></td>
<td colspan="11"></td>
<td></td>
<td class="border-left"></td>
<td colspan="8"></td>
<td class="border-right"></td>
<td></td>
<td colspan="7"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-top-left"></td>
<td class="border-top"colspan="30"></td>
<td class="border-top-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;"colspan="5">NPWP</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;">:</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" >{{substr($npwp, 0,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;">{{substr($npwp, 1,1)}}</td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 2,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 3,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;">{{substr($npwp, 4,1)}}</td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 5,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 6,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;">{{substr($npwp, 7,1)}}</td>
<td></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;">{{substr($npwp, 8,1)}}</td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 9,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 10,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;">{{substr($npwp, 11,1)}}</td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 12,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 13,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;">{{substr($npwp, 14,1)}}</td>
<td colspan="4"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="font-style: italic;"colspan="30">Diisi sesuai dengan Nomor Pokok Wajib Pajak  yang dimiliki</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
{{-- <tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr> --}}
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="5">NAMA WP</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" >:</td>
<td style="text-align:left;font-size:9pt;" class="border-titik" colspan="24">{{$nama_wp}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
{{-- <tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr> --}}
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="5">ALAMAT WP</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" >:</td>
<td style="text-align:left;font-size:9pt;" class="border-titik" colspan="24">{{$alamat_wp}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>
<td colspan="5"></td>
<td></td>
<td style="text-align:left;font-size:9pt;" class="border-titik" colspan="24">{{$kota_wp}} {{$propinsi_wp}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-bottom-left"></td>
<td class="border-bottom" colspan="30"></td>
<td class="border-right-bottom"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="5">NOP</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;">:</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;"></td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;"></td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;"></td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;"></td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;"></td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;"></td>
<td></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="font-style: italic;" colspan="30">Diisi sesuai dengan Nomor Objek Pajak</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
{{-- <tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr> --}}
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;"  colspan="5">ALAMAT OP</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" >:</td>
<td style="text-align:left;font-size:10pt; color:white;" class="border-titik" colspan="24">1</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>
<td colspan="5"></td>
<td></td>
<td style="text-align:left;font-size:10pt; color:white;" class="border-titik" colspan="24">1</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-bottom-left"></td>
<td class="border-bottom" colspan="30"></td>
<td class="border-right-bottom"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="12"></td>
<td ></td>
<td class="border-left"></td>
<td colspan="16"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="12"></td>
<td></td>
<td class="border-left"></td>
<td style="text-align:left;font-weight: bold;font-size: 9pt;" colspan="5">Uraian Pembayaran</td>
<td style="text-align:left;font-weight: bold; font-size: 9pt;" >:</td>
<td style="text-align:left;font-size:9pt;" class="border-titik" colspan="10">{{$jenis_pajak}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;" colspan="6">Kode Akun Pajak</td>
<td></td>
<td style="text-align:center;font-size:9pt; font-weight: bold;" colspan="5">Kode Jenis Setoran</td>
<td></td>
<td class="border-left"></td>
<td style="text-align:left;font-size:9pt;" class="border-titik" colspan="16">{{$cetakpajak->perusahaan}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_akun_pajak,0,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_akun_pajak,1,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_akun_pajak,2,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_akun_pajak,3,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_akun_pajak,4,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_akun_pajak,5,1)}}</td>
<td colspan="2"></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_setoran,0,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_setoran,1,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_setoran,2,1)}}</td>
<td></td>
<td></td>
<td class="border-left"></td>
<td style="text-align:left;font-size:9pt;" class="border-titik" colspan="16">TAGIHAN SPP NOMOR {{$hasil}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>
<td colspan="12"></td>
<td></td>
<td class="border-left"></td>
<td style="text-align:left;font-size:9pt; color:white;" class="border-titik" colspan="16">1</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="12"></td>
<td></td>
<td class="border-left"></td>
<td colspan="16"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr >

<td class="border-top-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="24">Masa Pajak</td>
<td class="border-top-left" ></td>
<td class="border-top" colspan="6"></td>
<td class="border-top-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Jan</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Feb</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Mar</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Apr</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Mei</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Jun</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Jul</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Ags</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Sep</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Okt</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Nov</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Des</td>
<td class="border-left" ></td>
<td ></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;" colspan="4">Tahun Pajak</td>
<td></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left" ></td>
<td colspan="6"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==1) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==2) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==3) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==4) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==5) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==6) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==7) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==8) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==9) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==10) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==11) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==12) X @endif</td>
<td class="border-left" ></td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($tahun_pajak,0,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($tahun_pajak,1,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($tahun_pajak,2,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($tahun_pajak,3,1)}}</td>
<td></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>

<td class="border-left" ></td>
<td colspan="6"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-bottom-left" style="text-align:center;font-style: italic;" colspan="24">Beri tanda silang (x) pada kolom bulan, sesuai dengan pembayaran untuk masa yang berkenaan</td>
<td class="border-bottom-left-right" style="text-align:center;font-style: italic;" colspan="8">Diisi Tahun terutangnya Pajak</td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="6">Nomor Ketetapan</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" >:</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;">/</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;">/</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;">/</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;">/</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td></td>
<td></td>
<td colspan="2"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-style: italic;" colspan="30">Diisi sesuai Nomor Ketetapan : STP, SKPKB, SKPKBT</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-bottom-left"></td>
<td class="border-bottom" colspan="30"></td>
<td class="border-right-bottom"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="6">Jumlah Pembayaran</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;">:</td>
<td style="text-align:left;font-size:10pt;" class="border-titik"  colspan="17">{{$jumlah}}</td>
<td style="font-style: italic;" colspan="6">Diisi dengan rupiah penuh</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="3">Terbilang</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" >:</td>
<td style="text-align:left;font-size:10pt; " class="border-titik" colspan="26">{{$terbilang1}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>

<td class="border-left"></td>
<td style="text-align:left;font-size:10pt;" class="border-titik" colspan="30">{{$terbilang2}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt;" class="border-titik" colspan="30">{{$terbilang3}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-bottom-left"></td>
<td class="border-bottom" colspan="30"></td>
<td class="border-right-bottom"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="14"></td>
<td></td>
<td class="border-left"></td>
<td colspan="14"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="14">Diterima oleh Kantor Penerima Pembayaran</td>
<td></td>
<td class="border-left"></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;" colspan="14">Wajib Pajak/ Penyetor</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="4">Tanggal</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;">:</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" class="border-titik" colspan="9"></td>
<td></td>
<td class="border-left"></td>
<td style="text-align:right;font-size:10pt;" class="border-titik" colspan="6">Jakarta</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;">,</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="2">Tanggal</td>
<td style="text-align:left;font-size:10pt;" class="border-titik"></td>
<td style="text-align:left;font-size:10pt;" class="border-titik" colspan="4">{{$nama_bulan}} {{$tahun_pajak}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:center;font-style: italic;" colspan="14">Cap dan tanda tangan</td>
<td></td>
<td class="border-left"></td>
<td style="text-align:center;font-style: italic;" colspan="14">Cap dan tanda tangan</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="14"></td>
<td></td>
<td class="border-left"></td>
<td colspan="14"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="14"></td>
<td></td>
<td class="border-left"></td>
<td colspan="14"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="14"></td>
<td></td>
<td class="border-left"></td>
<td colspan="14"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="14"></td>
<td></td>
<td class="border-left"></td>
<td colspan="14"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>

<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="4">Nama Jelas</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;">:</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" class="border-titik" colspan="9"></td>

<td></td>
<td class="border-left"></td>
<td style="text-align:right;font-size:10pt; font-weight: bold;" colspan="6">Nama Jelas</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;">:</td>
<td style="text-align:left;font-size:10pt;" class="border-titik" colspan="7">{{$nama_setor}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-bottom-left"></td>
<td class= "border-bottom" colspan="15"></td>
<td class="border-bottom-left"></td>
<td class= "border-bottom" colspan="14"></td>
<td class="border-right-bottom"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:center;font-size:10pt;"colspan="30"> Terima kasih Telah Membayar Pajak - Pajak Untuk Pembangunan Bangsa</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;" colspan="30">Ruang Validasi Kantor Penerima Pembayaran</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-bottom-left"></td>
<td class="border-bottom" colspan="30">F.2.0.32.01</td>
<td class="border-right-bottom"></td>
<td style="color:white">12</td>
</tr>


{{-- <tr >
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
</tr> --}}
</tbody>
</table>

<div class="page-break"></div>

<table style="align:center;font-size:8pt;" width="495">
<tbody>

<tr >
<td width="15" style="color:white" class="border-top-left">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top-left">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top-right">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top-right">12</td>
<td width="15" style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td rowspan="3" colspan="3" align="center"> <img src="{{URL::asset('img/logo_kemenkeu.jpg')}}" width="10%"></td>
<td colspan="8"></td>
<td ></td>
<td class="border-left"></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;" colspan="8">SURAT SETORAN PAJAK</td>
<td class="border-right"></td>
<td ></td>
<td colspan="5"></td>
<td style="border:0px solid black; border-width: 1px 1px 1px 1px; text-align:center;font-size:20pt; font-weight: bold;" colspan="2" rowspan="2">3</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
{{-- <td rowspan="3" colspan="3" align="center"> <img src="{{URL::asset('img/logo_kemenkeu.jpg')}}" width="10%"></td> --}}
<td style="text-align:left;font-size:8pt; font-weight: bold;" colspan="8">DEPARTEMEN KEUANGAN R.I. <br>DIREKTORAT JENDERAL PAJAK</td>
<td></td>
<td class="border-left"></td>
<td style="text-align:center;font-size:24pt; font-weight: bold; vertical-align: middle;" colspan="8" rowspan="2">(SSP)</td>
<td class="border-right"></td>
<td></td>
<td style="text-align:left;font-size:8pt; font-weight: bold;" colspan="5">LEMBAR</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
{{-- <td colspan="3"></td> --}}
<td style="text-align:left;font-size:8pt; font-weight: bold;" colspan="8"></td>
<td></td>
<td class="border-left"></td>
<td class="border-right"></td>
<td ></td>
<td style="text-align:left;font-size:9pt; " colspan="7">{!! $lembar3 !!}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
{{-- <tr>
<td class="border-left"></td>
<td colspan="3"></td>
<td style="text-align:left;font-size:8pt; font-weight: bold;" colspan=8></td>
<td></td>
<td class="border-left"></td>
<td style="text-align:center; font-weight: bold;" colspan="8">xxx</td>
<td class="border-right"></td>
<td ></td>
<td style="text-align:left;font-size:9pt; " colspan="7">xxx</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr> --}}
<tr>
<td class="border-left"></td>
<td colspan="11"></td>
<td></td>
<td class="border-left"></td>
<td colspan="8"></td>
<td class="border-right"></td>
<td></td>
<td colspan="7"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-top-left"></td>
<td class="border-top"colspan="30"></td>
<td class="border-top-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;"colspan="5">NPWP</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;">:</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" >{{substr($npwp, 0,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;">{{substr($npwp, 1,1)}}</td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 2,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 3,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;">{{substr($npwp, 4,1)}}</td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 5,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 6,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;">{{substr($npwp, 7,1)}}</td>
<td></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;">{{substr($npwp, 8,1)}}</td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 9,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 10,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;">{{substr($npwp, 11,1)}}</td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 12,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 13,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;">{{substr($npwp, 14,1)}}</td>
<td colspan="4"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="font-style: italic;"colspan="30">Diisi sesuai dengan Nomor Pokok Wajib Pajak  yang dimiliki</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
{{-- <tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr> --}}
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="5">NAMA WP</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" >:</td>
<td style="text-align:left;font-size:9pt;" class="border-titik" colspan="24">{{$nama_wp}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
{{-- <tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr> --}}
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="5">ALAMAT WP</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" >:</td>
<td style="text-align:left;font-size:9pt;" class="border-titik" colspan="24">{{$alamat_wp}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>
<td colspan="5"></td>
<td></td>
<td style="text-align:left;font-size:9pt;" class="border-titik" colspan="24">{{$kota_wp}} {{$propinsi_wp}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-bottom-left"></td>
<td class="border-bottom" colspan="30"></td>
<td class="border-right-bottom"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="5">NOP</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;">:</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;"></td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;"></td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;"></td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;"></td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;"></td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;"></td>
<td></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="font-style: italic;" colspan="30">Diisi sesuai dengan Nomor Objek Pajak</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
{{-- <tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr> --}}
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;"  colspan="5">ALAMAT OP</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" >:</td>
<td style="text-align:left;font-size:10pt; color:white;" class="border-titik" colspan="24">1</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>
<td colspan="5"></td>
<td></td>
<td style="text-align:left;font-size:10pt; color:white;" class="border-titik" colspan="24">1</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-bottom-left"></td>
<td class="border-bottom" colspan="30"></td>
<td class="border-right-bottom"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="12"></td>
<td ></td>
<td class="border-left"></td>
<td colspan="16"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="12"></td>
<td></td>
<td class="border-left"></td>
<td style="text-align:left;font-weight: bold;font-size: 9pt;" colspan="5">Uraian Pembayaran</td>
<td style="text-align:left;font-weight: bold; font-size: 9pt;" >:</td>
<td style="text-align:left;font-size:9pt;" class="border-titik" colspan="10">{{$jenis_pajak}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;" colspan="6">Kode Akun Pajak</td>
<td></td>
<td style="text-align:center;font-size:9pt; font-weight: bold;" colspan="5">Kode Jenis Setoran</td>
<td></td>
<td class="border-left"></td>
<td style="text-align:left;font-size:9pt;" class="border-titik" colspan="16">{{$cetakpajak->perusahaan}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_akun_pajak,0,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_akun_pajak,1,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_akun_pajak,2,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_akun_pajak,3,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_akun_pajak,4,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_akun_pajak,5,1)}}</td>
<td colspan="2"></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_setoran,0,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_setoran,1,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_setoran,2,1)}}</td>
<td></td>
<td></td>
<td class="border-left"></td>
<td style="text-align:left;font-size:9pt;" class="border-titik" colspan="16">TAGIHAN SPP NOMOR {{$hasil}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>
<td colspan="12"></td>
<td></td>
<td class="border-left"></td>
<td style="text-align:left;font-size:9pt; color:white;" class="border-titik" colspan="16">1</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="12"></td>
<td></td>
<td class="border-left"></td>
<td colspan="16"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr >

<td class="border-top-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="24">Masa Pajak</td>
<td class="border-top-left" ></td>
<td class="border-top" colspan="6"></td>
<td class="border-top-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Jan</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Feb</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Mar</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Apr</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Mei</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Jun</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Jul</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Ags</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Sep</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Okt</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Nov</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Des</td>
<td class="border-left" ></td>
<td ></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;" colspan="4">Tahun Pajak</td>
<td></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left" ></td>
<td colspan="6"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==1) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==2) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==3) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==4) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==5) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==6) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==7) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==8) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==9) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==10) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==11) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==12) X @endif</td>
<td class="border-left" ></td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($tahun_pajak,0,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($tahun_pajak,1,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($tahun_pajak,2,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($tahun_pajak,3,1)}}</td>
<td></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>

<td class="border-left" ></td>
<td colspan="6"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-bottom-left" style="text-align:center;font-style: italic;" colspan="24">Beri tanda silang (x) pada kolom bulan, sesuai dengan pembayaran untuk masa yang berkenaan</td>
<td class="border-bottom-left-right" style="text-align:center;font-style: italic;" colspan="8">Diisi Tahun terutangnya Pajak</td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="6">Nomor Ketetapan</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" >:</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;">/</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;">/</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;">/</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;">/</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td></td>
<td></td>
<td colspan="2"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-style: italic;" colspan="30">Diisi sesuai Nomor Ketetapan : STP, SKPKB, SKPKBT</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-bottom-left"></td>
<td class="border-bottom" colspan="30"></td>
<td class="border-right-bottom"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="6">Jumlah Pembayaran</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;">:</td>
<td style="text-align:left;font-size:10pt;" class="border-titik"  colspan="17">{{$jumlah}}</td>
<td style="font-style: italic;" colspan="6">Diisi dengan rupiah penuh</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="3">Terbilang</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" >:</td>
<td style="text-align:left;font-size:10pt; " class="border-titik" colspan="26">{{$terbilang1}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>

<td class="border-left"></td>
<td style="text-align:left;font-size:10pt;" class="border-titik" colspan="30">{{$terbilang2}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt;" class="border-titik" colspan="30">{{$terbilang3}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-bottom-left"></td>
<td class="border-bottom" colspan="30"></td>
<td class="border-right-bottom"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="14"></td>
<td></td>
<td class="border-left"></td>
<td colspan="14"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="14">Diterima oleh Kantor Penerima Pembayaran</td>
<td></td>
<td class="border-left"></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;" colspan="14">Wajib Pajak/ Penyetor</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="4">Tanggal</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;">:</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" class="border-titik" colspan="9"></td>
<td></td>
<td class="border-left"></td>
<td style="text-align:right;font-size:10pt;" class="border-titik" colspan="6">Jakarta</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;">,</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="2">Tanggal</td>
<td style="text-align:left;font-size:10pt;" class="border-titik"></td>
<td style="text-align:left;font-size:10pt;" class="border-titik" colspan="4">{{$nama_bulan}} {{$tahun_pajak}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:center;font-style: italic;" colspan="14">Cap dan tanda tangan</td>
<td></td>
<td class="border-left"></td>
<td style="text-align:center;font-style: italic;" colspan="14">Cap dan tanda tangan</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="14"></td>
<td></td>
<td class="border-left"></td>
<td colspan="14"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="14"></td>
<td></td>
<td class="border-left"></td>
<td colspan="14"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="14"></td>
<td></td>
<td class="border-left"></td>
<td colspan="14"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="14"></td>
<td></td>
<td class="border-left"></td>
<td colspan="14"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>

<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="4">Nama Jelas</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;">:</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" class="border-titik" colspan="9"></td>

<td></td>
<td class="border-left"></td>
<td style="text-align:right;font-size:10pt; font-weight: bold;" colspan="6">Nama Jelas</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;">:</td>
<td style="text-align:left;font-size:10pt;" class="border-titik" colspan="7">{{$nama_setor}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-bottom-left"></td>
<td class= "border-bottom" colspan="15"></td>
<td class="border-bottom-left"></td>
<td class= "border-bottom" colspan="14"></td>
<td class="border-right-bottom"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:center;font-size:10pt;"colspan="30"> Terima kasih Telah Membayar Pajak - Pajak Untuk Pembangunan Bangsa</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;" colspan="30">Ruang Validasi Kantor Penerima Pembayaran</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-bottom-left"></td>
<td class="border-bottom" colspan="30">F.2.0.32.01</td>
<td class="border-right-bottom"></td>
<td style="color:white">12</td>
</tr>


{{-- <tr >
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
</tr> --}}
</tbody>
</table>

<div class="page-break"></div>

<table style="align:center;font-size:8pt;" width="495">
<tbody>

<tr >
<td width="15" style="color:white" class="border-top-left">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top-left">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top-right">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top-right">12</td>
<td width="15" style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td rowspan="3" colspan="3" align="center"> <img src="{{URL::asset('img/logo_kemenkeu.jpg')}}" width="10%"></td>
<td colspan="8"></td>
<td ></td>
<td class="border-left"></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;" colspan="8">SURAT SETORAN PAJAK</td>
<td class="border-right"></td>
<td ></td>
<td colspan="5"></td>
<td style="border:0px solid black; border-width: 1px 1px 1px 1px; text-align:center;font-size:20pt; font-weight: bold;" colspan="2" rowspan="2">4</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
{{-- <td rowspan="3" colspan="3" align="center"> <img src="{{URL::asset('img/logo_kemenkeu.jpg')}}" width="10%"></td> --}}
<td style="text-align:left;font-size:8pt; font-weight: bold;" colspan="8">DEPARTEMEN KEUANGAN R.I. <br>DIREKTORAT JENDERAL PAJAK</td>
<td></td>
<td class="border-left"></td>
<td style="text-align:center;font-size:24pt; font-weight: bold; vertical-align: middle;" colspan="8" rowspan="2">(SSP)</td>
<td class="border-right"></td>
<td></td>
<td style="text-align:left;font-size:8pt; font-weight: bold;" colspan="5">LEMBAR</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
{{-- <td colspan="3"></td> --}}
<td style="text-align:left;font-size:8pt; font-weight: bold;" colspan="8"></td>
<td></td>
<td class="border-left"></td>
<td class="border-right"></td>
<td ></td>
<td style="text-align:left;font-size:9pt; " colspan="7">{!! $lembar4 !!}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
{{-- <tr>
<td class="border-left"></td>
<td colspan="3"></td>
<td style="text-align:left;font-size:8pt; font-weight: bold;" colspan=8></td>
<td></td>
<td class="border-left"></td>
<td style="text-align:center; font-weight: bold;" colspan="8">xxx</td>
<td class="border-right"></td>
<td ></td>
<td style="text-align:left;font-size:9pt; " colspan="7">xxx</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr> --}}
<tr>
<td class="border-left"></td>
<td colspan="11"></td>
<td></td>
<td class="border-left"></td>
<td colspan="8"></td>
<td class="border-right"></td>
<td></td>
<td colspan="7"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-top-left"></td>
<td class="border-top"colspan="30"></td>
<td class="border-top-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;"colspan="5">NPWP</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;">:</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" >{{substr($npwp, 0,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;">{{substr($npwp, 1,1)}}</td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 2,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 3,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;">{{substr($npwp, 4,1)}}</td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 5,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 6,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;">{{substr($npwp, 7,1)}}</td>
<td></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;">{{substr($npwp, 8,1)}}</td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 9,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 10,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;">{{substr($npwp, 11,1)}}</td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 12,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 13,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;">{{substr($npwp, 14,1)}}</td>
<td colspan="4"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="font-style: italic;"colspan="30">Diisi sesuai dengan Nomor Pokok Wajib Pajak  yang dimiliki</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
{{-- <tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr> --}}
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="5">NAMA WP</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" >:</td>
<td style="text-align:left;font-size:9pt;" class="border-titik" colspan="24">{{$nama_wp}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
{{-- <tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr> --}}
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="5">ALAMAT WP</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" >:</td>
<td style="text-align:left;font-size:9pt;" class="border-titik" colspan="24">{{$alamat_wp}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>
<td colspan="5"></td>
<td></td>
<td style="text-align:left;font-size:9pt;" class="border-titik" colspan="24">{{$kota_wp}} {{$propinsi_wp}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-bottom-left"></td>
<td class="border-bottom" colspan="30"></td>
<td class="border-right-bottom"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="5">NOP</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;">:</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;"></td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;"></td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;"></td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;"></td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;"></td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;"></td>
<td></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="font-style: italic;" colspan="30">Diisi sesuai dengan Nomor Objek Pajak</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
{{-- <tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr> --}}
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;"  colspan="5">ALAMAT OP</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" >:</td>
<td style="text-align:left;font-size:10pt; color:white;" class="border-titik" colspan="24">1</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>
<td colspan="5"></td>
<td></td>
<td style="text-align:left;font-size:10pt; color:white;" class="border-titik" colspan="24">1</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-bottom-left"></td>
<td class="border-bottom" colspan="30"></td>
<td class="border-right-bottom"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="12"></td>
<td ></td>
<td class="border-left"></td>
<td colspan="16"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="12"></td>
<td></td>
<td class="border-left"></td>
<td style="text-align:left;font-weight: bold;font-size: 9pt;" colspan="5">Uraian Pembayaran</td>
<td style="text-align:left;font-weight: bold; font-size: 9pt;" >:</td>
<td style="text-align:left;font-size:9pt;" class="border-titik" colspan="10">{{$jenis_pajak}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;" colspan="6">Kode Akun Pajak</td>
<td></td>
<td style="text-align:center;font-size:9pt; font-weight: bold;" colspan="5">Kode Jenis Setoran</td>
<td></td>
<td class="border-left"></td>
<td style="text-align:left;font-size:9pt;" class="border-titik" colspan="16">{{$cetakpajak->perusahaan}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_akun_pajak,0,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_akun_pajak,1,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_akun_pajak,2,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_akun_pajak,3,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_akun_pajak,4,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_akun_pajak,5,1)}}</td>
<td colspan="2"></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_setoran,0,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_setoran,1,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_setoran,2,1)}}</td>
<td></td>
<td></td>
<td class="border-left"></td>
<td style="text-align:left;font-size:9pt;" class="border-titik" colspan="16">TAGIHAN SPP NOMOR {{$hasil}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>
<td colspan="12"></td>
<td></td>
<td class="border-left"></td>
<td style="text-align:left;font-size:9pt; color:white;" class="border-titik" colspan="16">1</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="12"></td>
<td></td>
<td class="border-left"></td>
<td colspan="16"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr >

<td class="border-top-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="24">Masa Pajak</td>
<td class="border-top-left" ></td>
<td class="border-top" colspan="6"></td>
<td class="border-top-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Jan</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Feb</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Mar</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Apr</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Mei</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Jun</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Jul</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Ags</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Sep</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Okt</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Nov</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Des</td>
<td class="border-left" ></td>
<td ></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;" colspan="4">Tahun Pajak</td>
<td></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left" ></td>
<td colspan="6"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==1) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==2) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==3) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==4) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==5) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==6) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==7) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==8) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==9) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==10) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==11) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==12) X @endif</td>
<td class="border-left" ></td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($tahun_pajak,0,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($tahun_pajak,1,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($tahun_pajak,2,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($tahun_pajak,3,1)}}</td>
<td></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>

<td class="border-left" ></td>
<td colspan="6"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-bottom-left" style="text-align:center;font-style: italic;" colspan="24">Beri tanda silang (x) pada kolom bulan, sesuai dengan pembayaran untuk masa yang berkenaan</td>
<td class="border-bottom-left-right" style="text-align:center;font-style: italic;" colspan="8">Diisi Tahun terutangnya Pajak</td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="6">Nomor Ketetapan</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" >:</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;">/</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;">/</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;">/</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;">/</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td></td>
<td></td>
<td colspan="2"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-style: italic;" colspan="30">Diisi sesuai Nomor Ketetapan : STP, SKPKB, SKPKBT</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-bottom-left"></td>
<td class="border-bottom" colspan="30"></td>
<td class="border-right-bottom"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="6">Jumlah Pembayaran</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;">:</td>
<td style="text-align:left;font-size:10pt;" class="border-titik"  colspan="17">{{$jumlah}}</td>
<td style="font-style: italic;" colspan="6">Diisi dengan rupiah penuh</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="3">Terbilang</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" >:</td>
<td style="text-align:left;font-size:10pt; " class="border-titik" colspan="26">{{$terbilang1}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>

<td class="border-left"></td>
<td style="text-align:left;font-size:10pt;" class="border-titik" colspan="30">{{$terbilang2}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt;" class="border-titik" colspan="30">{{$terbilang3}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-bottom-left"></td>
<td class="border-bottom" colspan="30"></td>
<td class="border-right-bottom"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="14"></td>
<td></td>
<td class="border-left"></td>
<td colspan="14"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="14">Diterima oleh Kantor Penerima Pembayaran</td>
<td></td>
<td class="border-left"></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;" colspan="14">Wajib Pajak/ Penyetor</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="4">Tanggal</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;">:</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" class="border-titik" colspan="9"></td>
<td></td>
<td class="border-left"></td>
<td style="text-align:right;font-size:10pt;" class="border-titik" colspan="6">Jakarta</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;">,</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="2">Tanggal</td>
<td style="text-align:left;font-size:10pt;" class="border-titik"></td>
<td style="text-align:left;font-size:10pt;" class="border-titik" colspan="4">{{$nama_bulan}} {{$tahun_pajak}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:center;font-style: italic;" colspan="14">Cap dan tanda tangan</td>
<td></td>
<td class="border-left"></td>
<td style="text-align:center;font-style: italic;" colspan="14">Cap dan tanda tangan</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="14"></td>
<td></td>
<td class="border-left"></td>
<td colspan="14"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="14"></td>
<td></td>
<td class="border-left"></td>
<td colspan="14"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="14"></td>
<td></td>
<td class="border-left"></td>
<td colspan="14"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="14"></td>
<td></td>
<td class="border-left"></td>
<td colspan="14"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>

<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="4">Nama Jelas</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;">:</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" class="border-titik" colspan="9"></td>

<td></td>
<td class="border-left"></td>
<td style="text-align:right;font-size:10pt; font-weight: bold;" colspan="6">Nama Jelas</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;">:</td>
<td style="text-align:left;font-size:10pt;" class="border-titik" colspan="7">{{$nama_setor}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-bottom-left"></td>
<td class= "border-bottom" colspan="15"></td>
<td class="border-bottom-left"></td>
<td class= "border-bottom" colspan="14"></td>
<td class="border-right-bottom"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:center;font-size:10pt;"colspan="30"> Terima kasih Telah Membayar Pajak - Pajak Untuk Pembangunan Bangsa</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;" colspan="30">Ruang Validasi Kantor Penerima Pembayaran</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-bottom-left"></td>
<td class="border-bottom" colspan="30">F.2.0.32.01</td>
<td class="border-right-bottom"></td>
<td style="color:white">12</td>
</tr>


{{-- <tr >
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
</tr> --}}
</tbody>
</table>

<div class="page-break"></div>

<table style="align:center;font-size:8pt;" width="495">
<tbody>

<tr >
<td width="15" style="color:white" class="border-top-left">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top-left">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top-right">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top-right">12</td>
<td width="15" style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td rowspan="3" colspan="3" align="center"> <img src="{{URL::asset('img/logo_kemenkeu.jpg')}}" width="10%"></td>
<td colspan="8"></td>
<td ></td>
<td class="border-left"></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;" colspan="8">SURAT SETORAN PAJAK</td>
<td class="border-right"></td>
<td ></td>
<td colspan="5"></td>
<td style="border:0px solid black; border-width: 1px 1px 1px 1px; text-align:center;font-size:20pt; font-weight: bold;" colspan="2" rowspan="2">5</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
{{-- <td rowspan="3" colspan="3" align="center"> <img src="{{URL::asset('img/logo_kemenkeu.jpg')}}" width="10%"></td> --}}
<td style="text-align:left;font-size:8pt; font-weight: bold;" colspan="8">DEPARTEMEN KEUANGAN R.I. <br>DIREKTORAT JENDERAL PAJAK</td>
<td></td>
<td class="border-left"></td>
<td style="text-align:center;font-size:24pt; font-weight: bold; vertical-align: middle;" colspan="8" rowspan="2">(SSP)</td>
<td class="border-right"></td>
<td></td>
<td style="text-align:left;font-size:8pt; font-weight: bold;" colspan="5">LEMBAR</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
{{-- <td colspan="3"></td> --}}
<td style="text-align:left;font-size:8pt; font-weight: bold;" colspan="8"></td>
<td></td>
<td class="border-left"></td>
<td class="border-right"></td>
<td ></td>
<td style="text-align:left;font-size:9pt; " colspan="7">{!! $lembar5 !!}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
{{-- <tr>
<td class="border-left"></td>
<td colspan="3"></td>
<td style="text-align:left;font-size:8pt; font-weight: bold;" colspan=8></td>
<td></td>
<td class="border-left"></td>
<td style="text-align:center; font-weight: bold;" colspan="8">xxx</td>
<td class="border-right"></td>
<td ></td>
<td style="text-align:left;font-size:9pt; " colspan="7">xxx</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr> --}}
<tr>
<td class="border-left"></td>
<td colspan="11"></td>
<td></td>
<td class="border-left"></td>
<td colspan="8"></td>
<td class="border-right"></td>
<td></td>
<td colspan="7"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-top-left"></td>
<td class="border-top"colspan="30"></td>
<td class="border-top-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;"colspan="5">NPWP</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;">:</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" >{{substr($npwp, 0,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;">{{substr($npwp, 1,1)}}</td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 2,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 3,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;">{{substr($npwp, 4,1)}}</td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 5,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 6,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;">{{substr($npwp, 7,1)}}</td>
<td></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;">{{substr($npwp, 8,1)}}</td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 9,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 10,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;">{{substr($npwp, 11,1)}}</td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 12,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;">{{substr($npwp, 13,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;">{{substr($npwp, 14,1)}}</td>
<td colspan="4"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="font-style: italic;"colspan="30">Diisi sesuai dengan Nomor Pokok Wajib Pajak  yang dimiliki</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
{{-- <tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr> --}}
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="5">NAMA WP</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" >:</td>
<td style="text-align:left;font-size:9pt;" class="border-titik" colspan="24">{{$nama_wp}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
{{-- <tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr> --}}
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="5">ALAMAT WP</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" >:</td>
<td style="text-align:left;font-size:9pt;" class="border-titik" colspan="24">{{$alamat_wp}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>
<td colspan="5"></td>
<td></td>
<td style="text-align:left;font-size:9pt;" class="border-titik" colspan="24">{{$kota_wp}} {{$propinsi_wp}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-bottom-left"></td>
<td class="border-bottom" colspan="30"></td>
<td class="border-right-bottom"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="5">NOP</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;">:</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;"></td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;"></td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;"></td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;"></td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;"></td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;"></td>
<td></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt;"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="font-style: italic;" colspan="30">Diisi sesuai dengan Nomor Objek Pajak</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
{{-- <tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr> --}}
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;"  colspan="5">ALAMAT OP</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" >:</td>
<td style="text-align:left;font-size:10pt; color:white;" class="border-titik" colspan="24">1</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>
<td colspan="5"></td>
<td></td>
<td style="text-align:left;font-size:10pt; color:white;" class="border-titik" colspan="24">1</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-bottom-left"></td>
<td class="border-bottom" colspan="30"></td>
<td class="border-right-bottom"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="12"></td>
<td ></td>
<td class="border-left"></td>
<td colspan="16"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="12"></td>
<td></td>
<td class="border-left"></td>
<td style="text-align:left;font-weight: bold;font-size: 9pt;" colspan="5">Uraian Pembayaran</td>
<td style="text-align:left;font-weight: bold; font-size: 9pt;" >:</td>
<td style="text-align:left;font-size:9pt;" class="border-titik" colspan="10">{{$jenis_pajak}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;" colspan="6">Kode Akun Pajak</td>
<td></td>
<td style="text-align:center;font-size:9pt; font-weight: bold;" colspan="5">Kode Jenis Setoran</td>
<td></td>
<td class="border-left"></td>
<td style="text-align:left;font-size:9pt;" class="border-titik" colspan="16">{{$cetakpajak->perusahaan}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_akun_pajak,0,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_akun_pajak,1,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_akun_pajak,2,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_akun_pajak,3,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_akun_pajak,4,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_akun_pajak,5,1)}}</td>
<td colspan="2"></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_setoran,0,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_setoran,1,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($kode_setoran,2,1)}}</td>
<td></td>
<td></td>
<td class="border-left"></td>
<td style="text-align:left;font-size:9pt;" class="border-titik" colspan="16">TAGIHAN SPP NOMOR {{$hasil}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>
<td colspan="12"></td>
<td></td>
<td class="border-left"></td>
<td style="text-align:left;font-size:9pt; color:white;" class="border-titik" colspan="16">1</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="12"></td>
<td></td>
<td class="border-left"></td>
<td colspan="16"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr >

<td class="border-top-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="24">Masa Pajak</td>
<td class="border-top-left" ></td>
<td class="border-top" colspan="6"></td>
<td class="border-top-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Jan</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Feb</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Mar</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Apr</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Mei</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Jun</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Jul</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Ags</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Sep</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Okt</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Nov</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">Des</td>
<td class="border-left" ></td>
<td ></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;" colspan="4">Tahun Pajak</td>
<td></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left" ></td>
<td colspan="6"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==1) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==2) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==3) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==4) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==5) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==6) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==7) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==8) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==9) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==10) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==11) X @endif</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" colspan="2" rowspan="2">@if($bulan==12) X @endif</td>
<td class="border-left" ></td>
<td></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($tahun_pajak,0,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($tahun_pajak,1,1)}}</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($tahun_pajak,2,1)}}</td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;">{{substr($tahun_pajak,3,1)}}</td>
<td></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>

<td class="border-left" ></td>
<td colspan="6"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-bottom-left" style="text-align:center;font-style: italic;" colspan="24">Beri tanda silang (x) pada kolom bulan, sesuai dengan pembayaran untuk masa yang berkenaan</td>
<td class="border-bottom-left-right" style="text-align:center;font-style: italic;" colspan="8">Diisi Tahun terutangnya Pajak</td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="6">Nomor Ketetapan</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" >:</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;">/</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;">/</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;">/</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;">/</td>
<td class="border-bottom-left" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td class="border-bottom-left-right" style="text-align:center;font-size:10pt; font-weight: bold;" ></td>
<td></td>
<td></td>
<td colspan="2"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-style: italic;" colspan="30">Diisi sesuai Nomor Ketetapan : STP, SKPKB, SKPKBT</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-bottom-left"></td>
<td class="border-bottom" colspan="30"></td>
<td class="border-right-bottom"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="6">Jumlah Pembayaran</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;">:</td>
<td style="text-align:left;font-size:10pt;" class="border-titik"  colspan="17">{{$jumlah}}</td>
<td style="font-style: italic;" colspan="6">Diisi dengan rupiah penuh</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="3">Terbilang</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" >:</td>
<td style="text-align:left;font-size:10pt; " class="border-titik" colspan="26">{{$terbilang1}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>

<td class="border-left"></td>
<td style="text-align:left;font-size:10pt;" class="border-titik" colspan="30">{{$terbilang2}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt;" class="border-titik" colspan="30">{{$terbilang3}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-bottom-left"></td>
<td class="border-bottom" colspan="30"></td>
<td class="border-right-bottom"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="14"></td>
<td></td>
<td class="border-left"></td>
<td colspan="14"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="14">Diterima oleh Kantor Penerima Pembayaran</td>
<td></td>
<td class="border-left"></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;" colspan="14">Wajib Pajak/ Penyetor</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="4">Tanggal</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;">:</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" class="border-titik" colspan="9"></td>
<td></td>
<td class="border-left"></td>
<td style="text-align:right;font-size:10pt;" class="border-titik" colspan="6">Jakarta</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;">,</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="2">Tanggal</td>
<td style="text-align:left;font-size:10pt;" class="border-titik"></td>
<td style="text-align:left;font-size:10pt;" class="border-titik" colspan="4">{{$nama_bulan}} {{$tahun_pajak}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:center;font-style: italic;" colspan="14">Cap dan tanda tangan</td>
<td></td>
<td class="border-left"></td>
<td style="text-align:center;font-style: italic;" colspan="14">Cap dan tanda tangan</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="14"></td>
<td></td>
<td class="border-left"></td>
<td colspan="14"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="14"></td>
<td></td>
<td class="border-left"></td>
<td colspan="14"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="14"></td>
<td></td>
<td class="border-left"></td>
<td colspan="14"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="14"></td>
<td></td>
<td class="border-left"></td>
<td colspan="14"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>

<td style="text-align:left;font-size:10pt; font-weight: bold;" colspan="4">Nama Jelas</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;">:</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;" class="border-titik" colspan="9"></td>

<td></td>
<td class="border-left"></td>
<td style="text-align:right;font-size:10pt; font-weight: bold;" colspan="6">Nama Jelas</td>
<td style="text-align:left;font-size:10pt; font-weight: bold;">:</td>
<td style="text-align:left;font-size:10pt;" class="border-titik" colspan="7">{{$nama_setor}}</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-bottom-left"></td>
<td class= "border-bottom" colspan="15"></td>
<td class="border-bottom-left"></td>
<td class= "border-bottom" colspan="14"></td>
<td class="border-right-bottom"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:center;font-size:10pt;"colspan="30"> Terima kasih Telah Membayar Pajak - Pajak Untuk Pembangunan Bangsa</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td style="text-align:center;font-size:10pt; font-weight: bold;" colspan="30">Ruang Validasi Kantor Penerima Pembayaran</td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>
<tr>
<td class="border-left"></td>
<td colspan="30"></td>
<td class="border-right"></td>
<td style="color:white">12</td>
</tr>

<tr>
<td class="border-bottom-left"></td>
<td class="border-bottom" colspan="30">F.2.0.32.01</td>
<td class="border-right-bottom"></td>
<td style="color:white">12</td>
</tr>


{{-- <tr >
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
<td width="15" style="color:white" class="border-top">12</td>
</tr> --}}
</tbody>
</table>

</body>
</html>



