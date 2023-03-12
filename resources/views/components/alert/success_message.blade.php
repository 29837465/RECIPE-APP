@if ($message = Session::get('success'))
    <div class="">
        <p>{{ $message }}</p>
    </div>
@endif