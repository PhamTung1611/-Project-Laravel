@extends('templates.layout')
@section('content')
<h1 class="text-center">Edit Category </h1>
@if ($errors->any())
@foreach ($errors->all() as $error)
<p style="color: red;">{{ $error }}</p>
@endforeach
@endif



<form action="{{ route('edit_Nsx', ['id' => $detail->id]) }}" method="post">
    @csrf
    <div class="mb-3">
        <label class="form-label"> Tên NSX:</label>
        <input type="text" name="TenNSX" class="form-control" placeholder="Tên NSX" value="{{ $detail->TenNSX }}">
    </div>
    <div class="mb-3">
        <label class="form-label"> Giới Thiệu:</label>
        <input type="text" name="GioiThieu" class="form-control" placeholder="Giới Thiệu" value="{{ $detail->GioiThieu }}">
    </div>
    <div class="form-label text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection