@extends('dashboard.master')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">




            <h2>{{ $post->title }}</h2>
            <table>
                <thead>
                    <tr>
                        <td>
                            <b>Id</b>
                        </td>
                        <td>
                            <b>Title</b>
                        </td>
                        <td>
                            <b>Description</b>
                        </td>
                        <td>
                            <b>Image</b>
                        </td>
                        <td>
                            <b>Posted</b>
                        </td>
                        <td>
                            <b>Category</b>
                        </td>
                </thead>
                <tbody>
                        <tr>
                            <td>
                                {{ $post->id }}
                            </td>
                            <td>
                                {{ $post->title }}
                            </td>
                            <td>
                                {{ $post->description }}
                            </td>

                            <td>
                                <img src="/uploads/posts/{{ $post->image }}" style="width:250px" alt="{{ $post->title }}"><br>
                                {{ $post->image }}
                            </td>

                            <td>
                                <span>{{ $post->posted }}</span>
                            </td>
                            <td>
                                <span>{{ $post->category->title }}</span>
                            </td>
                        </tr>
                </tbody>
            </table>
            <div>
                <a class="btn btn-secondary" href="{{ route('post.index') }}">Back</a>
            </div>



        </div> <!--END row-->
    </div> <!---END container-fluid-->
</div> <!--  END content-body -->
@endsection
