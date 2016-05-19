@extends('layouts.amazeui')

@section('content')

<div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">首页</strong> / <small>选课结果</small></div>
      </div>

      <div class="am-g">
        <div class="am-u-sm-12">
           <div class="am-panel am-panel-primary">
                  <!-- Table -->
                  <table class="am-table am-table-bd am-table-striped admin-content-table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>选题用户</th>
                        <th>选题名</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach( $output as $name)
                      <tr>
                        <td>{{$name -> id }}</td>
                        <td>{{$name-> username}}</td>
                        <td> {{ $name->usercourse1 }}</td>
                     </tr>
                        @endforeach
                    </tbody>
                  </table>
              </div>
        </div>
      </div>

    </div>

    <footer class="admin-content-footer">
      <hr>
      <p class="am-padding-left">© 2016 Licensed under MIT license.</p>
    </footer>
  </div>
  @endsection