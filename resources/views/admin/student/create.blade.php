@extends('layouts.admin.main')


@section('styles')
    <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

  <!-- Jasnybootstrap 4.0.0 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/4.0.0/css/jasny-bootstrap.min.css">

@endsection



@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add New Student</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <form id="student-form" action="{{ route('admin.student.store')}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                
                @include('admin.student._form', ['btnText' => 'Create New student'])

            </div>
        </div>
    </section>
    </form>
</div>
@endsection

@section('scripts')
    <!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>

<!-- Jasnybootstrap 4.0.0 : Tao vien cho Khung hinh -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/4.0.0/js/jasny-bootstrap.min.js"></script>

<!-- Lazyload@2.0.0-rc.2 -->
<script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>

<!-- InputMask -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>

<script>
    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
</script>


@endsection
