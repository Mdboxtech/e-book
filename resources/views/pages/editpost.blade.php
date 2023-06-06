@extends('layout.app2')

@section('bdycontent')
    <meta name="csrf-token" content="{{ Session::token() }}">

    <div style="position: relative; margin-top:100px !important;" class="container">



<div class="mdbox">

    <section style="background:transparent; padding-top:0;  margin-buttom:0;"  >
        <label for="" class="text-center"><h4>edit post</h4></label>

        <form id="postcreate" action="/posts/{{$post->id}}/update" method="post" enctype="multipart/form-data">

            @method('PUT')
            @csrf
            <input type="hidden" name="user_id" value="{{$post->user_id}}">
            <input type="text" class="form-control" name="title" placeholder="post title" value="{{$post->title}}">
            <input type="file" class="form-control" name="file" >
            @if ($post->file != null)

            <a href="{{asset('storage/'.$post->file)}}"><img width="50px" height="50px" src="{{asset('storage/'.$post->file)}}" ></a>
            @endif
            <textarea name="body" class="form-control" id="editor"  cols="30" rows="10" placeholder="text......">{{$post->body}}</textarea>


                    <button class="btn btn-success btn-sm m-1" type="submit">update post</button>

                    <a href="/postmanage" class="btn btn-danger btn-sm m-1">cencel</a>


        </form>
    </section>
</div>


    </div>
    <script src="{{ asset('js/filter.js') }}"></script>


    {{-- <script src="">

    $(document).ready(function(){
$.post("/getCategories", {
    '_token':$('meta[name=csrf-token]').attr('content'),

},
    function (data,Status,) {
console.log(data);
$.each(data,function (key, item) {
    $('#categories').append('<option value="'+item.categories+'">'+item.categories +'</option>');
});
    }
);
});

    </script> --}}
@endsection
