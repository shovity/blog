<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('head.title')</title>

	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/app.css">

	<style type="text/css">
		@yield('head.css')
	</style>

</head>

<body>
	@include ('partials.navbar')

	@yield('body.content')

	@include ('partials.footer')

	<script src="/js/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	@yield('body.js')
</body>
</html>