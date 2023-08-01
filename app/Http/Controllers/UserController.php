<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //
    public function login(UserRequest $request){
        if($request->isMethod('POST')){
            if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
                return redirect()->route('list_Category');
            }else{
                Session::flash('error', 'Sai thông tin đăng nhập');
                return redirect()->route('login');
            }
        }
        return view('auth.login');
    }

    public function register(UserRequest $request){
        if($request->isMethod('POST')){
            $param = $request->except('_token');
            //mã hóa password người dùng cung cấp
            $param["password"] = Hash::make($request->password);
            //đặt giá trị emal là thời gian hiện tại
            $param["email_verified_at"] = Carbon::now('Asia/Ho_Chi_Minh');

            $user = User::create($param);

            if($user->id){
                Session::flash('success', 'Thêm tài khoản thành công');
                return redirect()->route('login');
            }
        }

        return view('auth.register');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
