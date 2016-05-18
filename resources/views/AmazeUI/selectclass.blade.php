@extends('layouts.amazeui')

@section('content')

<div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">首页</strong> / <small>已选课</small></div>
      </div>

      <div class="am-g">
        <div class="am-u-sm-12">
              @if (Auth::user()->coursestatus == '')                
                <ul class="am-list">
                  <li><a href="storeclass"><marquee loop=3>该用户还没有参加选修课。</marquee></a></li>
                </ul>
              @endif
              @if (!Auth::user()->coursestatus == '' || Auth::user()->name == 'admin')  
          <table class="am-table am-table-bd am-table-striped admin-content-table">
            <thead>
            <tr>
              <th>ID</th><th>选修课程名</th><th>担任老师</th>
            </tr>
            </thead>
            <tbody>

            <tr><td>1</td><td>选修课1</td><td><a href="#">选修老师1</a></td>
          
            </tbody>
          </table>
        </div>
      </div>
          <button type="submit" class="am-btn am-btn-danger">
              <i class="fa fa-btn fa-user">重新选课</i>
          </button>
    </div>
             @endif
    <footer class="admin-content-footer">
      <hr>
      <p class="am-padding-left">© 2016 Licensed under MIT license.</p>
    </footer>
  </div>
  @endsection