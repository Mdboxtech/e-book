@extends('layout.app2')

@section('bdycontent')

    <meta name="csrf-token" content="{{ Session::token() }}">

    <div  style="position: relative; margin-top:100px !important; display:flex; justify-content:center; align-item:center">


    <div class="container">

<h3 class="text-center">Blog Post</h3>
<hr>

@foreach ($posts as $post)



           <div class="mdbox">
            <h3>{{$post->title}}</h3>
            <div class="containt">
                <img style="  height:400px" class="img-fluid"  src="{{asset('storage/'.$post->file)}}" alt="">
                <p> {!!$post->body!!}
                </p>
            </div>
            <a href="/show/{{$post->id}}/blog" class="btn btn-sm btn-success"> show</a>
        </div>

        @endforeach

        <label for="">{{$posts->links()}}</label>


        </div>
    </div>


@endsection
