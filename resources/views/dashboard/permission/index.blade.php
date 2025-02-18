@extends('dashboard.master')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">








                <div class="text-end">
                    <a href="{{ route('permission.create') }}" class="btn btn-primary">Create</a>
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
                        @foreach ($permissions as $p)
                            <tr>
                                <td>{{ $p->id }}</td>
                                <td>{{ $p->name }}</td>
                                <td>
                                    <a href="{{ route('permission.show', $p->id) }}" class="btn btn-warning mt-2">Show</a>
                                    <a href="{{ route('permission.edit', $p->id) }}" class="btn btn-success mt-2">Edit</a>
                                    <form action="{{ route('permission.destroy', $p->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger mt-2" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-3"></div>
                {{ $permissions->links() }}









            </div>
        </div>
    </div>
@endsection
