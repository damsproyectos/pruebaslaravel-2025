@extends('dashboard.master')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">




           <div class="text-end">
                <a class="btn btn-primary my-2" href="{{ route('post.create') }}">Create</a>
           </div>

            <table class="table">
                <thead>
                    <tr>
                        <th>
                            <b>Id</b>
                        </th>
                        <th>
                            <b>Title</b>
                        </th>
                        <th>
                            <b>Description</b>
                        </th>
                        <th>
                            <b>Image</b>
                        </th>
                        <th>
                            <b>Posted</b>
                        </th>
                        <th>
                            <b>Category</b>
                        </th>
                        <th>
                            <b>Options</b>
                        </th>
                </thead>
                <tbody>
                    @foreach ($posts as $p)
                        <tr>
                            <td>
                                {{ $p->id }}
                            </td>
                            <td>
                                {{ $p->title }}
                            </td>
                            <td>
                                {{ $p->description }}
                            </td>

                            <td>
                                <img src="/uploads/posts/{{ $p->image }}" style="width:100px; height:70px" alt="{{ $p->title }}"><br>
                                {{ $p->image }}
                            </td>

                            <td>
                                {{ $p->posted }}
                            </td>
                            <td>
                                {{ $p->category->title }}
                            </td>

                            <td>
                                <a class="btn btn-warning mt-2" href="{{ route('post.show', $p->id) }}">Show</a>
                                <a class="btn btn-success mt-2" href="{{ route('post.edit', $p->id) }}">Edit</a>
                                <form class="inline" action="{{ route('post.destroy', $p->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger mt-2" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-3">
                {{ $posts->links() }} {{---Paginación---}}
            </div>

        </div> <!--END row-->
    </div> <!---END container-fluid-->
</div> <!--  END content-body -->
@endsection
