@extends('dashboard.master')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">







                @include('dashboard.fragment._errors-form')

                <div class="mb-4">
                    <h2>Edit</h2>
                </div>

                <form action="{{ route('role.update', $role->id) }}" method="POST">
                    @method('PATCH')
                    @include('dashboard.role._form', [ 'task'=>'edit' ])
                </form>









            </div>
        </div>
    </div>
@endsection
