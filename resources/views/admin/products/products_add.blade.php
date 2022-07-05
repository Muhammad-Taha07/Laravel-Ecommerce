@extends('layouts.admin_layout.admin_layout')
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
        <form method="POST" action="{{route("create-product")}}">
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
                        <input type="text" name="name"  value="{{old('name')}}" class="form-control">
                      </div>
                      @error('name')
                      <p style="color:red">{{$message}}</p>
                      @enderror
                    </div>
              </div>
    
                <!-- /.col -->
                <div class="col-md-6">
                    <div class="form-group">
                      
                        <label for="roles">Purchase Quantity:</label>
                        <input type="number" name="purchase_qty" value="{{old('purchase_qty')}}" class="form-control">
                        @error('purchase_qty')
                        <p style="color:red">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="roles">Purchase Rate:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rs.</span>
                            </div>
                            <input type="text" name="purchase_rate" value="{{old('purchase_rate')}}" class="form-control">
                        </div>
                        @error('purchase_rate')
                        <p style="color:red">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                    <label for="roles">Sale Rate:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rs.</span>
                        </div>
                        <input type="text" name="sale_rate" value="{{old('sale_rate')}}" class="form-control">
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
                        <textarea class="form-control" name="description" rows="4" cols="50"></textarea>
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

    <div class="card card-danger">
        <div class="card-header">
        <h3 class="card-title">Different Width</h3>
        </div>
        <div class="card-body">
        <div class="row">
        <div class="col-3">
        <input type="text" class="form-control" placeholder=".col-3">
        </div>
        <div class="col-4">
        <input type="text" class="form-control" placeholder=".col-4">
        </div>
        <div class="col-5">
        <input type="text" class="form-control" placeholder=".col-5">
        </div>
        </div>
        </div>
        
        </div>
    </form>
</div>
</section>
@endsection