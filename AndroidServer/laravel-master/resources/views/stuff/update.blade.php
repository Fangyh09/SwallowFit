@extends('common.layout')
@section('content')
    @include('common.validator')
    <div class="panel panel-default">
        <div class="panel-heading">修改职工</div>
        <div class="panel-body">
            @include('stuff.form')
        </div>
    </div>
@stop