@extends('common.stuff_layout')
@section('content')
    @include('common.message')
    <div class="panel panel-default">
        <div class="panel-heading">医院职工列表</div>
        <table class="table table-striped table-hover table-responsive">
            <thead>
            <tr>
                <th>ID</th>
                <th>姓名</th>
                <th>年龄</th>
                <th>性别</th>
                <th>工作</th>
                <th width="120">操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($stuffs as $stuff)
                <tr>
                    <th scope="row">{{$stuff->id}}</th>
                    <td>{{$stuff->name}}</td>
                    <td>{{$stuff->age}}</td>
                    <td>{{$stuff->mapSex($stuff->sex)}}</td>
                    <td>{{$stuff->job}}</td>
                    <td>
                        <a href="{{url('stuff/detail',["id" => $stuff->id])}}">详情</a>
                        <a href="{{url('stuff/update',["id" => $stuff->id])}}">修改</a>
                        <a href="{{url('stuff/delete',["id" => $stuff->id])}}"
                           onclick="if (confirm('你确定要删除吗') == false) return false">删除</a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

    <div>
        <div class="pull-right">
            {{$stuffs->render()}}
            {{--自动分页用的--}}
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
