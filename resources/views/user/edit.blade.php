@extends('templates.layout')
@section('content')
<h1 class="text-center">Edit User </h1>
@if ($errors->any())
@foreach ($errors->all() as $error)
<p style="color: red;">{{ $error }}</p>
@endforeach
@endif



<form action="{{ route('edit_User', ['id' => $detail->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label"> Name:</label>
        <input type="text" name="name" class="form-control" value="{{ $detail->name }}" placeholder=" Name" >
    </div>
    <div class="mb-3">
        <label class="form-label"> Email:</label>
        <input type="text" name="email" class="form-control" placeholder="email" value="{{ $detail->email }}">
    </div>
    
    <div class="mb-3">
        <label class="form-label"> Mật khẩu:</label>
        <input type="text" name="password" class="form-control" value="{{ $detail->password }}" placeholder="Mat khau" >
    </div>
    <div class="mb-3">
        <label class="form-label"> Địa chỉ:</label>
        <input type="text" name="address" class="form-control" placeholder="address" value="{{ $detail->address }}">
    </div>
    <div class="mb-3">
        <label class="form-label"> Role:</label>
        Admin: <input type="radio" name="role_id" id="Admin" value="1" {{ $detail->role_id == "1"? 'checked':'' }}>
        Người dùng: <input type="radio" name="role_id" id="NguoiDung" value="0" {{ $detail->role_id == "0"? 'checked':'' }}>
    </div>

    <div class="form-label text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection