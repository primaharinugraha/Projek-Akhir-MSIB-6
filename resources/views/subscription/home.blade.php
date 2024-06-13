@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

Berlangganan: {{ auth()->user()->profile->premium ? "Ya" : "Tidak" }}

@if(auth()->user()->profile->premium)
    <form method="post" action="{{ route('subscription.cancel') }}">
        @csrf
        <button type="submit">Cancel</button>
    </form>
@else
    <form method="post" action="{{ route('subscription.subscribe') }}">
        @csrf
        <button type="submit">Subscribe</button>
    </form>
@endif