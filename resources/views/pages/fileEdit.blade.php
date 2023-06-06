@extends('layout.app2')


@section('bdycontent')



    <meta name="csrf-token" content="{{ Session::token() }}">

    <div  style="position: relative; margin-top:100px !important;" class="container">




        <section style="background:transparent; padding-top:0" class="contact-clean">

            <form id="mdupload" action="/post/{{$file->id}}/update" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @if (session('success'))
                    <p class="text-success">{{ session('success') }}</p>
                @endif
                @if (session('error'))
                    <p class="text-danger">{{ session('error') }}</p>
                @endif
                <h2 class="text-center">Edit File</h2>
                <div class="mb-3">
                    <label for=""><b>File name</b></label>
                    <input class="form-control" type="text" name="filename" placeholder="File Name" value="{{$file->filename}}">

                    @error('filename')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                @if (auth()->user()->type == 'developer' || auth()->user()->type == 'administrator')
                    <div class="mb-3">
                        <label for=""><b>faculty</b></label>
                        <select class="form-control" name="faculty" id="faculty">
                            <option disabled selected>faculty</option>
                            <option  selected value="{{$file->faculty}}">{{$file->faculty}}</option>
                                <option value="science">Science</option>
                                <option value="art_and_education">art_&_education</option>
                                <option value="basic_medical_science">basic_medical_science</option>
                                <option value="social_management_science">social_management_science</option>
                                <option value="law">law</option>
                                <option value="agric">agric</option>
                                <option value="pharmacy">pharmacy</option>
                            </select>
                        </select>
                        @error('faculty')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for=""><b>course</b></label>
                        <select id="categories" class="form-control" name="course" id="course">
                            <option selected disabled>select faculty to continue</option>
                                <option selected value="{{$file->course}}">{{$file->course}}</option>
                        </select>
                        @error('course')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for=""><b>Level</b></label>
                        <select id="categories" class="form-control" name="level" id="level">
                            <option selected disabled>Level</option>
                            <option selected value="{{$file->level}}">{{str_replace('l',' level',$file->level)}}</option>
                            <option value="100l">100 level</option>
                            <option value="200l">200 level</option>
                            <option value="300l">300 level</option>
                            <option value="400l">400 level</option>
                        </select>
                        @error('level')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                @else
                    <div class="mb-3">
                        <label for=""><b>faculty</b></label>
                        <select class="form-control" name="faculty" id="faculty">
                            <option selected value="{{ $file->faculty }}">{{$file->faculty }}</option>
                        </select>
                        @error('faculty')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                <div class="mb-3">
                    <label for=""><b>course</b></label>
                    <select id="categories" class="form-control" name="course" id="course">
                        <option selected value="{{ $file->course }}">{{ $file->course }}</option>
                    </select>
                    @error('course')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for=""><b>level</b></label>
                    <select id="categories" class="form-control" name="level" id="level">
                            <option disabled selected value="{{$file->level}}">{{str_replace('l',' level',$file->level)}}</option>
                            <option value="100l">100 level</option>
                            <option value="200l">200 level</option>
                            <option value="300l">300 level</option>
                            <option value="400l">400 level</option>
                        </select>
                    </select>
                    @error('level')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                @endif
                <div class="mb-3">
                    <label for=""><b>poster (optional)</b></label>
                    <input class="form-control" type="file" name="poster" placeholder="file">
                    @error('poster')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                @if ($file->poster == 'posters/default.png')
                    @else
                    <img width="20px" src="{{asset('storage/'.$file->poster)}}" alt="" srcset="">
                @endif

                {{-- <div class="mb-3"><input class="form-control is-valid" type="email" name="email" placeholder="Email"><small class="form-text text-danger">Please enter a correct email address.</small></div> --}}
                <div class="mb-3">
                    <label for=""><b>Description</b></label>
                    <textarea class="form-control" name="description" placeholder="description....." rows="14">{{$file->description}}</textarea>
                    @error('description')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3"><button class="btn btn-primary" type="submit">Update </button>
                    <a href="/manage" class="btn btn-danger bg-danger float-md-end mt-3">cancel</a>
                </div>

            </form>
        </section>



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
