@if (session('message_success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
        <i class="fa fa-check-circle"></i>  {{ session('message_success') }}
    </div>
@endif
@if (session('message_error'))ы
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
        <i class="fa fa-times-circle"></i>  {{ session('message_error') }}
    </div>
@endif