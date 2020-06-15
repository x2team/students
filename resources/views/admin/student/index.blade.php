@extends('layouts.admin.main')


@section('styles')
    <!-- DataTables from AdminLTE -->
    {{-- <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/datatables-responsive/css/responsive.bootstrap4.min.css"> --}}


    <!-- DataTables -->
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap4.min.css"> --}}

    <!-- Datatables FULL -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.21/r-2.2.5/datatables.min.css"/>
    <!-- Datatables Select -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css"/>



    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <!-- Select2 -->
    <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <!-- Toastr Alert -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- Toastr Alert from Adminto -->
    {{-- <link rel="stylesheet" href="https://coderthemes.com/adminto/layouts/vertical/assets/libs/toastr/toastr.min.css">
    <link href="https://coderthemes.com/adminto/layouts/vertical/assets/css/app.min.css" id="app-stylesheet" rel="stylesheet" type="text/css"> --}}
    

    <!-- Jasny Bootstrap -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/4.0.0/css/jasny-bootstrap.min.css">
@endsection



@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    {{-- <h1 class="m-0 text-dark">{{ __('Starter Page') }}</h1> --}}
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">{{__('Dashboard')}}</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-left">
                                
                                <button id="deleteAll" type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> {{__('Delete All')}}</button>
                                
                                <a href="{{ route('admin.student.create') }}" class="btn btn-success">
                                    <i class="fa fa-plus"></i> {{__('Add New')}}</a>
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
 


</div>
@endsection

@include('admin.student._script')
