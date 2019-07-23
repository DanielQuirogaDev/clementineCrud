<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content=" Cambia tu Descripción" />
	<meta name="author" content="" />

	<title>Cambia Tu Título</title>
	<script src="{{ asset('js/jquery-1.10.2.min.js') }}"></script>

	<link rel="stylesheet" href="{{ asset('js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/font-icons/entypo/css/entypo.css') }}">
	<link rel="stylesheet" href="{{ asset('http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic') }}">
	<link rel="stylesheet" href="{{ asset('css/neon.css') }}">
	<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skins/white.css') }}">

	

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

</head>

<body class="page-body  page-fade">
	<div class="page-container">
		@include('includes.sidebar')
		@include('includes.header')
		@yield('content')
		@include('includes.footer')
	</div>
	<link rel="stylesheet" href="{{ asset('js/jvectormap/jquery-jvectormap-1.2.2.css') }}">

	<!-- Bottom Scripts -->
	<script src="{{ asset('js/gsap/main-gsap.js') }}"></script>
	<script src="{{ asset('js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/joinable.js') }}"></script>
	<script src="{{ asset('js/resizeable.js') }}"></script>
	<script src="{{ asset('js/neon-api.js') }}"></script>

	<script src="{{ asset('js/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
	<script src="{{ asset('js/jvectormap/jquery-jvectormap-europe-merc-en.js') }}"></script>
	<script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>
	<script src="{{ asset('js/raphael-min.js') }}"></script>
	<script src="{{ asset('js/morris.min.js') }}"></script>
	<script src="{{ asset('js/toastr.js') }}"></script>
	<script src="{{ asset('js/neon-chat.js') }}"></script>
	<script src="{{ asset('js/neon-custom.js') }}"></script>
	<script src="{{ asset('js/neon-demo.js') }}"></script>
	<script src="{{ asset('js/typeahead.min.js') }}"></script>

</body>

</html>
