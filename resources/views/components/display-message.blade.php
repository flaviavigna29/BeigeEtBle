@if (session('message'))
    <div class="row">
        <div class="col-12 d-flex justify-content-start align-items-center mb-3">
            <div id="flash-message"
                class="alert alert-success mb-0">
                {{ session('message') }}
            </div>
        </div>
    </div>
@endif


<script>
    let message = document.querySelector('#flash-message')
    setTimeout(() => {
        message.remove()
    }, 4000);
</script>
