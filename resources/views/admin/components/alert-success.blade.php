@if ($message = Session::get('success'))
    <div class="row">
        <div class="alert alert-success">
            <p style="text-align: start">{{ $message }} </p>
        </div>
    </div>
@endif
