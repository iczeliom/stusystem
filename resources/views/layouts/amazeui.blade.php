<!doctype html>
<html class="no-js fixed-layout">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>毕业设计选题系统后台管理</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->

<header class="am-topbar am-topbar-inverse admin-header"  data-am-scrollspy="{animation: 'slide-top', repeat: false}">
  <div class="am-topbar-brand">
    <strong>毕业设计选题系统</strong> <small>后台管理</small>
  </div>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

    <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
      <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;" data-am-scrollspy="{animation: 'slide-bottom', repeat: false, delay: 300}">
          <span class="am-icon-users"></span> 姓名:{{ Auth::user()->name }}  <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li><a href="userinfo"><span class="am-icon-user"></span> 资料</a></li>
          <li><a href="{{ url('/logout') }}"><span class="am-icon-power-off"></span> 退出</a></li>
        </ul>
      </li>
    </ul>
  </div>
</header>

<div class="am-cf admin-main">
  <!-- sidebar start -->
  <div class="admin-sidebar am-offcanvas" id="admin-offcanvas" data-am-scrollspy="{animation: 'slide-left', repeat: false}">
    <div class="am-offcanvas-bar admin-offcanvas-bar">
      <ul class="am-list admin-sidebar-list">
        <li data-am-scrollspy="{animation: 'slide-right', repeat: false, delay: 300}"><a href="admin"><span class="am-icon-home"></span> 首页</a></li>
        <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}" data-am-scrollspy="{animation: 'slide-right', repeat: false, delay: 350}"><span class="am-icon-file"></span> 导航模块 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
            <li data-am-scrollspy="{animation: 'slide-right', repeat: false, delay: 400}"><a href="userinfo" class="am-cf"><span class="am-icon-th-large"></span> 个人资料<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
<!--             判断用户身份 -->
              @if (Auth::user()->status == '学生' || Auth::user()->name == 'admin')
            <li data-am-scrollspy="{animation: 'slide-right', repeat: false, delay: 450}"><a href="storeclass"><span class="am-icon-hand-pointer-o"></span> 参加选题</a></li>
            <li data-am-scrollspy="{animation: 'slide-right', repeat: false, delay: 500}"><a href="selectclass"><span class="am-icon-hand-paper-o"></span> 已选选题</a></li>
            <li data-am-scrollspy="{animation: 'slide-right', repeat: false, delay: 550}"><a href="classresult"><span class="am-icon-hand-peace-o"></span> 选题结果</a></li>
              @endif
<!--             判断用户 -->
              @if (Auth::user()->status == '老师' || Auth::user()->name == 'admin')
            <li data-am-scrollspy="{animation: 'slide-right', repeat: false, delay: 600}"><a href="selectclasses"><span class="am-icon-th"></span>选题情况</a></li>
              @endif
          </ul>
        </li>
          <!--         判断用户 -->
          @if (Auth::user()->status == '老师' || Auth::user()->name == 'admin')
        <li data-am-scrollspy="{animation: 'slide-right', repeat: false, delay: 650}"><a href="createclass"><span class="am-icon-bars"></span> 创建选题</a></li>
          @endif
        <li data-am-scrollspy="{animation: 'slide-right', repeat: false, delay: 700}"><a href="classearch"><span class="am-icon-search"></span> 选题查询</a></li>
          @if (Auth::user()->status == '学生')          
        <li data-am-scrollspy="{animation: 'slide-right', repeat: false, delay: 750}"><a href="mastersearch"><span class="am-icon-search-plus"></span> 教师查询</a></li>
          @endif
          @if (Auth::user()->name == 'admin')          
        <li data-am-scrollspy="{animation: 'slide-right', repeat: false, delay: 800}"><a href="classresultime"><span class="am-icon-calendar"></span> 设置选题时间</a></li>
          @endif
        <li data-am-scrollspy="{animation: 'slide-right', repeat: false, delay: 850}"><a href="{{ url('/logout') }}"><span class="am-icon-sign-out"></span> 注销</a></li>
      </ul>

    </div>
  </div>
  <!-- sidebar end -->

  <!-- content start -->
  
    @yield('content')
  <!-- content end -->

</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="assets/js/amazeui.min.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>
