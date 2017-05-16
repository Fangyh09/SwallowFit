<?php

namespace App\Http\Controllers;

use App\MyUser;
use Illuminate\Http\Request;

class MyUserController extends Controller
{
    public function index()
    {
        $myusers = MyUser::paginate(5);
        return view('myuser.index',
            ['myusers' => $myusers]);
    }


    public function testpost(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
//        $myfile = fopen("newoutdata.txt", "rw") or die("Unable to open file!");
//
//        fwrite($myfile, $username);
//
//        fwrite($myfile, $password);
//        fclose($myfile);
        return $password;
    }

    public function detail($id)
    {
        $myuser = MyUser::find($id);
        return view('myuser.detail',
            ['myuser' => $myuser]);
    }

    public function delete($id)
    {
        $myuser = MyUser::find($id);
        if ($myuser->delete()) {
            return redirect('myuser/index')->with('success', '删除成功');
        } else {
            return redirect('myuser/index')->with('success', '删除失败');
        }
//        return view('myuser/detail', [
//            'student' => $student
//        ]);
    }


    public function update(Request $request, $id)
    {
        $myuser = MyUser::find($id);
        if ($request->isMethod('POST')) {
            $data = $request->input('Myuser');
            $myuser->name = $data['name'];
            $myuser->age = $data['age'];
            $myuser->sex = $data['sex'];
            $myuser->email = $data['email'];
            $myuser->password = $data['password'];

            if ($myuser->save()) {
                return redirect('myuser/index')->with('success', '修改成功');
            }
        }
        return view('myuser/update', [
            'myuser' => $myuser
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












