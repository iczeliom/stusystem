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
                        <th>参加选题</th>
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
                        <th>选题1</th>
                        <th>选题2</th>
                        <th>选题3</th>
                        <th>选题4</th>
                        <th>选题5</th>
                        <th>选题6</th>
                        <th>选题7</th>
                        <th>选题8</th>
                        <th>选题9</th>
                        <th>选题10</th>
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