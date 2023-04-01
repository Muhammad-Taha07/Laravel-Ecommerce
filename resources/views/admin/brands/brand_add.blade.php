@extends('layouts.admin_layout.admin_layout')
@section('title', 'Brands')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add New Brand</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                    <li class="breadcrumb-item active">Add New Brand</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

 <section class="content">
    <div class="container-fluid">
            <div class="card card-default">
             <div class="card-header">
                <h3 class="card-title">Brands</h3>
                <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
            </button>
             </div>
             </div>
            <!-- /.card-header -->
            <form action="{{route("create-brand")}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                    <div class="col-md-6">
                        <label>Brand Name</label>
                        <input style="margin-bottom: 1%" type="text" name="brand_name" class="form-control" id="brand_n" placeholder="Enter Brand Name">
                        <span class="text-danger">
                            @error('brand_name')
                            <ul><li><strong>{{$message}}</strong></li></ul>
                            @enderror
                        </span>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                          <label>Brand Image</label>
                          <div class="input-group">
                              <div class="custom-file">
                                  <input type="file" class="custom-file-input" name="brand_image" id="brand_n">
                              <label class="custom-file-label" for="brand_image">Brand Image</label>
                            </div>
                        </div>
                        </div>
                      </div>

                    <label>Brand Description</label>
                    <input style="margin-bottom: 1%" type="text" name="brand_description" class="form-control" id="brand_d" placeholder="Enter Brand Description">
                    <span class="text-danger">
                        @error('brand_description')
                        <ul><li><strong>{{$message}}</strong></li></ul>
                        @enderror
                    </span>
                    <button type="submit" name="btnSubmit" class="btn btn-primary float-right">Submit</button>
                      </div>
                    </div>
                </form>
            </div>
            </div>

        </div>
    </section>
@endsection
