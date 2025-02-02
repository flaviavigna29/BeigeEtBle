@if ($errors->any())
<div class="row">
    <div class="alert alert-danger mb-0 d-flex flex-column justify-content-center align-items-center">
        <ul class="my-1 list-unstyled Roboto">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

</div>
@endif

