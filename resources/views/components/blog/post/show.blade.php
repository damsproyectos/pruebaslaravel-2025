<div class="card card-white py-2">
    {{-- {{ $changeTitle() }} --}}

    <h1>{{ $post->title }}</h1><br>

    <img src="/uploads/posts/{{ $post->image }}" style="width:250px" alt="{{ $post->title }}"><br>
    <p>{{ $post->image }}</p> <hr>
    <span>{{ $post->category->title }}</span>

    <hr>
    {{ $post->content }}

    <div class="mt-4 text-end">
        <a class="btn btn-secondary" href="{{ route('blog.index') }}">Back</a>
    </div>
</div>
