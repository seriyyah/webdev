@if($errors->any())
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if(session('success'))
<button type="button" class="close" data-dismiss="alert">x</button>
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

