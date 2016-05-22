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
              <li><a href="storeclass"><marquee loop=3>请在截至日期前提交要选择的课题。</marquee></a></li>
            </ul>
          
        </div>
      </div>

    </div>

    <footer class="admin-content-footer">
      <hr>
      <p class="am-padding-left">© 2016 Licensed under MIT license.</p>
      <p class="am-padding-left">如有疑问，请联系管理员：admin@admin.com</p>
    </footer>
  </div>

  @endsection