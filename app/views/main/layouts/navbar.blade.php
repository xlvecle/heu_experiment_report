					<li role="presentation"><a href="#">Home</a></li>
					<li role="presentation"><a href="#">About</a></li>
					<li role="presentation"><a href="#">Contact</a></li>
					@if (Auth::user())
					<li role="presentation"><a href="{{ URL::route('admin.logout') }}">Logout</a></li>
					@endif