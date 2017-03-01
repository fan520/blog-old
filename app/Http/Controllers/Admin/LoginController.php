<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * @fun ��½
     * @author xiaofan
     * @date 2017-2-27
     * @param
     * @return
     */
    public function login()
    {
        if(Input::all()){
            $model = new Admin();
            $username = strtolower(Input::get('username'));
            $info = $model->where('username','=',$username)->first();
            if(!$info)
            {
                return back()->with('u_error','用户不存在!');
            }elseif($info->pwd!=md5(Input::get('pwd').env('ADMIN_SALT'))){
                return back()->with('p_error','密码错误!');
            }
            return redirect('admin/index')->with('success','登陆成功!');
        }else{
            return view('Admin.login');
        }
    }
    /**
     * @fun
     * @author xiaofan
     * @date 2017-2-
     * @param
     * @return
     */
//    public function add()
//    {
//        if($_POST){
//            $data = Input::all();
//            $data['salt'] = env('ADMIN_SALT');
//            unset($data['_token']);
//            $data['pwd'] = md5($data['pwd'].$data['salt']);
//            $model = new Admin();
//            $re = $model->insert($data);
//            P($re);
//
//        }
//        $name1 = "123";
//        $name2 = "555";
//        return view('Admin.login', compact('name1','name2'));
//    }




















}
