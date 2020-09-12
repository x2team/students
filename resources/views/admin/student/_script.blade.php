


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
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    
    <!-- Datatables Select -->
    <script type="text/javascript" src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
    <!-- Datatables Search Highlight -->
    <script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.21/features/searchHighlight/dataTables.searchHighlight.min.js"></script>
    <script type="text/javascript" src="https://bartaz.github.io/sandbox.js/jquery.highlight.js"></script>
    <!-- Datatables Responsive -->
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.5/js/responsive.bootstrap4.min.js"></script>
    <!-- Datatables Buttons -->
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.bootstrap4.min.js"></script>
    
    <!-- Datatables Buttons - Column visibility control -->
    {{-- <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.colVis.min.js"></script>
    <!-- Datatables Buttons - Flash export buttons -->
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
    <!-- Datatables Buttons - HTML5 export buttons -->
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
    <!-- Datatables Buttons - Print button -->
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script> --}}

    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
    

    <!-- Datatables ColReorder -->
    <script type="text/javascript" src="https://cdn.datatables.net/colreorder/1.5.2/js/dataTables.colReorder.min.js"></script>






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
    <!-- bs-custom-file-input -->
    <script src="http://students.test/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>


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
        
        /**
         * Full Options
         */
        var table = $('#student').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('admin.student.index') }}",
            },
            columns: [
                // {data: 'id', orderable: false, searchable: false, className: "text-center", target: 0 },
                {data: 'id', searchable: false, orderable: false, className: "text-center"},
                {data: 'checkall', orderable: false, className: "text-center"},
                {data: 'name'},
                {data: 'gender', className: "text-center", searchable: false},
                {
                    data: 'image',
                    name: 'image',
                    render: function(data, type, full, meta){
                        return '<img src={!! asset("storage/'+data+'") !!} width="50" style="height:50px !important" class="img-thumbnail" />';
                    },
                    searchable: false
                },
                {data: 'point', searchable: false},
                {data: 'birthday', searchable: false},
                {data: 'updated_at', searchable: false},
                {data: 'filename', searchable: false},
                {data: 'action', orderable: false, className: "text-center", searchable: false},
            ],

            // columns: [
            //     {data: 'name'},
            //     {data: 'gender', className: "text-center"},
            // ],

            "order": [[ 1 , 'DESC']],
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
            },
            // responsive: true,
            autoWidth: false,
            lengthMenu: [
                [ 10, 25, 50, -1 ],
                [ '10', '25', '50', 'All' ]
            ],

            /**
             * Buttons: Copy, Excel, PDF, Print
             */
            // dom: 'Blfrtip',
            // buttons: [
            //     {
            //         extend: "copyHtml5",
            //         className: "btn-sm btn-outline-success",
            //         titleAttr: 'Copy all',
            //         text: 'copy',
            //         init: function(api, node, config) {
            //             $(node).removeClass('btn-default btn-secondary');
            //         },
                    
            //     },
            //     {
            //         extend: "excel",
            //         className: "btn-sm btn-outline-success",
            //         titleAttr: 'Export in Excel',
            //         text: '<i class="fas fa-file-excel"></i>Excel',
            //         title: 'DataExcel',
            //         init: function(api, node, config) {
            //             $(node).removeClass('btn-default btn-secondary');
            //         },
            //         exportOptions: {
            //             modifier: {
            //                 search: 'applied',
            //                 order: 'applied'
            //             }
            //         }
            //     },
            //     {
            //         extend: "pdfHtml5",
            //         className: "btn-sm btn-outline-success",
            //         titleAttr: 'Pdf Html5',
            //         text: 'PDF',
            //         init: function(api, node, config) {
            //             $(node).removeClass('btn-default btn-secondary');
            //         }
            //     },
            //     {
            //         extend: "print",
            //         className: "btn-sm btn-outline-success",
            //         titleAttr: 'Print',
            //         text: '<i class="fas fa-print"></i>Print',
            //         init: function(api, node, config) {
            //             $(node).removeClass('btn-default btn-secondary');
            //         }
            //     }
            // ]
        });


        /**
         * Search HighLight
         */
        table.on('draw', function () {
            var body = $( table.table().body() );
    
            body.unhighlight();
            body.highlight( table.search() );  
        });
        /**
         * Index Column : 1, 2, 3, ...
         */
         table.on( 'order.dt search.dt', function () {
                table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                    cell.innerHTML = i+1;
                } );
            } ).draw();
        
        
        
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
                type: 'GET',
                dataType: 'json',
                data: {id: id},
                success: function(data){

                    $('#name').val(data.name);
                    $('#gender').val(data.gender);
                    // $('#gender').attr(data.gender);

                    var image_url = "{{ asset('storage/:data.image') }}";
                    image_url = image_url.replace(':data.image', data.image);

                    $('.fileinput-preview').parent().find('img').attr('src', image_url);
                    $('img#student_image').attr("src", image_url);
                    $('#birthday').val(data.birthday);
                    $('#point').val(data.point);
                    $('#id').val(data.id);

                    $('#edit-student').modal('show');
                    $('.modal-title').text('Edit Student');

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
            // var form_data = $(this).serialize();
            var id = $('#id').val();

            var formData = new FormData(document.getElementById('edit-modal'));
            
            // var formData = new FormData();
            // formData.set('image', $('input[type=file]')[0].files[0], 'abc.jpg');
            
            var url = "{{ route('admin.student.update', ':id') }}";
            url = url.replace(':id', id);

            $.ajax({
                url: url,
                type: "POST",
                data: formData,
                dataType: 'json',
                enctype: 'multipart/form-data',
                cache: false,
                contentType: false,
                processData: false,
                success: function(data){
                    if($.isEmptyObject(data.errors)){
                        $('#edit-student').modal('hide');
                        table.ajax.reload();
                        // setTimeout( function () {
                        //     table.ajax.reload();
                        // }, 3000 );
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
        // $('#gender').select2({
        //     theme: 'bootstrap4'
        // });



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

        
        $(document).ready(function () {
            bsCustomFileInput.init();
        });


        
    </script>
@endsection



