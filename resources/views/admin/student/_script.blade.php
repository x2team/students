


@section('scripts')
    <!-- DataTables from AdminLTE -->
    {{-- <script src="https://adminlte.io/themes/v3/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script> --}}

    <!-- DataTables -->
    {{-- <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.5/js/responsive.bootstrap4.min.js"></script> --}}

    <!-- Datatables FULL -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.21/r-2.2.5/datatables.min.js"></script>
    <!-- Datatables Select -->
    <script type="text/javascript" src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>

   

    <!-- Select2 -->
    <script src="plugins/select2/js/select2.full.min.js"></script>

    <!-- Toastr Alert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    
    <!-- Toastr js from Adminto -->
    {{-- <script src="https://coderthemes.com/adminto/layouts/vertical/assets/libs/toastr/toastr.min.js"></script> --}}
    {{-- <script src="https://coderthemes.com/adminto/layouts/vertical/assets/js/pages/toastr.init.js"></script> --}}


    <!-- Jasnybootstrap 4.0.0 : Tao vien cho Khung hinh -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/4.0.0/js/jasny-bootstrap.min.js"></script>

    <!-- Lazyload@2.0.0-rc.2 -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script> --}}

    <!-- InputMask -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>


    <script type="text/javascript">
        //dataTables
        // $("#student").DataTable({
        //         "lengthMenu": [10, 25, 52],
        //         "language": {
        //             "paginate": {
        //                 "previous": "Trước",
        //                 "next": "Sau",
        //             },
        //             "lengthMenu": "Hiện _MENU_ tin trên trang",
        //             "search":         "Tìm kiếm:",
        //             "info": "Hiển thị _START_ to _END_ của _TOTAL_ sinh viên",
        //         },
        //         responsive:  {
        //             breakpoints: [
        //                 {name:       'bigdesktop',   width: Infinity},
        //                 {name:       'meddesktop',   width: 1480},
        //                 {name:       'smalldesktop', width: 1280},
        //                 {name:       'medium',       width: 1188},
        //                 {name:       'tabletl',      width: 1024},
        //                 {name:       'btwtabllandp', width: 848},
        //                 {name:       'tabletp',      width: 768},
        //                 {name:       'mobilel',      width: 480},
        //                 {name:       'mobilep',      width: 320}
        //             ]
        //         },
        //         "paging": true,
        //         "lengthChange": false,
        //         "searching": true,
        //         // "ordering": false,
        //         "info": true,
        //         "autoWidth": false,
        //         // "responsive": true,
                
        //         "columnDefs": [
        //             { "orderable": true, "targets": 0, "searchable": false,   },
        //             { "orderable": false, "targets": 1, "searchable": false },
        //             { "orderable": false, "targets": 4, "searchable": false },
        //             { "orderable": false, "targets": 8, "searchable": false },
                    
        //             { "className": "text-center", "targets": [0,1,4,8], },
        //             // { "className": "text-center", "targets": "_all" },
        //         ],
        //         "order": [[ 7 , 'DESC']],
        //         // "serverSide": true,
        //         // "select": true,
        //         "processing": true,
        //         "deferLoading": 34,
        // });

        var table = $('#student').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('admin.student.index') }}",
            },
            columns: [
                {data: 'id', orderable: false, className: "text-center"},
                {data: 'name'},
                {data: 'gender', className: "text-center"},
                {data: 'image'},
                {data: 'point'},
                {data: 'birthday'},
                {data: 'updated_at'},
                {data: 'action', orderable: false, className: "text-center", searchable: false},
            ],

            "order": [[ 0 , 'DESC']],
            responsive:  {
                breakpoints: [
                    {name:       'bigdesktop',   width: Infinity},
                    {name:       'meddesktop',   width: 1480},
                    {name:       'smalldesktop', width: 1280},
                    {name:       'medium',       width: 1188},
                    {name:       'tabletl',      width: 1024},
                    {name:       'btwtabllandp', width: 848},
                    {name:       'tabletp',      width: 768},
                    {name:       'mobilel',      width: 480},
                    {name:       'mobilep',      width: 320}
                ],
                details: {
                    display: $.fn.dataTable.Responsive.display.modal( {
                        header: function ( row ) {
                            var data = row.data();
                            return 'Details for '+data[0]+' '+data[1];
                        }
                    } ),
                    renderer: $.fn.dataTable.Responsive.renderer.tableAll()
                }
            },
            // responsive: true,
            autoWidth: false,
            deferRender: true

        });
        
        
        /**
         * Button Delete - Server-Side
         */
        $('#student').on('click', '.btn-delete[data-remove]', function (e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            let url = $(this).data('remove');
            
            if(window.confirm("Bạn chắc chưa?")){
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    // dataType: 'json',
                    data: {method: '_DELETE', submit: true, },
                    success: function(result){
                        setTimeout( function () {
                            table.ajax.reload();
                        }, 3000 );
                        toastr.success('Bạn đã xóa dữ liệu thành công', { timeout:3000});
                    },
                    error: function( error ){
                        alert('Đã có lỗi khi xóa phim. Xóa thất bại');
                        console.log(error);
                    }
                }).always(function (data) {
                    $('#student').DataTable().draw(false);
                });
            }
            else{
                return false;
            }
        })
        /**
         * Button Edit : Server-Side
         */
        .on('click', '.edit', function(){
            var id = $(this).attr('id');
            $.ajax({
                url: "{{ route('admin.student.fetchdata') }}",
                method: 'GET',
                dataType: 'json',
                data: {id: id},
                success: function(data){
                    console.log(data);
                    $('#name').val(data.name);
                    $('#gender').val(data.gender);
                    var image_url = 'storage/' + data.image;
                    $('#image').attr("src", '{!! asset("'+image_url+'") !!}');
                    $('#birthday').val(data.birthday);
                    $('#point').val(data.point);
                    $('#id').val(data.id);

                    $('#edit-student').modal('show');
                    $('.modal-title').text('Edit Student');
                    // $('#action').val('Edit');
                    // $('#button_action').val('update');
                },
                error: function( error ){
                    alert('Đã có lỗi khi edit');
                    console.log(error);
                }
            });
        });

        /**
         * Submit Form #edit-modal
         */
         $('#edit-modal').on('submit', function(event){
            event.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var form_data = $(this).serialize();
            var id = $('#id').val();
            // let myForm = document.getElementById('#edit-modal');
            // let formData = new FormData(myForm);
            // console.log(formData);
            $.ajax({
                url: "{{ route('admin.student.update', "+id+") }}",
                method: "PUT",
                data: form_data,
                // dataType:"json",
                success: function(data){
                    
                    if($.isEmptyObject(data.errors)){
                        $('#edit-student').modal('hide');
                        setTimeout( function () {
                            table.ajax.reload();
                        }, 3000 );
                        toastr.success('Edit dữ liệu thành công', { timeout:3000});
                    }else{
                        printErrorMsg(data.errors);
                    }


                },
                error: function( errors ){
                    alert('Đã có lỗi khi khi submit to edit');
                    console.log(errors);
                }
            });
        });
        function printErrorMsg (msg) {
            // $(".alert-danger").find("ul").html('');
            // $(".alert-danger").css('display','block');
            $.each( msg, function( key, value ) {                
                $("#"+key).addClass('is-invalid');                
                $("#"+key).parent().find('.invalid-feedback').text(value);
            });
        }


        /**
         * Button Edit with Modal using Bootstrap
         */
        // $('#edit-student').on('show.bs.modal', function (event) {
        //     var button = $(event.relatedTarget); // Button that triggered the modal
        //     var name = button.data('name'); // Extract info from data-* attributes
        //     var gender = button.data('gender');
        //     var image_student = button.data('image_student');
        //     var birthday = button.data('birthday');
        //     var point = button.data('point');
        //     var id = button.data('id');

        //     console.log(image_student);

        //     var modal = $(this)
        //     // modal.find('.modal-title').text('New message to ' + name)
        //     modal.find('.modal-body #name').val(name);
        //     modal.find('.modal-body #gender').val(gender);
        //     modal.find('.modal-body #image').attr('src', image_student);
        //     modal.find('.modal-body #birthday').val(birthday);
        //     modal.find('.modal-body #point').val(point);
        //     modal.find('.modal-body #studentid').val(id);
        // });




        /**
         * Datemask dd/mm/yyyy
         */
        $('#birthday').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' });


        /**
         * Initialize Select2 Elements
         */
        $('#gender').select2({
            theme: 'bootstrap4'
        });



        /**
         * Button Delete All
         */
        $('#checkedAll').change(function(){
            $('.checkbox').prop("checked", $(this).prop('checked'));
        });
        $('#deleteAll').on('click', function(){
            var id = $('.checkbox:checked').map(function(){
                return $(this).val();
            }).get();

            var url = "{{ route('admin.student.destroyMulti') }}";
            if(window.confirm("Bạn có chắc chắn với lựa chọn của mình chưa?")){
                $.ajax({
                    url: "{{ route('admin.student.destroyMulti') }}",
                    type:  'DELETE',
                    data: { "ids":id, "_token":"{{csrf_token()}}"  },
                    success: function( result ){
                        if(result){
                            // $("#student").DataTable().ajax.reload();
                            setTimeout( function () {
                                table.ajax.reload();
                            }, 3000 );
                            toastr.success('Bạn đã xóa dữ liệu thành công', { timeout:5000});
                            // location.reload();
                        }
                    }
                });
            }else{
                return false;
            }


            
            

        });


        
    </script>
@endsection



