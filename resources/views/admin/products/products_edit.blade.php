@extends('layouts.admin_layout.admin_layout')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Edit Product</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit Product</li>
        </ol>
        </div>
     </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <form method="POST" action="{{url('product/edit-product', ['id' => $product->id])}}">
        @csrf
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Edit Product</h3>
                <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                </div>
            </div>
            <!-- /.card-header -->

            <div class="card-body">
                <div class="row">

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="roles">Category ID:</label>
                        <select class="form-control" name="category_id" id="id_cat">
                            @foreach ($dropdown as $data)
                            <option value="{{$data->id}}">{{$data->category_name}}</option>
                            @endforeach
                        </select>
                        {{-- <input type="number" name="category_id" value="" class="form-control"> --}}
                    </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                      <label for="roles">Product Name:</label>
                      <div class="input-group">
                        <input type="text" name="name" placeholder="Enter Product Name" value="{{$product->product_name}}" class="form-control">
                      </div>
                      @error('name')
                      <p style="color:red">{{$message}}</p>
                      @enderror
                    </div>
              </div>

                <!-- /.col -->
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="roles">Stocks:</label>
                        <input type="number" placeholder="Enter Stocks" name="product_stocks" value="{{$product->stock}}" class="form-control">
                        @error('product_stocks')
                        <p style="color:red">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                    <label for="roles">Product Price:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rs.</span>
                        </div>
                        <input type="text" placeholder="Enter Product Price" name="product_price" value="{{$product->price}}" class="form-control">
                    </div>
                    @error('sale_rate')
                    <p style="color:red">{{$message}}</p>
                    @enderror
                </div>
                </div>
                <!-- /.col -->
                </div>
                <div class="form-group">
                    <label>Product Description:</label>
                        <textarea class="form-control" value="{{$product->description}}" name="product_description" rows="4" cols="50"></textarea>
                </div>
        </div>
            <div class="card-footer">
                <div class="row">
                <div class="col-12">
                <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
                </div>
                </div>
            </div>

    </div>
    </form>
</div>
</section>
@endsection
