            @extends('main.layouts.default')

            @section('main')
            <div class="config">
                <a href="{{ URL::to('admin/subject') }}">学科管理</a>
                <a href="{{ URL::to('admin/exp') }}">实验管理</a>
            </div>
            {{ Form::open(array('route', 'admin.config.store')) }}
                <div class="row">
                    <div class="span3">
                        <div class="control-group">
                            {{ Form::label('site_title', '站点title：') }}
                            <div class="controls">
                                {{ Form::text('site_title', Cache::get('site_title')) }}
                            </div>
                        </div>
                    </div>
                    <div class="span3">
                        <div class="control-group">
                            {{ Form::label('motto_title', 'motto_title：')}}
                            <div class="controls">
                                {{ Form::text('motto_title', Cache::get('motto_title')) }}
                            </div>
                        </div>
                    </div>
                </div>
            {{ Form::submit('确定', array('class'=>'btn btn-success')) }}
            {{ Form::close()}}

            @stop