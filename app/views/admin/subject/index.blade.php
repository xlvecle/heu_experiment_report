@extends('main.layouts.default')

@section('main')

<a href="{{ URL::action('SubjectController@create') }}" class="btn btn-success">新建</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>最后修改时间</th>
            <th><i class="icon-cog"></i></th>
        </tr>
    </thead>
@foreach ($subjects as $subject)
	<tr class="">
		<td>{{ $subject->title }}</td>
		<td>{{ $subject->updated_at }}</td>
		<td>
			<a href="" class="btn btn-success btn-mini pull-left">编辑</a>
            <button type="submit" href="" class="btn btn-danger btn-mini">删除</button>
		</td>
	</tr>
@endforeach
</table>

@stop