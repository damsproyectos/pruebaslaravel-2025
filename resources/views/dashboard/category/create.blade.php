@extends('dashboard.master')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">



            @include('dashboard.fragment._errors-form')
            <h5><b>Create</b></h5> <br>
            <form action="{{ route('category.store') }}" method="POST">
                @include('dashboard.category._form')
                {{-- @csrf
                <label for="title">Title</label>
                <input type="text" name="title">

                <label for="slug">Slug</label>
                <input type="text" name="slug">

                <button type="submit">Send</button> --}}
            </form>




        </div>
    </div>
</div>







@endsection
