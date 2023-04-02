@extends('layouts.admin_layout.admin_layout')
@section('title','Add Product')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Add New Product</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Add New Product</li>
        </ol>
        </div>
     </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <form method="POST" action="{{route("create-product")}}" enctype="multipart/form-data">
        @csrf
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Add Product</h3>
                <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                </div>
            </div>
            <!-- /.card-header -->

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="roles">Product Name:</label>
                            <div class="input-group">
                              <input type="text" name="product_name" placeholder="Enter Product Name" value="{{old('name')}}" class="form-control">
                            </div>
                            <span class="text-danger">
                                @error('product_name')
                                <ul><li><strong>{{$message}}</strong></li></ul>
                                @enderror
                            </span>
                          </div>
                    </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="roles">Select Category:</label>
                        <select class="form-control" name="category_id" id="id_cat">
                            <option value="" selected>Select Category</option>
                            @foreach ($dropdown['category'] as $data)
                            <option value="{{$data->id}}">{{$data->category_name}}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">
                            @error('category_id')
                            <ul><li><strong>{{$message}}</strong></li></ul>
                            @enderror
                        </span>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="roles">Select Brand:</label>
                        <select class="form-control" name="brand_id" id="id_brand">
                            <option value="" selected>Select Brand</option>
                            @foreach ($dropdown['brand'] as $data)
                            <option value="{{$data->id}}">{{$data->brand_name}}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">
                            @error('brand_id')
                            <ul><li><strong>{{$message}}</strong></li></ul>
                            @enderror
                        </span>
                    </div>
                </div>

                <!-- /.col -->

                <div class="col-md-6">
                    <div class="form-group">
                      <label>Product Image</label>
                      <div class="input-group">
                          <div class="custom-file">
                          <input type="file" class="custom-file-input" name="product_image" id="p_image">
                          <label class="custom-file-label" for="image">Upload Product Image</label>
                      </div>
                    </div>
                    </div>
                    <span class="text-danger">
                        @error('product_image')
                        <ul><li><strong>{{$message}}</strong></li></ul>
                        @enderror
                    </span>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                    <label for="roles">Product Price:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rs.</span>
                        </div>
                        <input type="text" placeholder="Enter Product Price" name="price" value="{{old('product_price')}}" class="form-control">
                    </div>
                    <span class="text-danger">
                        @error('price')
                        <ul><li><strong>{{$message}}</strong></li></ul>
                        @enderror
                    </span>
                </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="roles">Stocks:</label>
                        <input type="number" placeholder="Enter Stocks" name="stock" value="{{old('purchase_stocks')}}" class="form-control">
                        <span class="text-danger">
                            @error('stock')
                            <ul><li><strong>{{$message}}</strong></li></ul>
                            @enderror
                        </span>
                    </div>
                </div>
                <!-- /.col -->
                </div>
                <div class="form-group">
                    <label>Product Description:</label>
                        <textarea class="form-control" placeholder="Enter Description" name="description" rows="4" cols="50"></textarea>
                </div>
                <span class="text-danger">
                    @error('description')
                    <ul><li><strong>{{$message}}</strong></li></ul>
                    @enderror
                </span>
            </div>

            <div class="card-footer">
                <div class="row">
                <div class="col-12">
                <button type="submit" class="btn btn-primary float-right">Submit</button>
                </div>
                </div>
            </div>

    </div>
    </form>
</div>
</section>
@endsection
