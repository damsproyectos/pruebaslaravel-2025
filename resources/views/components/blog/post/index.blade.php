<div class="card card-white py-2">
    <br>

    {{-- <h2><b>{{ $slot }}</b></h2> <br> --}}
    @if (isset($header))
        <h2><b>{{ $header }}</b></h2> <br>
    @endif

    @foreach ($posts as $p)
        <div class="card card-white px-5 pt-2">
            <h3>{{ $p->title }}</h3>

            <a href="{{ route('blog.show', $p) }}">Ir</a>

            <img src="/uploads/posts/{{ $p->image }}" style="width:250px" alt="{{ $p->title }}"><br>
            <p>{{ $p->image }}</p>

            <p>{{ $p->description }}</p>
        </div>
    @endforeach
    <br>

    @if (isset($extra))
        <h2><b>{{ $extra }}</b></h2> <br>
    @endif

    @if (isset($footer))
        <h2><b>{{ $footer }}</b></h2> <br>
    @endif

    <div class="mt-3">
        {{ $posts->links() }} {{---Paginación---}}
    </div>
</div>
