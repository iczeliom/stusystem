@extends('layouts.amazeui')

@section('content')

<div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding">
        <div class="am-fl am-cf" data-am-scrollspy="{animation:'slide-right', repeat: false}"><strong class="am-text-primary am-text-lg">首页</strong> / <small>常用</small></div>
      </div>

      <div class="am-g">
        <div class="am-u-sm-12" data-am-scrollspy="{animation:'scale-up', repeat: false}">
            <!--首页公告 -->
              @if($time == null)
              <ul class="am-list">
                  <li><a href="storeclass"><marquee loop=3>参加选题开放中。</marquee></a></li>
              </ul>
              @else
              <ul class="am-list">
                  <li><a href="storeclass"><marquee loop=3>选修结束时间{{$time->time}}，请在截至日期前提交要选择的选题。</marquee></a></li>
              </ul>
              @endif

        </div>
      </div>

      <div class="am-g">
        <div class="am-u-sm-4">
        <section class="am-panel am-panel-default am-panel-primary" data-am-scrollspy="{animation:'slide-bottom', repeat: false}">
          <header class="am-panel-hd">
            <h3 class="am-panel-title">当前时间</h3>
          </header>
          <div class="am-panel-bd">
            <span class="clock" style="text-align:center;"></span>
          </div>
        </section>
        </div>
      </div>


    </div>

    <footer class="admin-content-footer">
      <hr>
      <p class="am-padding-left">© 2016 Licensed under MIT license.</p>
      <p class="am-padding-left">如有疑问，请联系管理员：admin@admin.com</p>
    </footer>
  </div>


  <script src="assets/js/index2.js"></script>     
  @endsection