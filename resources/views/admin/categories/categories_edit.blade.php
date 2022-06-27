@extends('layouts.admin_layout.admin_layout')
@section('title', 'Categories')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update Category</h1>
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
                <form method="POST" action="{{url('category/edit-category', ['id'=>$category->id])}}">
                    @csrf
                    <div class="card-body">
                      <label>Category Name</label>
                      <input style="margin-bottom: 1%" type="text" name="category_name" value="{{$category->category_name}}" class="form-control" id="category_n" placeholder="Enter Category Name">
                      <label>Category Description</label>
                      <input style="margin-bottom: 1%" type="text" name="category_description" value="{{$category->category_description}}" class="form-control" id="category_d" placeholder="Enter Category Description">
                      <button type="submit" name="btnSubmit" class="btn btn-primary float-right">Submit</button>
                    </div>
                </form>
            </div>
            </div>

        </div>
    </section>
@endsection
