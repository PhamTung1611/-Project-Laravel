<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NsxController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AccountsController;
use App\Http\Controllers\FontController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('fontend.home');
// });
// Route::get(['get', 'post'], '/', [FontController::class, 'index'])->name('index');

Route::match(['get', 'post'], '/login', [UserController::class, 'login'])->name('login');
Route::match(['get', 'post'], '/logout', [UserController::class, 'logout'])->name('logout');
Route::match(['get', 'post'], '/register', [UserController::class, 'register'])->name('register');

Route::match(['get', 'post'], '/', [FontController::class, 'FontProduct'])->name('home');
Route::get('/home', [FontController::class, 'FontProduct']);

// Route::get('/sp', function () {
//     return view('fontend.product');
// });

Route::match(['get', 'post'], '/detail/{id}', [FontController::class, 'detailProduct'])->name('detail');

Route::middleware(['auth'])->group(function () {
    //list category
    Route::match(['get', 'post'], '/category', [CategoryController::class, 'listCategory'])->name('list_Category');
    Route::match(['get', 'post'], '/nsx', [NsxController::class, 'listNsx'])->name('list_Nsx');
    Route::match(['get', 'post'], '/product', [ProductController::class, 'listProduct'])->name('list_Product');
    Route::match(['get', 'post'], '/user', [AccountsController::class, 'listUser'])->name('list_User');

    Route::middleware(['check.role'])->group(function () {
        //add new category
        Route::match(['get', 'post'], '/category/add', [CategoryController::class, 'addCategory'])->name('add_Category');
        //edit category
        Route::match(['get', 'post'], '/category/edit/{id}', [CategoryController::class, 'editCategory'])->name('edit_Category');
        //delete category
        Route::get('/category/delete/{id}', [CategoryController::class, 'deleteCategory'])->name('delete_Category');

        //add new category
        Route::match(['get', 'post'], '/nsx/add', [NsxController::class, 'addNsx'])->name('add_Nsx');
        //edit category
        Route::match(['get', 'post'], '/nsx/edit/{id}', [NsxController::class, 'editNsx'])->name('edit_Nsx');
        //delete category
        Route::get('/nsx/delete/{id}', [NsxController::class, 'deleteNsx'])->name('delete_Nsx');

        //list category
        //add new category
        Route::match(['get', 'post'], '/product/add', [ProductController::class, 'addProduct'])->name('add_Product');
        //edit category
        Route::match(['get', 'post'], '/product/edit/{id}', [ProductController::class, 'editProduct'])->name('edit_Product');
        //delete category
        Route::get('/product/delete/{id}', [ProductController::class, 'deleteProduct'])->name('delete_Product');

        //list User
        //add user
        Route::match(['get', 'post'], '/user/add', [AccountsController::class, 'addUser'])->name('add_User');
        //edit user
        Route::match(['get', 'post'], '/user/edit/{id}', [AccountsController::class, 'editUser'])->name('edit_User');
        //delete
        Route::match(['get', 'post'], '/user/delete/{id}', [AccountsController::class, 'deleteUser'])->name('delete_User');
    });

    //list category

});
