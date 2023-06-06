@extends('layout.app2')

@section('bdycontent')

    <meta name="csrf-token" content="{{ Session::token() }}">




    <div style=" justify-content:center; align-item:center;  margin-top:100px !important;" class="container"+~>
<h3>Draft files</h3>
    <div   style=" justify-content:center; align-item:center;" class="row draftfile  mdbox">
 @if ($files->count() > 0)
                @foreach ($files as $file)
                <div style="width:200px" class="col-md-2 mt-2">
                    <a style="text-decoration: none; color:black" href="view/{{$file->file_id}}/description">
                        <img style="height:200px" class="img-fluid" src="{{ asset('storage/'.$file->poster) }}" alt="" srcset="">
                        <small>
                            <p> <b>{{$file->filename}}</b></p>
                        </small>
                    </a>
                    <form action="draft/remove/{{$file->id}}" method="post">
                       @csrf
                       @method('delete')

                       <button class="btn btn-success btn-sm">remove</button>
                    </form>
                </div>



@endforeach
@else

<div style="width:200px" class="col-md-2 mt-2">
   <h3>no file found </h3>
    </a>
</div>
@endif
</div>
</div>
{{-- <div  style="position: relative; margin-top:100px !important; display:flex; justify-content:center; align-item:center">
             <div style="width:200px" class="col-md-2 mt-2">
                <a style="text-decoration: none; color:black" href="/viewdescripton">
                    <img class="img-fluid" src="{{ asset('images/book.jpg') }}" alt="" srcset="">
                    <small>
                        <p> <b>Lorem, ipsum. (300level)</b> <a href="" class="btn btn-info btn-sm m-2">save</a></p>
                    </small>
                </a>
            </div> --}}

            {{----
            <div style="width:200px" class="col-md-2 mt-2">
                <a style="text-decoration: none; color:black" href="/viewdescripton">
                    <img class="img-fluid" src="{{ asset('images/book.jpg') }}" alt="" srcset="">
                    <small>
                        <p> <b>Lorem, ipsum.</b></p>
                    </small>
                </a>
            </div>
            <div style="width:200px" class="col-md-2 mt-2">
                <a style="text-decoration: none; color:black" href="/viewdescripton">
                    <img class="img-fluid" src="{{ asset('images/book.jpg') }}" alt="" srcset="">
                    <small>
                        <p> <b>Lorem, ipsum.</b></p>
                    </small>
                </a>
            </div> --}}









    <script src="{{asset('js/filter.js')}}">  </script>
@endsection
