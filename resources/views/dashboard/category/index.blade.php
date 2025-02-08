@extends('dashboard.master')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">




            <div class="text-end">
               <a class="btn btn-primary" href="{{ route('category.create') }}">Create</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Image</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $c)
                        <tr>
                            <td>{{ $c->id }}</td>
                            <td>{{ $c->title }}</td>
                            <td>{{ $c->slug }}</td>
                            <td>
                                <img src="/uploads/categories/{{ $c->image }}" style="width:100px" alt="{{ $c->title }}"><br>
                                {{ $c->image }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ route('category.edit', $c->id) }}">Edit</a>
                                <a class="btn btn-warning" href="{{ route('category.show', $c->id) }}">show</a>
                                <form class="inline" action="{{ route("category.destroy", $c->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-3">
                {{ $categories->links() }}
            </div>





        </div>
    </div>
</div>







@endsection
