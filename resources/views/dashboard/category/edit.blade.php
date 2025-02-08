@extends('dashboard.master')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">



            @include('dashboard.fragment._errors-form')
            <h5><b>Edit</b></h5>
            <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data"> {{--enctype="multipart/form-data" lo debo colocar para que me habilite el formulario para la carga de archivos o imagen---}}
                @method('PATCH')
                @include('dashboard.category._form',["task" => "edit"])
                {{-- @csrf
                <label for="title">Title</label>
                <input type="text" name="title" value="{{ $category->title }}">

                <label for="slug">Slug</label>
                <input type="text" name="slug" value="{{ $category->slug }}">

                <button type="submit">Send</button>
                <a href="{{ route('category.index') }}"><b>Back</b></a> --}}
            </form>




        </div>
    </div>
</div>







@endsection
