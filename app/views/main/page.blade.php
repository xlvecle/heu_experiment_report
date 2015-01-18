@extends('main.layouts.default')
@section('main')
	<div class="well">
		@foreach ($subject as $test)
		{{ $test->title }}
		<hr>
		{{ $test->info  }}
		@endforeach
	</div>
	
@stop