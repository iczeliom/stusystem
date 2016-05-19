@extends('layouts.amazeui')

@section('content')
<div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">首页</strong> / <small>常用</small></div>
      </div>

      <div class="am-g">
        <div class="am-u-sm-3">
          <div class="am-panel am-panel-primary">
                <div class="am-panel-hd">
                  <h3 class="am-panel-title">个人资料</h3>
                </div>
                <div class="am-panel-bd">
                  <p>姓名:{{ Auth::user()->name }} </p>
                  <p>性别：{{ Auth::user()->sex }} </p>
                  <p>学(工)号：{{ Auth::user()->personid }}</p>
                  <p>邮箱：{{ Auth::user()->email }}</p> 
                  <p>身份：{{ Auth::user()->status }} </p>
                  <p>学院：{{ Auth::user()->school }} </p>   
                  <p>已选选修课：{{ Auth::user()->coursestatus }}</p>               
                  <button type="submit" class="am-btn am-btn-danger">
                    <i class="fa fa-btn fa-user">修改个人信息</i>
                  </button>
                </div>
          </div>
        </div>

        <div class="am-u-sm-3 am-u-end">
          <div class="am-panel am-panel-primary">
                <div class="am-panel-hd">
                  <h3 class="am-panel-title">个人资料</h3>
                </div>
                <div class="am-panel-bd">
                  <p>姓名:{{ Auth::user()->name }} </p>
                  <p>性别：{{ Auth::user()->sex }} </p>
                  <p>学(工)号：{{ Auth::user()->personid }}</p>
                  <p>邮箱：{{ Auth::user()->email }}</p> 
                  <p>身份：{{ Auth::user()->status }} </p>
                  <p>学院：{{ Auth::user()->school }} </p>   
                  <p>已选选修课：{{ Auth::user()->coursestatus }}</p>               
                  <button type="submit" class="am-btn am-btn-danger">
                    <i class="fa fa-btn fa-user">修改个人信息</i>
                  </button>
                </div>
          </div>
        </div>

      </div>


<!-- admin-content-body-->    
  </div>
<!-- admin-content -->
</div>

    <footer class="admin-content-footer">
      <hr>
      <p class="am-padding-left">© 2016 Licensed under MIT license.</p>
    </footer>
  </div>

  @endsection