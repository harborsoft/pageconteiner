@if(Session::has('message'))
    <div class="alert {{ Session::get('alert-class', 'alert-success') }} d-flex" role="alert">
        <div class="d-flex flex-column me-auto">{{ Session::get('message') }}</div>
        <div class="d-flex flex-column"><a href="{{ route(Session::get('route')) }}" class="btn-primary btn">Назад</a></div>
    </div>
@endif
