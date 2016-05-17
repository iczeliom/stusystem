@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">后台</div>

                <div class="panel-body">
                    登陆成功!
                </div>
            </div>
        </div>
    </div>
    <div class="list-group" style="width: 300px;margin: 0 auto;">
      <a href="#" class="list-group-item active">
        姓名:{{ Auth::user()->name }} 
      </a>
      <a href="#" class="list-group-item">性别：{{ Auth::user()->sex }} </a>
      <a href="#" class="list-group-item">学(工)号：{{ Auth::user()->personid }} </a>
      <a href="#" class="list-group-item">邮箱：{{ Auth::user()->email }} </a>
      <a href="#" class="list-group-item">身份：{{ Auth::user()->status }} </a>
      <a href="#" class="list-group-item active">
      修改个人信息
      </a>
    </div>
</div>


@endsection
