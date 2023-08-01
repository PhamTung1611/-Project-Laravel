<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountRequest;
use App\Http\Requests\UserRequest;
use App\Models\Account;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AccountsController extends Controller
{
    public function listUser(Request $request)
    {
        $users = User::all();

        if ($request->post() && $request->search_user) {
            $users = DB::table('users')->where('name', 'like', '%' . $request->search_user . '%')->get();
        }
        return view('user.index', compact('users'));
    }
    public function addUser(UserRequest $request)
    {
        if ($request->isMethod('post')) {
            $param = $request->except('_token');
            $param["password"] = Hash::make($request->password);
            $param["email_verified_at"] = Carbon::now('Asia/Ho_Chi_Minh');

            //Them du lieu vao db thoong qua model
            $user = User::create($param);

            if ($user->id) {
                Session::flash('success', 'Add new User success');
                return redirect()->route('list_User');
            } else {
                Session::flash('error', 'Add User error');
            }
        }
        return view('user.add');
    }
    public function editUser(Request $request, $id)
    {
        $detail = User::find($id); //tìm theo id

        if ($request->isMethod('post')) {
            $update = User::where('id', $id)->update($request->except('_token'));
            if ($update) {
                Session::flash('success', 'Edit new User success');
                return redirect()->route('list_User');
            } else {
                Session::flash('error', 'Edit new User error');
            }
        }
        return view('user.edit', compact('detail'));
    }
    public function deleteUser($id)
    {
        // dd($id);
        if ($id) {
            $deleted = User::where('id', $id)->delete();
            if ($deleted) {
                Session::flash('success', 'Delete User success');
                return redirect()->route('list_User');
            } else {
                Session::flash('error', 'Delete User error');
            }
        }
        return;
    }
}
