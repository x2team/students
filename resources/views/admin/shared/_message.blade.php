@if(session('message-success'))
    <div class="alert alert-success alert-dismissible fade in" role="alert">
        <strong>Hi!</strong> {{ session('message-success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif