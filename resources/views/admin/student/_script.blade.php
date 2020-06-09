


@section('scripts')

    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/1.10.21/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-select/js/1.3.1/dataTables.select.min.js"></script>

    {{-- <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script> --}}

    <!-- Toastr Alert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- Select2 -->
    <script src="plugins/select2/js/select2.full.min.js"></script>

    <!-- Jasnybootstrap 4.0.0 : Tao vien cho Khung hinh -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/4.0.0/js/jasny-bootstrap.min.js"></script>

    <!-- Lazyload@2.0.0-rc.2 -->
    <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>

    <!-- InputMask -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>


    <script type="text/javascript">
        //dataTables
        $("#student").DataTable({
                "lengthMenu": [10, 25, 52, "All"],
                // "order": [[ 6 , 'DESC']],
                "language": {
                    "paginate": {
                        "previous": "Trước",
                        "next": "Sau",
                    },
                    "lengthMenu": "Hiện _MENU_ tin trên trang",
                    "search":         "Tìm kiếm:",
                    "info": "Hiển thị _START_ to _END_ của _TOTAL_ sinh viên",
                },
                // columnDefs: [ {
                //     orderable: false,
                //     className: 'select-checkbox',
                //     targets:   0
                // } ],
                // select: {
                //     style:    'multi',
                //     selector: 'td:first-child'
                // },

        });


        /**
        **  Edit modal
        */
        $('#edit-student').on('show.bs.modal', function (event) {

            var button = $(event.relatedTarget); // Button that triggered the modal
            var name = button.data('name'); // Extract info from data-* attributes
            var gender = button.data('gender');
            var image_student = button.data('image_student');
            var birthday = button.data('birthday');
            var point = button.data('point');
            var id = button.data('id');

            console.log(image_student);

            var modal = $(this)
            // modal.find('.modal-title').text('New message to ' + name)
            modal.find('.modal-body #name').val(name);
            modal.find('.modal-body #gender').val(gender);
            modal.find('.modal-body #image').attr('src', image_student);
            modal.find('.modal-body #birthday').val(birthday);
            modal.find('.modal-body #point').val(point);
            modal.find('.modal-body #studentid').val(id);
        });

        // var table = $('#student').DataTable();
        //     table.on('click', '.edit', function(){
        //         $tr = $(this).closest('tr');
        //         if($($tr).hasClass('child')){
        //             $tr = $tr.prev('.parent');
        //         }

        //         var data = table.row($tr).data();
        //         console.log(data);
        //     });



        //Datemask dd/mm/yyyy
        $('#birthday').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' });

        //Initialize Select2 Elements
        $('#gender').select2({
            theme: 'bootstrap4'
        })





        // Delete all button
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
                        console.log(result);
                        if(result){
                            toastr.success('Bạn đã xóa dữ liệu thành công');
                            // $("#student").DataTable().ajax.reload();
                            location.reload();

                        }
                    }
                });
            }else{
                return false;
            }


            
            

        });


        
    </script>
@endsection



