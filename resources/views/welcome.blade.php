@extends('layouts.app')

@section('content')
    <!-- particles.js container -->
    <div id="particles-js"></div>

<div class="container">
    <div class="row" style="position: absolute;top: 100px;width: 900px;">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Stusystem.
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="{{ asset("/bower_components/particles.js/particles.js")}}"></script>
    <script src="{{ asset("/bower_components/particles.js/demo/js/app.js")}}"></script>

@endsection
