@extends('blog.master')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">





                <x-blog.post.index :posts='$posts'> {{----llave = posts y el valor = '$posts'----}}

                    @slot('header')
                        Post List
                    @endslot

                    @slot('extra')
                        Extra
                    @endslot

                    @slot('footer')
                        Footer
                    @endslot

                </x-blog.post.index>




        </div>
    </div>
</div>
@endsection
