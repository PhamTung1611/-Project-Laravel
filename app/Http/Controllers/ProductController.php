<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    //
    public function listProduct(Request $request)
    {
        $products = Product::all();

        if ($request->post() && $request->search_product) {
            $products = DB::table('products')
                ->where('Product_Name', 'like', '%' . $request->search_product . '%')->get();
        }
        return view('product.index', compact('products'));
    }
    public function fontProduct(){
        $product = Product::all();
        $category = Category::all();
        return view('fontend.home',compact('product','category'));
    }
    public function addProduct(ProductRequest $request)
    {

        if ($request->isMethod('post')) { //kireerm tra phương thức nào gửi lên
            // dd($request);
            $params = $request->post(); //lấy dữ liệu từ request gửi lên 

            unset($params['_token']); //xóa token khi request gửi lên

            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $request->image = uploadFile('image', $request->file('image'));
            }
            //Thêm dữ liệu vào db thông qua model
            $product = new Product();
            $product->Product_Name = $request->Product_Name;
            $product->Product_Price = $request->Product_Price;
            $product->image = $request->image;
            $product->Product_Desc = $request->Product_Desc;
            $product->Product_Quantity = $request->Product_Quantity;
            $product->Product_Size = $request->Product_Size;
            $product->Product_Pin = $request->Product_Pin;


            $product->save(); //lưu dữ liệu
            //tạo thông báo
            if ($product->save()) {
                Session::flash('success', 'Add new Category success');
                return redirect()->route('list_Product');
            } else {
                Session::flash('error', 'Add new Category error');
            }
        }
        return view('product.add');
    }

    public function editProduct(Request $request, $id)
    {

        $detail = Product::find($id); //tìm theo id

        if ($request->isMethod('post')) {
            $params = $request->except('_token', 'image');

            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                //Xóa ảnh cũ nếu update ảnh mới
                $deleteImage = Storage::delete('/public/' . $detail->image);
                if ($deleteImage) {
                    $request->image = uploadFile('image', $request->file('image'));
                    $params['image'] = $request->image;
                }
            } else {
                $params['image'] = $detail->image;
            }

            $update = Product::where('id', $id)->update($params);

            if ($update) {
                Session::flash('success', 'Edit new Category success');
                return redirect()->route('list_Product');
            } else {
                Session::flash('error', 'Edit new Category error');
            }
        }

        return view('product.edit', compact('detail'));
    }

    public function deleteProduct($id)
    {
        // dd($id);
        if ($id) {
            $deleted = Product::where('id', $id)->delete();
            if ($deleted) {
                Session::flash('success', 'Delete Category success');
                return redirect()->route('list_Product');
            } else {
                Session::flash('error', 'Delete Category error');
            }
        }
        return;
    }
}
