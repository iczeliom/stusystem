@extends('layouts.amazeui')

@section('content')
<div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">首页</strong> / <small>常用</small></div>
      </div>

      <div class="am-g">
        <div class="am-u-sm-6">

             <!-- Create Course Form... -->
                        <div class="am-panel am-panel-primary">
                            <div class="am-panel-hd">创建课程</div>
                            <div class="am-panel-bd">
                                <form class="am-form am-form-horizontal" role="form" method="POST" action="createclass">
                                    {!! csrf_field() !!}

                                    <div class="am-form-group{{ $errors->has('coursename') ? ' has-error' : '' }}">
                                        <label class="am-u-sm-2 am-form-label">课程名</label>

                                        <div class="am-u-sm-10">
                                            <input type="text" class="form-control" name="coursename" value="{{ old('coursename') }}" required="required">

                                            @if ($errors->has('coursename'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('coursename') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="am-form-group{{ $errors->has('coursemaster') ? ' has-error' : '' }}">
                                        <label class="am-u-sm-2 am-form-label">担任讲师</label>

                                        <div class="am-u-sm-10">
                                            <input type="text" class="form-control" name="coursemaster" value="{{ old('coursemaster') }}" required="required">

                                            @if ($errors->has('coursemaster'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('coursemaster') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="am-form-group{{ $errors->has('coursenumber') ? ' has-error' : '' }}">
                                        <label class="am-u-sm-2 am-form-label">课程数量</label>

                                        <div class="am-u-sm-10">
                                            <input type="text" class="form-control" name="coursenumber" value="{{ old('coursenumber') }}" required="required">

                                            @if ($errors->has('coursenumber'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('coursenumber') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                     <div class="am-form-group{{ $errors->has('courseschool') ? ' has-error' : '' }}">
                                        <label class="am-u-sm-2 am-form-label">课程学院</label>

                                        <div class="am-u-sm-10">
                                            <select name="courseschool">
                                                  <option>理学院 School of Sciences</option>
                                                  <option>材料与纺织学院 Faculty of Materials andTextiles</option>
                                                  <option>服装学院 School of FashionDesign Engineering</option>
                                                  <option>信息学院 Faculty of Informatics</option>
                                                  <option>外国语学院 School of Foreign LanguagesStudies</option>
                                            </select>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="am-form-group">
                                        <div class="am-u-sm-10 am-u-sm-offset-2">
                                            <button type="submit" class="am-btn am-btn-primary">
                                                <i class="fa fa-btn fa-user">创建课程</i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

               <!-- Current Courses -->
               <div class="am-panel am-panel-primary">

                  <!-- Table -->
                  <table class="am-table am-table-bd am-table-striped admin-content-table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>课程名</th>
                        <th>担任老师</th>
                        <th>课程数量</th>
                        <th>管理</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach( $output as $name)
                      <tr>
                        <td> {{ $name->id }}</td>
                        <td> {{ $name->coursename }}</td>
                        <td> {{ $name->coursemaster }}</td>
                        <td><span class="am-badge am-badge-success"> {{ $name->coursenumber }}</span></td>
                        <td>
                            <form action="/classearch/{{ $name->id }}" method="POST">
                            {!! csrf_field() !!}
                            <button class="am-btn am-btn-default am-round am-btn-danger">删除</button>
                            </form>
                        </td>
                     </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>

        </div>
      </div>


<!-- admin-content-body-->    
  </div>
<!-- admin-content -->
</div>

    <footer class="admin-content-footer">
      <hr>
      <p class="am-padding-left">© 2016 Licensed under MIT license.</p>
    </footer>
  </div>

  @endsection