@extends('dashboard.master')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">





            @include('dashboard.fragment._errors-form') {{----Muestra los errores del Formulario------}}

            <h2>Edit</h2>
            <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data"> {{----enctype="multipart/form-data" = me sirve para carga de archivos de imagen----}}
                @method('PATCH')


                {{-- @csrf

                <label for="title">Title</label>
                <input type="text" name="title" value="{{ $post->title }}">

                <label for="slug">Slug</label>
                <input type="text" name="slug" value="{{ $post->slug }}">

                <label for="description">Description</label>
                <textarea name="description">{{ $post->description }}</textarea>

                <label for="content">Content</label>
                <textarea name="content">{{ $post->content }}</textarea>

                <label for="posted">Posted</label>
                <select name="posted">
                    <option {{ $post->posted == 'not' ? 'selected' : '' }} value="not">Not</option>
                    <option {{ $post->posted == 'yes' ? 'selected' : '' }} value="yes">Yes</option>
                </select>

                <label for="category_id">Category</label>
                <select name="category_id">
                    @foreach ($categories as $title => $id)
                        <option {{ $post->category->id == $id ? 'selected' : ''}} value="{{ $id }}">{{ $title }}</option>
                    @endforeach
                </select>

                <button type="submit">Send</button>
                <a href="{{ route('post.index') }}">Back</a> --}}

                @include('dashboard.post._form', [ 'task'=>'edit' ]) {{---task está relacionado con la carga de imagen ----}}
            </form>



        </div> <!--END row-->
    </div> <!---END container-fluid-->
</div> <!--  END content-body -->
@endsection
