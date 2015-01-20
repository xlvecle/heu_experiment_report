@extends('main.layouts.default')
@section('main')
	<div class="well">
		{{ $subject->title }}
		<hr>
		{{ $subject->info  }}
	</div>
	<div class="well">
		@foreach ($exps as $exp)
		{{ $exp->name }}
		<hr>
		{{ $exp->info  }}
		<br>
		<p><a href="{{ URL::action('PageController@show', ['大物实验报告', '测试']) }}">{{ $exp->name }}</a></p>
		@endforeach

	</div>

@stop