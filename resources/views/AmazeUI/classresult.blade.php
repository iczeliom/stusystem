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
            <form class="am-form am-form-horizontal" role="form" method="POST" action="createuserresultsave">
            {!! csrf_field() !!}
                  <table class="am-table am-table-bd am-table-striped admin-content-table" >
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>用户名</th>
                        <th>系统匹配选题结果</th>
                      </tr>
                    </thead>
                    <tbody id="newtable">
                      @foreach($matching as $key => $name1)
                      <tr>
                        <td> </td>                       
                        <td>{{$name1}}</td>
                        
                        <td>{{$key}}</td>                        
                       
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  @if (Auth::user()->name == '123admin') 
                  <button type="submit" class="am-btn am-btn-danger">
                      <i class="fa fa-btn fa-user">保存结果</i>
                  </button>
                  @endif
              </form>
          </div>
        </div>

        @if (Auth::user()->name == 'admin') 
          <div class="am-g">
           <div class="am-u-sm-4">
                      <div class="am-panel am-panel-primary">
                        <div class="am-panel-hd">
                        <h3 class="am-panel-title">手动添加用户选题结果</h3>
                        </div>
                      
                      <div class="am-panel-bd">
                      <!-- <form class="am-form am-form-horizontal" role="form" method="POST" action="createuserresult">
                                    {!! csrf_field() !!} -->
                       <div class="am-input-group">
                          <label class="am-input-group-label">姓名</label>
                            <input type="text" class="form-control" name="name"  required="required">
                        </div>
                       <div class="am-input-group">
                          <label class="am-input-group-label">选题</label>
                            <input type="text" class="form-control" name="course"  required="required">
                      </div>
                                        
                        <button  class="am-btn am-btn-danger" id="btn2">
                          <i class="fa fa-btn fa-user">添加</i>
                        </button>
                        <!-- </form> -->
                      </div>
                      </div>
              </div>
            </div>
          @endif


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

  <script>
    $(document).ready(function(){

      $("#btn2").click(function(){
        alert('ok');
  
        $("#newtable").append("<tr>Appended item</tr>");
      });
    });
  </script>
  @endsection