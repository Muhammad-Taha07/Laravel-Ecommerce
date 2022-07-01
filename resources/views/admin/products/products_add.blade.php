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
            <div class="card card-default">
             <div class="card-header">
                <h3 class="card-title">Products</h3>
                <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
        <i class="fas fa-minus"></i>
        </button>
             </div>
             </div>
            <!-- /.card-header -->
            <form action="submit" method="POST">
                    @csrf
                    <div class="card-body">
                      <label>Product Name</label>
                      <input style="margin-bottom: 1%" type="text" name="product_name" class="form-control" id="product_n" placeholder="Enter Product Name">

                      <label>Product Description</label>
                      <input style="margin-bottom: 1%" type="text" name="product_description" class="form-control" id="product_d" placeholder="Enter Product Description">

                      <div style="float: left" class="col-md-6">
                      <label>Stock</label>
                      <input style="margin-bottom: 1%" type="text" name="product_stock" class="form-control col-md-6" id="product_s" placeholder="Enter No of Stocks">
                      </div>

                      <div style="float: left" class="col-md-6">
                        <label>Price</label>
                        <input style="margin-bottom: 1%" type="text" name="product_price" class="form-control col-md-6" id="product_p" placeholder="Enter Product Price">
                      </div>
                      <button type="submit" name="btnSubmit" class="btn btn-primary float-right">Submit</button>
                    </div>
                </div>
                </form>
            </div>
            </div>

        </div>
    </section>
@endsection
