@extends('templates.layout')
@section('content')
<h1 class="text-danger text-center">List NSX</h1>

<div class="row">
    <div class="col">
        <button class="btn btn-primary"> <a style="text-decoration: none;" class="text-light" href="/nsx/add">Add New NSX</a></button>
        {{-- hiển thị thông báo  --}}
        @if (Session::has('success'))
        {{ Session::get('success') }}
        @endif
        @if (Session::has('error'))
        {{ Session::get('error') }}
        @endif
    </div>
    <div class="col">
        <form class="d-flex" role="search" action="{{ route('list_Nsx') }}" method="POST">
            @csrf
            <input class="form-control me-2" type="text" name="search_nsx" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" name="btn_search" type="submit">Search</button>
        </form>
    </div>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên NSX</th>
            <th scope="col">Giới Thiệu</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($nsx as $n)
        <tr>
            <th scope="row">{{ $n->id }}</th>
            <td>{{ $n->TenNSX}}</td>
            <td>{{ $n->GioiThieu}}</td>

            <td>
                <button class="btn btn-success "><a class="text-white" style="text-decoration: none;" href=" {{ route('edit_Nsx', ['id' => $n->id]) }} "><i class="fa-solid fa-pen-to-square"></i></a></button>
                <button class="btn btn-danger "><a class="text-white" style="text-decoration: none;" href="{{ route('delete_Nsx', ['id' => $n->id]) }}"><i class="fa-solid fa-trash"></i></a></button>
                <!-- {{ route('delete_Category', ['id' => $c->id]) } -->
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection