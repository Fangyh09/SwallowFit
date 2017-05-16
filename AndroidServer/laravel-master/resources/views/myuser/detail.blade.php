@extends('common.layout')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">用户详情</div>

        <table class="table table-bordered table-striped table-hover ">
            <tbody>
            <tr>
                <td width="50%">ID</td>
                <td>{{$myuser->id}}</td>
            </tr>

            <tr>
                <td>姓名</td>
                <td>{{$myuser->name}}</td>
            </tr>

            <tr>
                <td>年龄</td>
                <td>{{$myuser->age}}</td>
            </tr>

            <tr>
                <td>性别</td>
                <td>{{$myuser->mapSex($myuser->sex)}}</td>
            </tr>


            <tr>
                <td>邮箱</td>
                <td>{{$myuser->email}}</td>
            </tr>

            <tr>
                <td>密码</td>
                <td>{{$myuser->password}}</td>
            </tr>
            {{--<tr>--}}
            {{--<td>添加日期</td>--}}
            {{--<td>{{date('Y-m-d',$student->created_at)}}</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
            {{--<td>最后修改</td>--}}
            {{--<td>{{date('Y-m-d',$student->update_at)}}</td>--}}
            </tr>
            </tbody>
        </table>
    </div>
@stop