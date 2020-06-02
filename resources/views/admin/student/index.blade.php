@extends('layouts.admin.main')


@section('styles')
    <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
@endsection



@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Starter Page</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <form action="{{ route('admin.student.destroyMulti') }}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
        @csrf
        @method('DELETE')


    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-left">
                                
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete All</button>
                                
                                <a href="{{ route('admin.student.create') }}" class="btn btn-success"><i
                                        class="fa fa-plus"></i> Add New</a>
                            </div>
                        </div>
                        <div class="card-body">
    
                            @include('admin.shared._message')
                            @include('admin.student._table')
    
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
    </form>


</div>
@endsection

{{-- @section('scripts') --}}
    

    {{-- <script>
        $(function () {
          
          $('#student').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });
        });
      </script> --}}
{{-- @endsection --}}

@include('admin.student._script')
