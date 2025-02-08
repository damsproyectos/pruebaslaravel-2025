@extends('dashboard.master')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">




            <h4><b><center>Show</center></b></h4>
            <h5><b>{{ $category->title }}</b></h5>
            <table>
                <thead>
                    <tr>
                        <td>id</td>
                        <td>Title</td>
                        <td>Slug</td>
                        <td>Image</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><span>{{ $category->id }}</span></td>
                        <td><span>{{ $category->title }}</span></td>
                        <td><span>{{ $category->slug }}</span></td>
                        <td>
                            <img src="/uploads/categories/{{ $category->image }}" style="width:200px" alt="{{ $category->title }}"><br>
                            {{ $category->image }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div>
                <a class="btn btn-secondary" href="{{ route('category.index') }}"><b>Back</b></a>
            </div>






        </div>
    </div>
</div>







@endsection
