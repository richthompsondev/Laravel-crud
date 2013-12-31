<!DOCTYPE html>
<html>

	<head>
		<!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <!-- Bootstrap CSS -->
	    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
		<title>CRUD: CReate, Update, Delete Laravel</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body class="bg-light">
		<header>
				
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
				<div class="container">
				  <a class="navbar-brand" href="/">CRUD</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item {{ Request::path() === '/' ? 'active' : '' }}">
				        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item {{ Request::path() === 'courses/create' ? 'active' : '' }}">
				        <a class="nav-link" href="/courses/create">Create Course</a>
				      </li>
				  </div>
				</div>
			</nav>

		</header>
		<main>
			
			<div class="container">
				@yield('content')
			</div>

		</main>

		<footer>
			
		</footer>
		<!-- Optional JavaScript -->
	    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	    
	    <script src="{{ asset('/js/popper.min.js') }}"></script>
	    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
	  </body>

	</body>
</html>
