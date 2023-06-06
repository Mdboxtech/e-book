@extends('layout.app2')

@section('bdycontent')

    <meta name="csrf-token" content="{{ Session::token() }}">

    @auth
    @if(auth()->user()->type == null)
    <div  style="position: relative; margin-top:100px !important; display:flex; justify-content:center; align-item:center">
    <input type="hidden" name="level" id="level2" value="{{auth()->user()->level}}">
    <input type="hidden" name="faculty" id="faculty2" value="{{auth()->user()->faculty}}">
    <input type="hidden" name="course" id="course2" value="{{auth()->user()->course}}">
</div>

<h3 class="text-center">{{auth()->user()->course}}  books</h3>
<hr>
@else
<div style="position: relative; margin-top:100px !important; display:flex; justify-content:center; align-item:center"
class="searchdiv">


<form action="/searchfile" method="GET" class=" d-sm-inline-block  ms-md-3 navbar-search">
    <label for="" class="" style="font-size: 25px">

        <i class="fa-solid fa-filter-list"></i> <span>Filter Search</span>
    </label>
    <div class="row">
        <select style="width: fit-content; outline:none; border:none; margin:2px" class="form-control bg-success text-white mb-2" name=""
            id="faculty">
        <i class="fa-solid fa-filter-list"></i>

        <option selected disabled>Faculty <i class="fa fas-filter"></i></option>
        <option value="science">Science</option>
        <option value="art_and_education">art_&_education</option>
        <option value="basic_medical_science">basic_medical_science</option>
        <option value="social_management_science">social_management_science</option>
        <option value="law">law</option>
        <option value="agric">agric</option>
        <option value="pharmacy">pharmacy</option>

        </select>
        <select style="width: fit-content;  outline:none; border:none; margin:2px" class="form-control bg-success text-white mb-2" name=""
            id="categories">
            <option selected disabled>course</option>
        </select>
        <select style="width: fit-content;  outline:none; border:none; margin:2px" class="form-control bg-success text-white mb-2  " name=""
            id="level">
            <option selected disabled>level</option>
            <option  value="100l">100 Level</option>
            <option  value="200l">200 Level</option>
            <option  value="300l">300 Level</option>
            <option  value="400l">400 Level</option>
         </select>
            {{----<label style="display: none" id="loader" class="spinner-border text-info"></label> --}}

    </div>
    <div class="input-group">
        <input id="searchme" class="bg-light form-control border-0 searchme " name="searchme" value=""
            type="text" placeholder="Search for ...">
        <button id="btn-search" class="btn btn-success py-0" type="button"><i class="fa fa-search"></i></button>
    </div>
</form>
</div>

@endif

@else

<div style="position: relative; margin-top:100px !important; display:flex; justify-content:center; align-item:center"
class="searchdiv">


<form action="/searchfile" method="GET" class=" d-sm-inline-block  ms-md-3 navbar-search">
    <label for="" class="" style="font-size: 25px">

        <i class="fa-solid fa-filter-list"></i> <span>Filter Search</span>
    </label>


    <div class="row">
        <select style="width: fit-content;  outline:none; border:none; margin:2px" class="form-control bg-success text-white mb-2" name=""
            id="faculty">
            <option selected disabled>Faculty <i class="fa fas-filter"></i></option>
            <option value="science">Science</option>
            <option value="art_and_education">art_&_education</option>
            <option value="basic_medical_science">basic_medical_science</option>
            <option value="social_management_science">social_management_science</option>
            <option value="law">law</option>
            <option value="agric">agric</option>
            <option value="pharmacy">pharmacy</option>

        </select>
        <select style="width: fit-content;  outline:none; border:none; margin:2px" class="form-control bg-success text-white mb-2" name=""
            id="categories">
            <option selected disabled>course</option>
        </select>
        <select style="width: fit-content;  outline:none; border:none; margin:2px" class="form-control bg-success text-white mb-2  " name=""
            id="level">
            <option selected disabled>level</option>
            <option  value="100l">100 Level</option>
            <option  value="200l">200 Level</option>
            <option  value="300l">300 Level</option>
            <option  value="400l">400 Level</option>
         </select>
            {{----<label style="display: none" id="loader" class="spinner-border text-info"></label> --}}

    </div>
    <div class="input-group">
        <input id="searchme" class="bg-light form-control border-0 searchme " name="searchme" value=""
            type="text" placeholder="Search for ...">
        <button id="btn-search" class="btn btn-success py-0" type="button"><i class="fa fa-search"></i></button>
    </div>
</form>
</div>


    @endauth



    <div class="container">


    <a class="btn btn-outline-warning" href="/draft"><i class="fa-solid fa-box"></i> saved files</a>
                    



        <div id="allfile" style=" justify-content:center; align-item:center" class="row allfile mdbox">



            {{-- @if ($files->count() > 0)
    <div style="width:200px" class="col-md-2 mt-2">
        <a style="text-decoration: none; color:black" href="view/{{$file->id}}/description">
            <img class="img-fluid" src="{{ asset('storage/'.$file->poster) }}" alt="" srcset="">
            <small>
                <p> <b>{{$file->filename}}</b></p>
            </small>
        </a>
    </div>
@foreach ($files as $file)



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
        @auth

        @if(auth()->user()->type == null)
        <button id="loadmores2" class="btn btn-outline-info mb-1 loadmores2">see more..</button>
        @else
        <button id="loadmore" class="btn btn-outline-info mb-1 loadmore">see more..</button>
        @endif
        @else
        <button id="loadmore" class="btn btn-outline-info mb-1 loadmore">see more..</button>
        @endauth
    </div>

    <script src="{{asset('js/filter.js')}}"></script>
    <script src="{{asset('js/fun.js')}}">  </script>
    <script>
$(document).ready(function () {
    $(".savebtn").submit(function (e) {
        e.preventDefault();

        alert("ok");
    });
});


    </script>
@endsection
