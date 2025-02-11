@extends('blog.master')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">




            <h3><b>Show Blog</b></h3>

           {{-- <div class="card card-white py-2">
                <h1>{{ $post->title }}</h1><br>

                <img src="/uploads/posts/{{ $post->image }}" style="width:250px" alt="{{ $post->title }}"><br>
                <p>{{ $post->image }}</p> <hr>
                <span>{{ $post->category->title }}</span>

                <hr>
                {{ $post->content }}

                <div class="mt-4 text-end">
                    <a class="btn btn-secondary" href="{{ route('blog.index') }}">Back</a>
                </div>
           </div> --}}

           {{-- <x-card class="bg-blue-600"> --}}
           <x-card :bg="true">
             Contenido Dinamico
           </x-card>

           <x-card class="bg-yellow-600" :bg="false">
             Contenido Dinamico
            </x-card>

           {{-- <x-blog.show :post="$post"></x-blog.show> --}}
           <x-blog.post.show :post="$post" />



        </div>
    </div>
</div>
@endsection
