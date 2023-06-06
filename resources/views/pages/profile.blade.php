@extends('layout.app2')

@section('bdycontent')
    <div style="position: relative; margin-top:100px !important;" class="container">
        <div class="card shadow mb-4 p-2 mdbox">
            <h2 class="text-center text-success">Profile</h2>

            <div style="justify-content: center; align-item:center" class="row">


                <div class="col-md-2" style="text-align: center;">
                    <div>
                       <a href="{{ asset('storage/'.auth()->user()->profileimg)}}"> <img src="{{ asset('storage/'.auth()->user()->profileimg)}}" class="rounded-circle mb-3 mt-4" width="200px"  height="200px"></a>


                        <form style="width: 200px; margin:0 auto" action="/user/updateprofile" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            {{-- @method('put') --}}
                            <input type="hidden" name="id" value="{{auth()->user()->id}}">
                            <input required style="padding: 2px;" type="file"
                                class="form-control btn col-md-2 btn-secondary" name="profileimg">
                            <br>
                            <button class="btn btn-sm m-2 btn-outline-secondary">Upload</button>
                        </form>

                    </div>
                </div>

            </div>
            <div style="justify-content: center; align-item:center ; padding:20px" class="row">


                <div class="col-md-4" style="text-align: ; border:1px solid #ddd">
                    <div>
                        {{-- <img src="{{ asset('assets/img/team/1.jpg') }}" class="rounded-circle mb-3 mt-4" width="200px"> --}}
                        <label for="">
                            <h4 class="text-success">Full Name</h4>
                        </label>
                        <p>{{ auth()->user()->name }}</p>
                    </div>
                </div>
                <div class="col-md-4" style="text-align: ; border:1px solid #ddd">
                    <div>
                        {{-- <img src="{{ asset('assets/img/team/1.jpg') }}" class="rounded-circle mb-3 mt-4" width="200px"> --}}
                        <label for="">
                            <h4 class="text-success">Username</h4>
                        </label>
                        <p>{{ auth()->user()->username }}</p>
                    </div>
                </div>
                <div class="col-md-4" style="text-align: ; border:1px solid #ddd">
                    <div>
                        {{-- <img src="{{ asset('assets/img/team/1.jpg') }}" class="rounded-circle mb-3 mt-4" width="200px"> --}}
                        <label for="">
                            <h4 class="text-success">number</h4>
                        </label>
                        <p >{{ auth()->user()->number }}</p>
                    </div>
                </div>
                <div class="col-md-4" style="text-align: ; border:1px solid #ddd">
                    <div>
                        {{-- <img src="{{ asset('assets/img/team/1.jpg') }}" class="rounded-circle mb-3 mt-4" width="200px"> --}}
                        <label for="">
                            <h4 class="text-success">Email</h4>
                        </label>
                        <p>{{ auth()->user()->email }}</p>
                    </div>
                </div>
                <div class="col-md-4" style="text-align: ; border:1px solid #ddd">
                    <div>
                        <label for="">
                            <h4 class="text-success">faculty</h4>
                        </label>
                        <p>{{ auth()->user()->faculty }}</p>
                        {{-- <img src="{{ asset('assets/img/team/1.jpg') }}" class="rounded-circle mb-3 mt-4" width="200px"> --}}
                    </div>
                </div>
                <div class="col-md-4" style="text-align: ; border:1px solid #ddd">
                    <div>
                        <label for="">
                            <h4 class="text-success">course</h4>
                        </label>
                        <p>{{ auth()->user()->course }}</p>
                        {{-- <img src="{{ asset('assets/img/team/1.jpg') }}" class="rounded-circle mb-3 mt-4" width="200px"> --}}
                    </div>
                </div>

            </div>
        </div>

        {{-- <div class="card shadow mb-4 p-2">
        </div> --}}
    </div>
@endsection
