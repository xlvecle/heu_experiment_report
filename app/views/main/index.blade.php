@extends('main.layouts.default')
@section('main')
      		<div class="motto">
      			<h2 class="first_title">{{ Cache::get('motto_title') }}</h2>
      			<p>写自己的实验报告，让别人说去吧。（鲁迅）</p>
      			<p>实验报告是人类进步的阶梯。（高尔基）</p>
      		</div>
      		<div class="row">
      			@foreach ($subjects as $subject)
	      		<div class="col-md-4">
	      			<div class="panel panel-default">
	      				<div class="panel-heading">
	      					<h3>{{ $subject->title }}</h3>
	      				</div>
	      				<div class="panel-body">
	      					<div class="title">
	      						<p>{{ $subject->info }}</p>
	      					</div>
	      					<p><a href="{{ URL::route('show', $subject->title) }}" class="btn btn-success btn-raised">查看</a></p>
	      				</div>
	      			</div>
	      		</div>
      			@endforeach
      		</div>
			<hr>
@stop