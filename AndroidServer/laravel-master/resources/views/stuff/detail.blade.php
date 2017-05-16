@extends('common.stuff_layout')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">职工详情</div>

        <table class="table table-bordered table-striped table-hover ">
            <tbody>
            <tr>
                <td width="50%">ID</td>
                <td>{{$stuff->id}}</td>
            </tr>

            <tr>
                <td>姓名</td>
                <td>{{$stuff->name}}</td>
            </tr>

            <tr>
                <td>年龄</td>
                <td>{{$stuff->age}}</td>
            </tr>

            <tr>
                <td>性别</td>
                <td>{{$stuff->mapSex($stuff->sex)}}</td>
            </tr>


            <tr>
                <td>工作</td>
                <td>{{$stuff->job}}</td>
            </tr>

            {{--<tr>--}}
                {{--<td>密码</td>--}}
                {{--<td>{{$myuser->password}}</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
            {{--<td>添加日期</td>--}}
            {{--<td>{{date('Y-m-d',$student->created_at)}}</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
            {{--<td>最后修改</td>--}}
            {{--<td>{{date('Y-m-d',$student->update_at)}}</td>--}}
            {{--</tr>--}}
            </tbody>
        </table>
    </div>
@stop