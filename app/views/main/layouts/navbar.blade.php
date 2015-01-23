					<li role="presentation"><a href="{{ URL::to('/') }}">Home</a></li>
					<li role="presentation"><a href="{{ URL::to('/about') }}">About</a></li>
					@if (Auth::user())
					<li role="presentation"><a href="{{ URL::to('admin') }}">Admin</a></li>
					<li role="presentation"><a href="{{ URL::route('admin.logout') }}">Logout</a></li>
					@endif