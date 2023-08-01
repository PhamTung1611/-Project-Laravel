@extends('templates.layout')
@section('content')
<h1 class="text-danger text-center">List User</h1>


<div class="row">
    <div class="col">
        <button class="btn btn-primary"> <a style="text-decoration: none;" class="text-light" href="/user/add">Add New User</a></button>
        {{-- hiển thị thông báo  --}}
        @if (Session::has('success'))
        {{ Session::get('success') }}
        @endif
        @if (Session::has('error'))
        {{ Session::get('error') }}
        @endif
    </div>
    <div class="col">
        <form class="d-flex" role="search" action="{{ route('list_User') }}" method="POST">
            @csrf
            <input class="form-control me-2" type="text" name="search_user" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" name="btn_search" type="submit">Search</button>
        </form>
    </div>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên</th>
            <th scope="col">Email</th>
            <th scope="col">Mật khẩu</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">role</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $c)
        <tr>
            <th scope="row">{{ $c->id }}</th>
            <td>{{ $c->name }}</td>
            <td>{{ $c->email }}</td>
            <td>{{ $c->password }}</td>
            <td>{{ $c->address }}</td>
            <td>{{ $c->role_id == 1 ? 'Admin' : 'Người dùng'}}</td>
            <td>
                <button class="btn btn-success "><a class="text-white" style="text-decoration: none;" href=" {{ route('edit_User', ['id' => $c->id]) }} "><i class="fa-solid fa-pen-to-square"></i></a></button>
                <button class="btn btn-danger "><a class="text-white" style="text-decoration: none;" href="{{ route('delete_User', ['id' => $c->id]) }}"><i class="fa-solid fa-trash"></i></a></button>
                <!-- {{ route('delete_User', ['id' => $c->id]) } -->
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection