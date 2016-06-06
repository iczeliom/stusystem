@extends('layouts.amazeui')

@section('content')

<div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">首页</strong> / <small>已选选题</small></div>
      </div>

      <div class="am-g">
        <div class="am-u-sm-6">
              @if($output == '[]')
              <ul class="am-list">
                  <li><a href="storeclass"><marquee loop=3>该用户还没有参加选题。</marquee></a></li>
                </ul>
              @endif
<!--               参加选修计数 -->
             
              @if (Auth::user()->status == '学生' || Auth::user()->name == 'admin')  
              <div class="am-panel am-panel-primary">
                  <!-- Table -->
                  <table class="am-table am-table-bd am-table-striped admin-content-table">
                    <thead>
                      <tr>
                        
                        <th>导师</th>
                        <th>课题名称</th>
                      </tr>
                    </thead>
                    <tbody>
                    <input type="hidden" >
                        @foreach( $output  as $name)
                      <tr>
                        
                        <td>{{$name ->usermaster}}</td>
                        <td> {{ $name->usercourse1 }}</td>
                     </tr>
                        @endforeach
                    </tbody>
                  </table>
              </div>

        </div>
      </div>
          <!-- <button type="submit" class="am-btn am-btn-danger">
              <i class="fa fa-btn fa-user">重新选题</i>
          </button> -->
    </div>
             @endif


    <footer class="admin-content-footer">
      <hr>
      <p class="am-padding-left">© 2016 Licensed under MIT license.</p>
      <p class="am-padding-left">如有疑问，请联系管理员：admin@admin.com</p>
    </footer>
  </div>
  @endsection