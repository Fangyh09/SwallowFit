<form class="form-horizontal" method="post" action="">

    {{csrf_field()}}
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">姓名</label>

        <div class="col-sm-5">
            <input type="text" name="Stuff[name]"
                   value="{{old('Stuff')['name'] ? old('Stuff')['name'] : $stuff->name}}"
                   class="form-control" id="name" placeholder="请输入用户姓名">
        </div>
        {{--<div class="col-sm-5">--}}
        {{--<p class="form-control-static text-danger">{{$errors->first('Stuff.name')}}</p>--}}
        {{--</div>--}}
    </div>

    <div class="form-group">
        <label for="age" class="col-sm-2 control-label">年龄</label>

        <div class="col-sm-5">
            <input type="text" name="Stuff[age]"
                   value="{{old('Stuff')['age'] ? old('Stuff')['age'] : $stuff->age}}" class="form-control"
                   id="age" placeholder="请输入用户年龄">
        </div>
        {{--<div class="col-sm-5">--}}
        {{--<p class="form-control-static text-danger">{{$errors->first('Stuff.age')}}</p>--}}
        {{--</div>--}}
    </div>


    <div class="form-group">
        <label class="col-sm-2 control-label">性别</label>

        <div class="col-sm-5">
            @foreach($stuff->mapSex() as $ind => $val)
                <label class="radio-inline">
                    <input type="radio" {{ ($stuff->sex) == $ind ? 'checked' : '' }}
                    name="Stuff[sex]" value="{{ $ind }}"> {{ $val }}
                </label>
            @endforeach

        </div>
        {{--<div class="col-sm-5">--}}
        {{--<p class="form-control-static text-danger">{{$errors->first('Stuff.sex') == null ? "" : "请选择性别"}}</p>--}}
        {{--</div>--}}
    </div>


    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">工作</label>

        <div class="col-sm-5">
            <input type="text" name="Stuff[job]"
                   value="{{old('Stuff')['job'] ? old('Stuff')['job'] : $stuff->job}}"
                   class="form-control" id="job" placeholder="请输入用户工作">
        </div>
        {{--<div class="col-sm-5">--}}
        {{--<p class="form-control-static text-danger">{{$errors->first('Stuff.email')}}</p>--}}
        {{--</div>--}}
    </div>


    {{--<div class="form-group">--}}
        {{--<label for="name" class="col-sm-2 control-label">密码</label>--}}

        {{--<div class="col-sm-5">--}}
            {{--<input type="text" name="Stuff[password]"--}}
                   {{--value="{{old('Stuff')['password'] ? old('Stuff')['password'] : $stuff->password}}"--}}
                   {{--class="form-control" id="password" placeholder="请输入用户密码">--}}
        {{--</div>--}}
        {{--<div class="col-sm-5">--}}
        {{--<p class="form-control-static text-danger">{{$errors->first('Stuff.password')}}</p>--}}
        {{--</div>--}}
    {{--</div>--}}

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">提交</button>
        </div>
    </div>
</form>
