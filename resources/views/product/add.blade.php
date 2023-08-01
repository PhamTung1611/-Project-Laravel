@extends('templates.layout')
@section('content')
<h1 class="text-center">Add new Product</h1>
<!-- <button class="btn btn-primary text-center"> <a class="text-light" href="/customers">List</a></button> -->

@if ($errors->any())
@foreach ($errors->all() as $error)
<p style="color: red;">{{ $error }}</p>
@endforeach
@endif


<form action="{{ route('add_Product') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label"> Product Name:</label>
        <input type="text" name="Product_Name" class="form-control" placeholder="Product Name">
    </div>
    <div class="mb-3">
        <label class="form-label"> Product Price:</label>
        <input type="text" name="Product_Price" class="form-control" placeholder="Product Price">
    </div>
    <div class="mb-3">
        <label class="form-label"> Image:</label>
        <input type="file" name="image" class="form-control " class="@error('image') is-invalid @enderror" accept="image/*" id="image">
        <img class="img-thumbnail" src="https://png.pngtree.com/element_our/png/20181206/users-vector-icon-png_260862.jpg" id="image_preview" alt="Product Image" style="width: 100px;">
    </div>
    <div class="mb-3">
        <label class="form-label"> Product Quanlity:</label>
        <input type="text" name="Product_Quantity" class="form-control" placeholder="Product Quanlity">
    </div>
    <div class="mb-3">
        <label class="form-label"> Product Size:</label>
        <input type="text" name="Product_Size" class="form-control" placeholder="Product Size">
    </div>
    <div class="mb-3">
        <label class="form-label"> Product Pin:</label>
        <input type="text" name="Product_Pin" class="form-control" placeholder="Product Pin">
    </div>
    <div class="mb-3">
        <label class="form-label"> Product Desc:</label>
        <textarea type="text" name="Product_Desc" class="form-control" placeholder="Product Desc"></textarea>
    </div>
    <div class="form-label text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

@endsection