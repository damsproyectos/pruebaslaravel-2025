@extends('dashboard.master')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">





                <div class="mb-4">
                    <h2><b>{{ $role->name }}</b></h2>
                </div>
                {{-- <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $role->id }}</td>
                            <td>{{ $role->name }}</td>
                        </tr>
                    </tbody>
                </table> --}}

                <x-dashboard.role.permission.manage :role="$role" />
                {{-- <x-dashboard.role.permission.manage :role="$role"><x-dashboard.role.permission.manage/> --}}

                <div class="mt-2">
                    <a href="{{ route('role.index') }}" class="btn btn-secondary">Back</a>
                </div>







            </div>
        </div>
    </div>
@endsection
