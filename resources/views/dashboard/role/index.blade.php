@extends('dashboard.master')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">









                <div class="text-end">
                    <a class="btn btn-primary my-3" href="{{ route('role.create') }}">Create</a>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $r)
                            <tr>
                                <td>{{ $r->id }}</td>
                                <td>{{ $r->name }}</td>
                                <td>
                                    <a class="btn btn-warning mt-2" href="{{ route('role.show', $r->id) }}">Show</a>
                                    <a class="btn btn-success mt-2" href="{{ route('role.edit', $r->id) }}">Edit</a>
                                    <form action="{{ route('role.destroy', $r->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger mt-2" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-3"></div>
                {{ $roles->links() }}








            </div>
        </div>
    </div>
@endsection
