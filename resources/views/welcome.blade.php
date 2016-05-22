@extends('layouts.app')

@section('content')
    <!-- particles.js container -->
    <div id="particles-js"></div>


    <div class="row" style=" width: 50%;  
                              height: 50%;  
                              overflow: auto;  
                              margin: auto;  
                              position: absolute;  
                              top: 0; left: 0; bottom: 0; right: 0;  ">
            <div class="panel panel-default">
                <div align="center" class="panel-heading">欢迎进入毕业设计选题系统!</div>
            </div>
    </div>

    <script src="{{ asset("/bower_components/particles.js/particles.js")}}"></script>
    <script src="{{ asset("/bower_components/particles.js/demo/js/app.js")}}"></script>

@endsection
