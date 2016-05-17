@extends('layouts.app')

@section('content')
 <!-- Create Course Form... -->
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">创建课程</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/createcourse') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('coursename') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">课程名</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="coursename" value="{{ old('coursename') }}">

                                @if ($errors->has('coursename'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('coursename') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('coursemaster') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">担任讲师</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="coursemaster" value="{{ old('coursemaster') }}">

                                @if ($errors->has('coursemaster'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('coursemaster') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('coursenumber') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">课程数量</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="coursenumber" value="{{ old('coursenumber') }}">

                                @if ($errors->has('coursenumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('coursenumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('courseschool') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">课程学院</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="courseschool" value="{{ old('courseschool') }}">

                                @if ($errors->has('courseschool'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('courseschool') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>创建课程
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

   <!-- Current Courses -->
   <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">全部课程</div>
      <div class="panel-body">
        <p>简介.</p>
      </div>

      <!-- Table -->
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>课程名</th>
            <th>担任老师</th>
            <th>课程数量</th>
          </tr>
        </thead>
        <tbody>
          	@foreach( $output as $name)
          	<tr>
          	<td> {{ $name->id }}</td>
	    	<td> {{ $name->coursename }}</td>
	    	<td> {{ $name->coursemaster }}</td>
	    	<td> {{ $name->coursenumber }}</td>
	    	<td>
		        <form action="/createcourse/{{ $name->id }}" method="POST">
		        {!! csrf_field() !!}
		        <button class="btn btn-default">删除</button>
		        </form>
	   		 </td>
	    	</tr>
			@endforeach
        </tbody>
      </table>
    </div>
	
@endsection
