@extends('layouts.amazeui')

@section('content')

<div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">首页</strong> / <small>参加选课</small></div>
      </div>

      <div class="am-g">
        <div class="am-u-sm-12">

          <form class="am-form am-form-horizontal" role="form" method="POST" action="storeclass">
                                    {!! csrf_field() !!}
          <table class="am-table am-table-bd am-table-striped admin-content-table">
            <thead>
            <tr>
              <th>ID</th><th>选修课程名</th><th>担任老师</th><th>选修课数量</th>
            </tr>
            </thead>
            <tbody>
            <tr><td><input type="checkbox" name="checkbox1" value="选修课1"></td><td>选修课1</td><td><a href="#">选修老师1</a></td> <td><span class="am-badge am-badge-success">+20</span></td>
            </tr>
            <tr><td><input type="checkbox" name="checkbox2" value="选修课2"></td><td>选修课2</td><td><a href="#">选修老师2</a> </td><td><span class="am-badge am-badge-danger">+2</span></td>
            </tr>
    
            </tbody>
          </table>
                
              <button type="submit" class="am-btn am-btn-primary">
                  <i class="fa fa-btn fa-user">参加</i>
              </button>

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