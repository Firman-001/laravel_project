@if (Session::has('success'))
    <div class="p-5">
        <div class="alert alert-success">
            {{ session::get('success') }}
        </div>
    </div>
@endif
@if ($errors->any())
    <div class="p-5">
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    </div>

@endif
