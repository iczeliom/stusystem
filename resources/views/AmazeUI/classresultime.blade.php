@extends('layouts.amazeui')

@section('content')

<div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">首页</strong> / <small>选题结果时间</small></div>
      </div>
              @if($time == '[]')
              <ul class="am-list">
                  <li><a href="storeclass"><marquee loop=3>选题时间尚未设定。</marquee></a></li>
              </ul>
              @else
              <ul class="am-list">
                  <li><a href="storeclass"><marquee loop=3>选题结束时间{{$time->time}}</marquee></a></li>
                 
              </ul>
              @endif
      <div class="am-g">
        <div class="am-u-sm-6">
          <!-- Table -->

          <form action="classresultime" method="POST" class="am-form" data-am-validator>
           {!! csrf_field() !!}
            <p>
            <input type="text" name="time" class="am-form-field" placeholder="设置日期" data-am-datepicker readonly required />
            </p>
            <p><button class="am-btn am-btn-primary">提交</button></p>
          </form>
          </div>
        </div>


    </div>

    <footer class="admin-content-footer">
      <hr>
      <p class="am-padding-left">© 2016 Licensed under MIT license.</p>
    </footer>
  </div>
  @endsection