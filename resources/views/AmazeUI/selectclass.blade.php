@extends('layouts.amazeui')

@section('content')

<div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">首页</strong> / <small>选课结果</small></div>
      </div>

      <div class="am-g">
        <div class="am-u-sm-12">
          <table class="am-table am-table-bd am-table-striped admin-content-table">
            <thead>
            <tr>
              <th>ID</th><th>选修课程名</th><th>担任老师</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>1</td><td>选修课1</td><td><a href="#">选修老师1</a></td>
              
            </tr>
            <tr><td>2</td><td>选修课2</td><td><a href="#">选修老师2</a> </td>
              
            </tr>
           
            

           
            </tbody>
          </table>
        </div>
      </div>

    </div>

    <footer class="admin-content-footer">
      <hr>
      <p class="am-padding-left">© 2016 Licensed under MIT license.</p>
    </footer>
  </div>
  @endsection