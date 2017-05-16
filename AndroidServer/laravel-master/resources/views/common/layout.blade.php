<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>在线宠物医院学习系统 @yield('title')</title>

    <link rel="stylesheet" href="{{asset('static/bootstrap/css/bootstrap.min.css')}}">
   {{--@include("common.theme_css")--}}


@section('style')
    @show
</head>
<body>

<!-- 头部 -->
@section('header')
    <div class="jumbotron">
        <div class="container">
            <h2>在线宠物医院学习系统</h2>

            <p> - V1.0</p>
        </div>
    </div>
@show

<!-- 中间内容区局 -->
<div class="container body">
    <div class="row">

        <!-- 左侧菜单区域   -->
        <div class="col-md-2  col-md-push-1">
            @section('leftmenu')
                <div class="list-group">
                    <a href="{{url('myuser/index')}}" class="list-group-item
{{Request::getPathInfo() == '/myuser/index' ? 'active' : ''}}">用户列表</a>
                    <a href="{{url('myuser/create')}}" class="list-group-item
{{Request::getPathInfo() == '/myuser/create' ? 'active' : ''}}">新增用户</a>
                </div>
            @show
        </div>

        <!-- 右侧内容区域 -->
        <div class="col-md-7 col-md-push-1">


        @yield('content')
        <!-- 自定义内容区域 -->


            <!-- 分页  -->


        </div>
    </div>
</div>


@section('footer')
    <!-- 尾部 -->
    <div class="jumbotron" style="margin:0;">
        <div class="container">
            <span>  @2017 ECNU</span>
        </div>
    </div>
@show


<!-- jQuery 文件 -->
<script src="{{asset('static/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap JavaScript 文件 -->
<script src="{{asset('static/bootstrap/js/bootstrap.min.js')}}"></script>
{{--@include("common.theme_js")--}}


@section('javascript')
@show
</body>
</html>