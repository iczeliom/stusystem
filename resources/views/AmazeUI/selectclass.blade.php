@extends('layouts.amazeui')

@section('content')

<div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">首页</strong> / <small>已选课</small></div>
      </div>

      <div class="am-g">
        <div class="am-u-sm-6">
              @if (Auth::user()->coursestatus == '')                
                <ul class="am-list">
                  <li><a href="storeclass"><marquee loop=3>该用户还没有参加选修课。</marquee></a></li>
                </ul>
              @endif
              @if (!Auth::user()->coursestatus == '' || Auth::user()->name == 'admin')  
              <div class="am-panel am-panel-primary">
                  <!-- Table -->
                  <table class="am-table am-table-bd am-table-striped admin-content-table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>课程名</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach( $output as $name)
                      <tr>
                        <td>{{$name -> id }}</td>
                        <td> {{ $name->usercourse1 }}</td>
                     </tr>
                        @endforeach
                    </tbody>
                  </table>
              </div>

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