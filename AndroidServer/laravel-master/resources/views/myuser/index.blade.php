@extends('common.layout')

@section('content')
    @include('common.message')
    <div class="panel panel-default">
        <div class="panel-heading">用户列表</div>
        <table class="table table-striped table-hover table-responsive">
            <thead>
            <tr>
                <th>ID</th>
                <th>姓名</th>
                <th>年龄</th>
                <th>性别</th>
                <th>邮箱</th>
                <th width="120">操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($myusers as $myuser)
                <tr>
                    <th scope="row">{{$myuser->id}}</th>
                    <td>{{$myuser->name}}</td>
                    <td>{{$myuser->age}}</td>
                    <td>{{$myuser->mapSex($myuser->sex)}}</td>
                    <td>{{$myuser->email}}</td>
                    <td>
                        <a href="{{url('myuser/detail',["id" => $myuser->id])}}">详情</a>
                        <a href="{{url('myuser/update',["id" => $myuser->id])}}">修改</a>
                        <a href="{{url('myuser/delete',["id" => $myuser->id])}}"
                           onclick="if (confirm('你确定要删除吗') == false) return false">删除</a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

    <div>
        <div class="pull-right">
            {{$myusers->render()}}
        </div>
        {{--<ul class="pagination pull-right">--}}
        {{--<li>--}}
        {{--<a href="#" aria-label="Previous">--}}
        {{--<span aria-hidden="true">&laquo;</span>--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--<li class="active"><a href="#">1</a></li>--}}
        {{--<li><a href="#">2</a></li>--}}
        {{--<li><a href="#">3</a></li>--}}
        {{--<li><a href="#">4</a></li>--}}
        {{--<li><a href="#">5</a></li>--}}
        {{--<li>--}}
        {{--<a href="#" aria-label="Next">--}}
        {{--<span aria-hidden="true">&raquo;</span>--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--</ul>--}}
    </div>
@stop
