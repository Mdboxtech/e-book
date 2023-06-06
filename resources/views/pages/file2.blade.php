@extends('layout.app2')

@section('bdycontent')

    <meta name="csrf-token" content="{{ Session::token() }}">


    <div  style="position: relative; margin-top:100px !important; display:flex; justify-content:center; align-item:center"
        class="searchdiv">


        <form class=" d-sm-inline-block  ms-md-3 navbar-search">
            <label for=""  style="font-size: 25px">

                <i class="fa-solid fa-filter-list"></i> <span>Filter Search</span>
            </label>
            <div class="row">
               <select style="width: fit-content;  outline:none; border:none; margin:2px" class="form-control bg-success text-white mb-2" name=""
                id="categories">
                <option selected disabled>Filter </option>
            </select>
            <select style="width: fit-content;  outline:none; border:none; margin:2px" class="form-control bg-success text-white mb-2  " name=""
            id="level">
            <option selected disabled>level</option>
            <option  value="100l">100 Level</option>
            <option  value="200l">200 Level</option>
            <option  value="300l">300 Level</option>
            <option  value="400l">400 Level</option>
         </select>
            </div>
            <input type="hidden" name="faculty" id="faculty" value="{{$faculty}}">
            <div class="input-group">
                <input id="searchme" class="bg-light form-control border-0 searchme " name="searchme" value=""
                    type="text" placeholder="Search for ...">
                <button id="btn-search" class="btn btn-success py-0" type="button"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>



    <div class="container">


        <a class="btn btn-outline-warning" href="/draft"><i class="fa-solid fa-box"></i> saved files</a>



        <div style=" justify-content:center; align-item:center" class="row files mdbox">
            <div style="width:50%; text-align:center; text-transform:capitalize" class="col-md-2 mt-2">
                <h3 style="color:green">select dropdown to filter</h3></div>

{{-- @if($files->count()>0)

@foreach ($files as $file )

<div style="width:200px" class="col-md-2 mt-2">
    <a style="text-decoration: none; color:black" href="view/{{$file->id}}/description">
        <img class="img-fluid" src="{{ asset('storage/'.$file->poster) }}" alt="" srcset="">
        <small>
            <p> <b>{{$file->filename}}</b></p>
        </small>
    </a>
</div>


@endforeach
@else

<div style="width:200px" class="col-md-2 mt-2">
   <h3>no file found </h3>
    </a>
</div>
@endif --}}


            {{-- <div style="width:200px" class="col-md-2 mt-2">
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
            </div>
            <div style="width:200px" class="col-md-2 mt-2">
                <a style="text-decoration: none; color:black" href="/viewdescripton">
                    <img class="img-fluid" src="{{ asset('images/book.jpg') }}" alt="" srcset="">
                    <small>
                        <p> <b>Lorem, ipsum.</b></p>
                    </small>
                </a>
            </div> --}}






        </div>
        <button style="display: none" id="loadmore2"  class="btn btn-outline-info mb-1 loadmore2">see more..</button>
    </div>


    <script>

        $(document).ready(function () {

            faculty = $("#faculty").val();
            // course = $('#categories').val();

$.post(
    "/getCategories",
    {
        _token: $("meta[name=csrf-token]").attr("content"),
        faculty: faculty,
    },
    function (data, Status) {
        // console.log(data);
        // $('#categories').html('');
        $("#categories").html(
            "<option selected disabled>select course</option>"
        );
        $.each(data, function (key, item) {
if( item[faculty] != ""){

            $("#categories").append(
                ' <option value = "' +
                    item[faculty] +
                    '" > ' +
                    item[faculty] +
                    "</option>"
            );
}
        });
    }
);

        });
    </script>
    <script src="{{asset('js/filter.js')}}"> </script>
    <script src="{{asset('js/fun.js')}}"> </script>

@endsection

