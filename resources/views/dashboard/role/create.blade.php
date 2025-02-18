@extends('dashboard.master')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">




                @include('dashboard.fragment._errors-form')

                <div class="mb-4">
                    <h2>Create</h2>
                </div>

                <form action="{{ route('role.store') }}" method="POST">
                    @include('dashboard.role._form')
                </form>





            </div>
        </div>
    </div>
@endsection



