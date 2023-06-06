@extends('layout.acct')
<meta name="csrf-token" content="{{ Session::token() }}">

@section('content')
    <section class="login-dark">


        <form style="top:500px" action="/admincreate" method="post">
            @csrf
            <h2 class="">
                @auth
                @if (auth()->user()->type == 'developer' || auth()->user()->type == 'adminstrator')
                create admin user
                @else
                Sign up
                @endif
                @endauth
</h2>
            @if (session('error'))
                <p class="text-dandger">{{ session('error') }}</p>
            @endif
            @if (session('success'))
                <p class="text-success">{{ session('success') }}</p>
            @endif
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="mb-3"><input class="form-control" type="text" name="name" placeholder="Full Name">
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            @auth
            @if (auth()->user()->type == 'developer' || auth()->user()->type == 'adminstrator')
             <input type="hidden" name="type" value="admin">
             @endif
            @endauth

            <div class="mb-3"><input class="form-control" type="text" name="username" placeholder="Username">

                @error('username')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3"><input class="form-control" type="number" name="number" placeholder="number">

                @error('number')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email">
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3"><select class="form-control faculty" style="color: #aaa" name="faculty" id="faculty">
                    <option value="" selected disabled>faculty</option>
                    <option value="science">Science</option>
                    <option value="art">art</option>
                    <option value="education">education</option>
                    <option value="medicine">medicine</option>
                </select>
                @error('faculty')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3"><select style="color: #aaa" class="form-control" name="course" id="course">
                    <option value="" selected disabled>course</option>

                </select>
                @error('course')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            {{-- <div class="mb-3"><select style="color: #aaa" class="form-control" name="level" id="level">
                    <option value="" selected disabled>level</option>
                    <option value="100l">100 level</option>
                    <option value="200l">200 level</option>
                    <option value="300l">300 level</option>
                    <option value="400l">400 level</option>
                </select>
                @error('level')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div> --}}
            <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password">

                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3"><input class="form-control" type="password" name="password_confirmation"
                    placeholder="Confirm Password"></div>
            <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Create</button></div><a
                class="forgot" href="#">Forgot your email or password?</a>
            <a class="forgot" href="/login">i have an account</a>
        </form>
    </section>



    <script>
        $("#faculty").change(function() {
            faculty = $("#faculty").val();
            console.log(faculty);

            $.post(
                "/getCategories", {
                    _token: $("meta[name=csrf-token]").attr("content"),
                    faculty: faculty,
                },
                function(data, Status) {
                    // console.log(data);
                    // $('#categories').html('');
                    $("#course").html(
                        "<option selected disabled>select course</option>"
                    );
                    $.each(data, function(key, item) {
                        $("#course").append(
                            ' <option value = "' +
                            item[faculty] +
                            '" > ' +
                            item[faculty] +
                            "</option>"
                        );
                    });
                }
            );
        });
    </script>
@endsection
