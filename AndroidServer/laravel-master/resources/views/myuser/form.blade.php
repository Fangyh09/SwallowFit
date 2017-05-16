<form class="form-horizontal" method="post" action="">

    {{csrf_field()}}
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">姓名</label>

        <div class="col-sm-5">
            <input type="text" name="Myuser[name]"
                   value="{{old('Myuser')['name'] ? old('Myuser')['name'] : $myuser->name}}"
                   class="form-control" id="name" placeholder="请输入用户姓名">
        </div>
        {{--<div class="col-sm-5">--}}
        {{--<p class="form-control-static text-danger">{{$errors->first('Myuser.name')}}</p>--}}
        {{--</div>--}}
    </div>

    <div class="form-group">
        <label for="age" class="col-sm-2 control-label">年龄</label>

        <div class="col-sm-5">
            <input type="text" name="Myuser[age]"
                   value="{{old('Myuser')['age'] ? old('Myuser')['age'] : $myuser->age}}" class="form-control"
                   id="age" placeholder="请输入用户年龄">
        </div>
        {{--<div class="col-sm-5">--}}
        {{--<p class="form-control-static text-danger">{{$errors->first('Myuser.age')}}</p>--}}
        {{--</div>--}}
    </div>


    <div class="form-group">
        <label class="col-sm-2 control-label">性别</label>

        <div class="col-sm-5">
            @foreach($myuser->mapSex() as $ind => $val)
                <label class="radio-inline">
                    <input type="radio" {{ ($myuser->sex) == $ind ? 'checked' : '' }}
                    name="Myuser[sex]" value="{{ $ind }}"> {{ $val }}
                </label>
            @endforeach

        </div>
        {{--<div class="col-sm-5">--}}
        {{--<p class="form-control-static text-danger">{{$errors->first('Myuser.sex') == null ? "" : "请选择性别"}}</p>--}}
        {{--</div>--}}
    </div>


    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">邮箱</label>

        <div class="col-sm-5">
            <input type="text" name="Myuser[email]"
                   value="{{old('Myuser')['email'] ? old('Myuser')['email'] : $myuser->email}}"
                   class="form-control" id="email" placeholder="请输入用户邮箱">
        </div>
        {{--<div class="col-sm-5">--}}
        {{--<p class="form-control-static text-danger">{{$errors->first('Myuser.email')}}</p>--}}
        {{--</div>--}}
    </div>


    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">密码</label>

        <div class="col-sm-5">
            <input type="text" name="Myuser[password]"
                   value="{{old('Myuser')['password'] ? old('Myuser')['password'] : $myuser->password}}"
                   class="form-control" id="password" placeholder="请输入用户密码">
        </div>
        {{--<div class="col-sm-5">--}}
        {{--<p class="form-control-static text-danger">{{$errors->first('Myuser.password')}}</p>--}}
        {{--</div>--}}
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">提交</button>
        </div>
    </div>
</form>
