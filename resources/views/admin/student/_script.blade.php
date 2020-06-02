

@section('styles')
    
@endsection



@section('scripts')

    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>


    <script type="text/javascript">
        //dataTables
        $("#student").DataTable({
                "lengthMenu": [10, 25, 50, "All"],
                // "order": [[ 6 , 'DESC']],
                "language": {
                    "paginate": {
                        "previous": "Trước",
                        "next": "Sau",
                    }
                }
        });


        $('#edit-student').on('show.bs.modal', function (event) {

            var button = $(event.relatedTarget); // Button that triggered the modal
            var name = button.data('name'); // Extract info from data-* attributes
            var gender = button.data('gender');
            var image = button.data('image');
            var birthday = button.data('birthday');
            var point = button.data('point');
            console.log(image);
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

            var modal = $(this)
            // modal.find('.modal-title').text('New message to ' + name)
            modal.find('.modal-body #name').val(name);
            modal.find('.modal-body #gender').val(gender);
            modal.find('.modal-body #image').val(image);
            modal.find('.modal-body #birthday').val(birthday);
            modal.find('.modal-body #point').val(point);
        })
        
    </script>
@endsection



