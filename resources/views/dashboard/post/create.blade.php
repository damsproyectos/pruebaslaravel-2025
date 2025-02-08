@extends('dashboard.master')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">





            @include('dashboard.fragment._errors-form') {{----Muestra los errores del Formulario------}}

            <h4>Create</h4>
            <form action="{{ route('post.store') }}" method="POST">

                {{--@csrf

                <label for="title">Title</label>
                <input type="text" name="title">

                <label for="slug">Slug</label>
                <input type="text" name="slug">

                <label for="description">Description</label>
                <textarea name="description"></textarea>

                <label for="content">Content</label>
                <textarea name="content"></textarea>

                <label for="posted">Posted</label>
                <select name="posted">
                    <option value="not">Not</option>
                    <option value="yes">Yes</option>
                </select>

                <label for="category_id">Category</label>
                <select name="category_id">
                    @foreach ($categories as $title => $id)
                        <option value="{{ $id }}">{{ $title }}</option>
                    @endforeach
                </select>

                <button type="submit">Send</button>
                <a href="{{ route('post.index') }}">Back</a> --}}

                @include('dashboard.post._form')
            </form>



        </div> <!--END row-->
    </div> <!---END container-fluid-->
</div> <!--  END content-body -->
@endsection
