@extends('templates.layout')
@section('content')
<h1 class="text-center">Add new User</h1>
<!-- <button class="btn btn-primary text-center"> <a class="text-light" href="/customers">List</a></button> -->

@if ($errors->any())
@foreach ($errors->all() as $error)
<p style="color: red;">{{ $error }}</p>
@endforeach
@endif


<form action="{{ route('add_User') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label"> Name:</label>
        <input type="text" name="name" class="form-control" placeholder=" Name" >
    </div>
    <div class="mb-3">
        <label class="form-label"> Email:</label>
        <input type="text" name="email" class="form-control" placeholder="email" >
    </div>
    <div class="mb-3">
        <label class="form-label"> Mật khẩu:</label>
        <input type="password" name="password" class="form-control" placeholder="Mat khau" >
    </div>
    <div class="mb-3">
        <label class="form-label"> Địa chỉ:</label>
        <input type="text" name="address" class="form-control" placeholder="address" >
    </div>

    <div class="mb-3">
        Admin: <input type="radio" name="role_id" id="" value="1">
        Người dùng: <input type="radio" name="role_id" id="" value="0">
    </div>

    <div class="form-label text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

@endsection