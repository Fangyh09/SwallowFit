@extends('common.layout')
@section('content')
    @include('common.validator')
    <div class="panel panel-default">
        <div class="panel-heading">修改用户</div>
        <div class="panel-body">
            @include('myuser.form')
        </div>
    </div>
@stop