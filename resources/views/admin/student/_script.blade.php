

@section('styles')
    
@endsection



@section('scripts')

    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/1.10.21/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-select/js/1.3.1/dataTables.select.min.js"></script>

    {{-- <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script> --}}


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
        **  Dua du lieu den cac input
        */

        $('#edit-student').on('show.bs.modal', function (event) {

            var button = $(event.relatedTarget); // Button that triggered the modal
            var name = button.data('name'); // Extract info from data-* attributes
            var gender = button.data('gender');
            var image_student = button.data('image_student');
            var birthday = button.data('birthday');
            var point = button.data('point');
            console.log(image_student);
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

            var modal = $(this)
            // modal.find('.modal-title').text('New message to ' + name)
            modal.find('.modal-body #name').val(name);
            modal.find('.modal-body #gender').val(gender);
            // modal.find('.modal-body #image').val(image);
            modal.find('.modal-body #birthday').val(birthday);
            modal.find('.modal-body #point').val(point);
        });




        $('#checkedAll').change(function(){
            $('.checkbox').prop("checked", $(this).prop('checked'));
        });
        $('#deleteAll').on('click', function(){
            var id = $('.checkbox:checked').map(function(){
                return $(this).val();
            }).get();

            console.log((id));

            var url = "{{ route('admin.student.destroyMulti') }}";

            $.ajax({
                url: "{{ route('admin.student.destroyMulti') }}",
                type:  'DELETE',
                data: { "ids":id, "_token":"{{csrf_token()}}"  },
                success: function( result ){
                    console.log(result);
                    // if(result == "Oke" ){

                    //     var count_temp = parseInt(rate_count.text())+1;
                    //     rate_count.html(parseInt(count_temp));

                    //     var imdb_last = (rate_total+score)/count_temp;
                    //     rate_imdb.html(parseFloat(imdb_last.toFixed(1)));

                    //     alert('Cảm ơn bạn đã đánh giá!');
                    // }
                    // if( result == "Fails"){
                    //     alert('Bạn đã đánh giá rồi! Xin đừng đánh giá nữa.');

                    // }
                }
            });

        });


        
    </script>
@endsection



