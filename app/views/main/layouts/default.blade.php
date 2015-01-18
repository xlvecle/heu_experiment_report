<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>test</title>
	@include('main.layouts.assets')
</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<div class="header">
				<ul class="nav nav-pills pull-right" role="tablist">
					<li role="presentation"><a href="#">Home</a></li>
					<li role="presentation"><a href="#">About</a></li>
					<li role="presentation"><a href="#">Contact</a></li>
				</ul>
				<h3 class="text-muted"><a href="{{ URL::route('index')}}">哈工程实验报告</a></h3>
			</div>
			<hr>
			@yield('main')
			@include('main.layouts.footer')

		</div>
	</div>
</body>
</html>