@extends('layouts.admin_layout.admin_layout')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        @if (Session::get('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{Session::get('status')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    {{-- Main Content --}}

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title"><strong>Products listing</strong></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Category ID</th>
                      <th>Product Name</th>
                      <th>Product Description</th>
                      <th>Product Price</th>
                      <th>Stocks</th>
                      <th>Product Image</th>
                      <th>Action Panel</th>
                    </tr>
                    </thead>
                    <tbody>
                        {{-- data will be added here --}}
                      @foreach ($data as $item)
                    <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->category_id}}</td>
                    <td>{{$item->product_name}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->stock}}</td>
                    @foreach($item->productImage as $photo)
                    <td>
                        <img src="{{asset('uploads/product_image/'. $photo->image)}}" width="100px" height="100px" alt="Image">
                        {{-- <img src="{{ $photo->image ? asset('uploads/category_image/'. $photo->image) : env('image')}}" width="100px" height="100px" alt="Image"> --}}
                    </td>
                    @endforeach
                    <td>
                        <a href="{{route('edit-product', $item->id)}}"><i class="fa fa-edit"></i></a>
                        <a href="{{route('delete-product',$item->id)}}" style="margin-left: 10px"><i class="fa fa-trash"></i></a>
                    </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
          {{-- Searching on Table --}}
          <script>
            $(function () {
              $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
              }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

              $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
              });
            });
          </script>
        </div>
        <!-- /.container-fluid -->
      </section>

@endsection
