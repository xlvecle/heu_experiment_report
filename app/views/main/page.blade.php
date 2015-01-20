@extends('main.layouts.default')
@section('main')
	<div class="well">
		@foreach ($exps as $exp)
		{{ $exp->name }}
		<hr>
		{{ $exp->info  }}
		<img src="http://heufoto.sf.net/{{ $exp->dir }}/{{ $exp->dir }}%20(4).jpg" alt="">
		@endforeach
	</div>
	
@stop