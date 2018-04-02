@if(Session::has('alert'))
    <p class="alert alert-danger">
        {{ Session::get('alert') }}
    </p>

    <hr>
@endif

@if (Session::has('success'))
    <p class="alert alert-success">
        {{ Session::get('success') }}
    </p>

    <hr>
@endif