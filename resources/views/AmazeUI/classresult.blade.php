@extends('layouts.amazeui')

@section('content')

<div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">首页</strong> / <small>选题结果</small></div>
      </div>
      <div class="am-g">
        <div class="am-u-sm-12">
          <!-- Table -->
                  <table class="am-table am-table-bd am-table-striped admin-content-table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>用户名</th>
                        <th>系统匹配选题结果</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($matching as $key => $name1)
                      <tr>
                        <td> </td>                       
                        <td>{{$name1}}</td>
                        <td>{{$key}}</td>                        
                       </tr>
                       @endforeach
                    </tbody>
                  </table>
          </div>
        </div>


         <div class="am-g">
        <div class="am-u-sm-12">
          <!-- Table -->
                  <table class="am-table am-table-bd am-table-striped admin-content-table am-table-compact">
                    <thead>
                      <tr>
                        <th>选题意向</th>
                        <th>用户名</th>
                        <input type="hidden" {{ $classoutput = App\Course::all() }} >
                       @foreach( $classoutput as $name)
                        <th>{{ $name->coursename }}</th>
                       @endforeach
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($favorites as $key => $name2)
                      <tr>
                        <td> </td>                       
                        <td>{{$key}}</td>
                          @foreach($name2 as $name3 )
                        <td>
                            @if($name3 == true)
                              <span class="am-icon-check admin-icon-yellow"></span>
                              @else
                              <span class="am-icon-close"></span>                              
                            @endif
                        </td>
                          @endforeach                        
                       </tr>
                       @endforeach
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