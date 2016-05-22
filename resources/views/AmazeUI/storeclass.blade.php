@extends('layouts.amazeui')

@section('content')

<div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">首页</strong> / <small>参加选题</small></div>
      </div>

      <div class="am-g">
        <div class="am-u-sm-12">
        @if($output == '[]')
        <h1>当前没有选题可供选择</h1>
        @endif
          <form name="form" class="am-form am-form-horizontal" role="form" method="POST" action="storeclass">
                                    {!! csrf_field() !!}
          <input type="hidden" value="{{ Auth::user()->name }}" name="username">
          <table class="am-table am-table-bd am-table-striped admin-content-table">
            <thead>
            <tr>
              <th>ID</th><th>课题名称</th><th>导师</th><th>课题简介</th>
            </tr>
            </thead>
            <tbody>
            <!--   循环输出课 -->
            @foreach( $output as $name)
                      <tr>
                        <td><input type="radio" name="checkbox" value="{{ $name->coursename }}"></td>
                        <td> {{ $name->coursename }}</td>
                        <td> {{ $name->coursemaster }}</td>
                        <td><span class="am-badge am-badge-success"> {{ $name->coursenumber }}</span></td>
                     </tr>
            @endforeach

            </tbody>
          </table>
              @if (Auth::user()->coursestatus == '')                
              <button type="submit" class="am-btn am-btn-primary am-btn-block">
                  <i class="fa fa-btn fa-user">参加</i>
              </button>
              @endif
              @if (!Auth::user()->coursestatus || Auth::user()->name == 'admin')
              <button type="submit" class="am-btn am-btn-danger am-btn-block"  disabled="disabled">
              参加
              </button>
              @endif
           </form>
      <!--  am-u-sm-12 --> 
        </div>
        <!-- am-g -->
      </div>

    </div>

    <footer class="admin-content-footer">
      <hr>
      <p class="am-padding-left">© 2016 Licensed under MIT license.</p>
    </footer>
  </div>
  @endsection