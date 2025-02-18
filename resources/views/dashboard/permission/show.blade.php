@extends('dashboard.master')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">






                <div class="mb-3">
                    <h2>Show</h2>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$permission->id}}</td>
                            <td>{{$permission->name}}</td>
                        </tr>
                    </tbody>
                </table>
                <div>
                    <a href="{{ route('permission.index') }}" class="btn btn-secondary mt-2">Back</a>
                </div>





            </div>
        </div>
    </div>
@endsection
