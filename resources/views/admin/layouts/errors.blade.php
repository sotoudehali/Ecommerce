@if($errors->any())
    <ul>
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error )
        <li>{{ $error }}</li>
        @endforeach
    </div>
    </ul>
@endif