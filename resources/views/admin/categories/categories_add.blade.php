@extends('layouts.admin_layout.admin_layout')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add New Category</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                    <li class="breadcrumb-item active">Add New Category</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

 <section class="content">
    <div class="container-fluid">
            <div class="card card-default">
             <div class="card-header">
                <h3 class="card-title">Categories</h3>
                <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
            </button>
             </div>
             </div>
            <!-- /.card-header -->
            <form action="submit" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">


                    <div class="col-md-6">
                        <label>Category Name</label>
                        <input style="margin-bottom: 1%" type="text" name="category_name" class="form-control" id="category_n" placeholder="Enter Category Name">
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                          <label>Category Image</label>
                          <div class="input-group">
                              <div class="custom-file">
                                  <input type="file" class="custom-file-input" name="category_image" id="category_image">
                              <label class="custom-file-label" for="category_image">Category Image</label>
                            </div>
                        </div>
                          @error('category_image')
                          <p style="color:red">{{$message}}</p>
                          @enderror
                        </div>
                      </div>

                    <label>Category Description</label>
                    <input style="margin-bottom: 1%" type="text" name="category_description" class="form-control" id="category_d" placeholder="Enter Category Description">
                    <button type="submit" name="btnSubmit" class="btn btn-primary float-right">Submit</button>
                      </div>
                    </div>
                </form>
            </div>
            </div>

        </div>
    </section>
@endsection
