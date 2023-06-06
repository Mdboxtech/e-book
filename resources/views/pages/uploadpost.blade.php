@extends('layout.app2')

@section('bdycontent')
    <meta name="csrf-token" content="{{ Session::token() }}">

    <div style="position: relative; margin-top:100px !important;" class="container">



<div class="mdbox">

    <section style="background:transparent; padding-top:0;  margin-buttom:0;"  >
        <label for="" class="text-center"><h4>Create Post</h4></label>
        <form id="postcreate" action="/post/create" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
            <input type="text" class="form-control" name="title" placeholder="post title">
            <input type="file" class="form-control" name="file" >
            <textarea name="body" class="form-control" id="editor"  cols="30" rows="10" placeholder="text......"></textarea>
            <div class="mb-3"><button class="btn btn-success m-1" type="submit">create post </button></div>
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
