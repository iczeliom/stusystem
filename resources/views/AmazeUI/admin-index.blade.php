@extends('layouts.amazeui')

@section('content')

<div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">首页</strong> / <small>常用</small></div>
      </div>

      <div class="am-g">
        <div class="am-u-sm-12">
            <!--首页公告 -->
            <ul class="am-list">
              <li><a href="storeclass"><marquee loop=3>请在截至日期前提交要参加的选修课。</marquee></a></li>
            </ul>
          
        </div>
      </div>

    </div>

    <footer class="admin-content-footer">
      <hr>
      <p class="am-padding-left">© 2016 Licensed under MIT license.</p>
    </footer>
  </div>

  @endsection