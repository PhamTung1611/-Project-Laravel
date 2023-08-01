@extends('templates.layout')
@section('content')
<h1 class="text-center">Add new NSX</h1>
<!-- <button class="btn btn-primary text-center"> <a class="text-light" href="/customers">List</a></button> -->

@if ($errors->any())
@foreach ($errors->all() as $error)
<p style="color: red;">{{ $error }}</p>
@endforeach
@endif


<form action="{{ route('add_Nsx') }}" method="post">
    @csrf
    <div class="mb-3">
        <label class="form-label"> Tên NSX:</label>
        <input type="text" name="TenNSX" class="form-control" placeholder="Tên NSX" >
    </div>
    <div class="mb-3">
        <label class="form-label"> Giới Thiệu:</label>
        <input type="text" name="GioiThieu" class="form-control" placeholder="Giới Thiệu" >
    </div>
    <div class="form-label text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

@endsection