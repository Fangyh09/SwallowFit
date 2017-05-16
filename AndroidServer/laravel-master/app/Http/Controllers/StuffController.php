<?php

namespace App\Http\Controllers;

use App\MyUser;
use App\Stuff;
use Illuminate\Http\Request;

class StuffController extends Controller
{
    public function index()
    {
        $stuffs = Stuff::paginate(5);
        return view('stuff.index',
            ['stuffs' => $stuffs]);
    }

    public function detail($id)
    {
        $stuff = Stuff::find($id);
        return view('stuff.detail',
            ['stuff' => $stuff]);
    }

    public function delete($id)
    {
        $stuff = Stuff::find($id);
        if ($stuff->delete()) {
            return redirect('stuff/index')->with('success', '删除成功');
        } else {
            return redirect('stuff/index')->with('success', '删除失败');
        }
//        return view('myuser/detail', [
//            'student' => $student
//        ]);
    }


    public function update(Request $request, $id)
    {
        $stuff = Stuff::find($id);
        if ($request->isMethod('POST')) {
            $data = $request->input('Stuff');
            $stuff->name = $data['name'];
            $stuff->age = $data['age'];
            $stuff->sex = $data['sex'];
            $stuff->job = $data['job'];

            if ($stuff->save()) {
                return redirect('stuff/index')->with('success', '修改成功');
            }
        }
        return view('stuff/update', [
            'stuff' => $stuff
        ]);
    }

    public function create(Request $request)
    {
        $myuser = new MyUser();

//        'name', 'age', 'sex', 'email' ,'password'
        if ($request->isMethod('POST')) {
            $validator = \Validator::make($request->input(),
                ['Myuser.name' => 'required|min:2|max:20',
                    'Myuser.age' => 'required|integer',
                    'Myuser.sex' => 'required|integer',
                    'Myuser.email' => 'email|required',
                    'Myuser.password' => 'required'

                ],
                [
                    'min' => ":attribute 至少为2位",
                    'max' => ":attribute 至多为20位",
                    'required' => ':attribute 为必填项',
                    'integer' => ':attribute 应为整数',
                    'email' => ':attribute 不合法'
                ],
                [
                    'Myuser.name' => '姓名',
                    'Myuser.age' => '年龄',
                    'Myuser.sex' => '性别',
                    'Myuser.email' => '邮箱',
                    'Myuser.password' => '密码'
                ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $data = $request->input('Myuser');
            if (MyUser::create($data)) {
                return redirect('myuser/index')->with('success', '添加成功');
            } else {
                return redirect()->back();
            }

        }
        return view('myuser.create', [
            'myuser' => $myuser
        ]);
    }
}












