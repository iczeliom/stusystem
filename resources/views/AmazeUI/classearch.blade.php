@extends('layouts.amazeui')

@section('content')
<div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">首页</strong> / <small>选题查询</small></div>
      </div>

      <div class="am-g">
        <div class="am-u-sm-6">

             <!-- Create Course Form... -->
                        <div class="am-panel am-panel-primary">
                            <div class="am-panel-hd">搜索课题</div>
                            <div class="am-panel-bd">
                                <form class="am-form am-form-horizontal" role="form" method="POST" action="classearch">
                                    {!! csrf_field() !!}

                                    <div class="am-form-group{{ $errors->has('coursename') ? ' has-error' : '' }}">
                                        <label class="am-u-sm-2 am-form-label">课题名称</label>

                                        <div class="am-u-sm-10">
                                            <input type="text" class="form-control" name="coursename" value="{{ old('coursename') }}">

                                            @if ($errors->has('coursename'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('coursename') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="am-form-group">
                                        <div class="am-u-sm-10 am-u-sm-offset-2">
                                            <button type="submit" class="am-btn am-btn-primary">
                                                <i class="fa fa-btn fa-user"></i>搜索
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
                        <th>ID</th>
                        <th>课题名称</th>
                        <th>导师</th>
                        <th>课题简介</th>
                      </tr>
                    </thead>
                    <tbody>
                          @if($searchcourse == '未找到')
                          <tr><td>未找到相关课题</td></tr>
                          @endif

                        @if(!$searchcourse == null and !$searchcourse == '未找到' )
                    <tr>
                        <td> {{ $searchcourse->id }}</td>
                        <td> {{ $searchcourse->coursename }}</td>
                        <td> {{ $searchcourse->coursemaster }}</td>
                        <td><span class="am-badge am-badge-success"> {{ $searchcourse->coursenumber }}</span></td>
                    </tr>
                        @endif
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