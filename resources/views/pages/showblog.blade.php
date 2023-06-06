@extends('layout.app2')

@section('bdycontent')

    <meta name="csrf-token" content="{{ Session::token() }}">

    <div  style="position: relative; margin-top:100px !important; display:flex; justify-content:center; align-item:center">

        <div class="container">

        <a class="text-info" href="/blog">blog </a>
        /
        <a  class="text-secondary" href="#"> view blog</a>

           <div class="mdbox">
               <h3 class="text-center ">{{$post->title}}</h3>
               @if ($post->file != null)
               <div style= "width:100%; display:flex; justify-content:center; align-item:center">
                <img style="  height:400px" class="img-fluid"  src="{{asset('storage/'.$post->file)}}" alt="">
            </div>
                @endif
           <p> {!!$post->body!!}
           </p>

           <div style="display: flex; justify-content:center; align-item:center" class=" mdbox2">
               <div class="" >
                   <label class="text-info" style="font-weight: 500; font-size:18px">posted By:</label> <label style="width: 25px; height:25px"><a href="{{asset('storage/'.$post->theUser->profileimg)}}"><img class="img-fluid rounded-circle"  src="{{asset('storage/'.$post->theUser->profileimg)}}"></a></label> {{$post->theUser->name}}</div>

                   </div>
<small class="float-right">Date: {{$post->created_at}}</small>
        </div>






        </div>
    </div>


@endsection
