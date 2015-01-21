@extends('main.layouts.default')

@section('main')

{{ Form::open(array('route'=>'admin.exp.store')) }}
  <div class="control-group">
    {{ Form::label('name','实验名称') }}
    <div class="controls">
      {{ Form::text('name')}}
    </div>
  </div>

  <div class="control-group">
    {{ Form::label('info','描述信息') }}
    <div class="controls">
      {{ Form::textarea('info','',array('rows' => '10','class' => 'input-block-level'))}} 
    </div>
  </div>

  <div class="control-group">
    {{ Form::label('subject','学科') }}
    <div class="controls">
      {{ Form::text('subject')}}
    </div>
  </div>

  <div class="control-group">
    <div class="controls">
      {{ Form::submit('保存',array('class' => 'btn btn-success btn-save')) }}
      <a href="{{ URL::to('admin') }}" class="btn">取消</a>
    </div>
  </div>
{{ Form::close() }}

@stop