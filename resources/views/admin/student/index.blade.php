@extends('layouts.admin.main')


@section('styles')
    <!-- DataTables from AdminLTE -->
    {{-- <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/datatables-responsive/css/responsive.bootstrap4.min.css"> --}}


    <!-- DataTables Full -->
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap4.min.css"> --}}

    <!-- Datatables Individual Release Files -->
    
    {{-- <link rel="stylesheet" type="text/css" href="https://datatables.net/media/css/site-examples.css?_=0db1cd38700c0cfcdc140c39a2ebc306"/> --}}
    {{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"/> --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css"/>
    <!-- Datatables Select -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css"/>
    <!-- Datatables Search Highlight -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/plug-ins/1.10.21/features/searchHighlight/dataTables.searchHighlight.css"/>
    <!-- Datatables Responsive -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap4.min.css"/>
    
    <!-- Datatables Buttons -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.bootstrap4.min.css"/>
    <!-- Datatables ColReorder -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/colreorder/1.5.2/css/colReorder.bootstrap4.min.css"/>
    

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

                            <div class="float-right">
                                <form id="excelFile" method="POST" action="{{ route('admin.student.importExcel') }}" enctype="multipart/form-data">
                                    @csrf
                                    
                                    {{-- <div class="input-group">
                                        <div class="custom-file">
                                          <input name="excel_file" type="file" class="custom-file-input" id="exampleInputFile">
                                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                        
                                          <button type="submit" name="upload" class="btn btn-sm btn-success"><i class="far fa-file-excel"></i> Upload data</button>
                                        </div>
                                    </div> --}}
                                    
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input name="excel_file" type="file" 
                                                    class="custom-file-input @error('excel_file') is-invalid @enderror"
                                                    id="excel_file">
                                            @error('excel_file')
                                                <span class="invalid-feedback">{!! $errors->first('excel_file') !!}</span>
                                            @enderror
                                            <label class="custom-file-label" for="excel_file">Chọn .xls .xlsx</label>
                                        </div>
                                        <hr>
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-success"><i class="far fa-file-excel"></i> Upload Data</button>
                                        </div>                                        
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                        <div class="card-body">

                            
                            @if ($errors->any())
                                
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    @foreach ($errors->all() as $error)
                                        <strong>Hi!</strong>{{ $error }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <br>
                                    @endforeach
                                </div>
                                
                            @endif

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
