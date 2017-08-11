<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tagihan 2017</title>

    <link href="{{ asset('css/font-awesome.min.css') }}" rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.dataTables.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dataTables.bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/selectize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/selectize.bootstrap3.css') }}" rel="stylesheet">
	

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

{{--                 <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    SPBY Kuitansi
                </a> --}}
            </div>

            {{-- <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
				
				@role('admin')
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/home') }}">Dashboard</a></li>	                   
					<li><a href="{{ route('admin.bendaharas.index') }}">Bendahara</a></li>
					<li><a href="{{ route('admin.jenistagihans.index') }}">Jenis Tagihan</a></li>
					<li><a href="{{ route('admin.kodepembebanans.index') }}">Kode Pembebanan</a></li>
					<li><a href="{{ route('admin.penerimahasils.index') }}">Penerima Hasil</a></li>
					<li><a href="{{ route('admin.ppks.index') }}">PPK</a></li>
                </ul>
				
				<ul class="nav navbar-nav">
                    						
					<li><a href="{{ route('admin.penerimauangs.index')}}">Penerima Uang</a></li>
					<li><a href="{{ route('admin.rekanans.index') }}">Rekanan</a></li>
					<li><a href="{{ route('admin.tagihans.index') }}">Tagihan</a></li>               				
			    </ul>
				@endrole
				
				@role('member')
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Dashboard</a></li>							
					<li><a href="{{ route('member.penerimauangs.index')}}">Penerima Uang</a></li>
					<li><a href="{{ route('member.rekanans.index') }}">Rekanan</a></li>
					<li><a href="{{ route('member.tagihans.index') }}">Tagihan</a></li>               				
			    </ul>
				@endrole
				
						

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Daftar</a></li>
                    @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav> --}}
    @include('layouts._flash')

    @yield('content')

    <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/selectize.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/jquery.price_format.2.0.min.js') }}"></script>
	
	
    @yield('scripts')

</body>
</html>
