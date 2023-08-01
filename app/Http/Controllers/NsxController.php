<?php

namespace App\Http\Controllers;

use App\Http\Requests\NsxRequest;
use App\Models\NSX;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class NsxController extends Controller
{
    //
    public function listNsx(Request $request){
        $nsx = NSX::all();

        if($request -> post() && $request->search_nsx){
            $nsx = DB::table('nsx')
                ->where('TenNSX','like','%' . $request->search_nsx . '%')->get();
        }
        return view('nsx.index', compact('nsx'));
    }

    public function addNsx(NsxRequest $request){
        if($request->isMethod('post')){//kireerm tra phương thức nào gửi lên

            $params = $request->post();//lấy dữ liệu từ request gửi lên 

            unset($params['_token']);//xóa token khi request gửi lên

            //Thêm dữ liệu vào db thông qua model
            $nsx = new NSX();
            $nsx->TenNSX = $request->TenNSX;
            $nsx->GioiThieu = $request->GioiThieu;

            $nsx->save();//lưu dữ liệu

            //tạo thông báo
            if($nsx->save()){
                Session::flash('success','Add new NSX success');
                return redirect()->route('list_Nsx');
            }else {
                Session::flash('error','Add new NSX error');
            }
        }
        return view('nsx.add');
    }

    public function editNsx(Request $request,$id){

        $detail = NSX::find($id);//tìm theo id

        if($request->isMethod('post')){
            $update = NSX::where('id', $id)->update($request->except('_token'));
            if($update){
                Session::flash('success','Edit new NSX success');
                return redirect()->route('list_Nsx');
            }else{
                Session::flash('error','Edit new NSX error');
            }
        }
        return view('nsx.edit',compact('detail'));
    }

    public function deleteNsx($id)
    {
        // dd($id);
        if($id){
            $deleted = NSX::where('id', $id)->delete();
            if($deleted){
                Session::flash('success', 'Delete NSX success');
                return redirect()->route('list_Nsx');
            }else {
                Session::flash('error', 'Delete NSX error');
            }
        }
        return;
    }
}
