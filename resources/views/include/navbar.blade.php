{{-- <nav class="navbar navbar-light navbar-expand-lg navigation-clean bg-success fixed-top texts">
        <div class="container"><a class="navbar-brand" href="#page-top">Company Name</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="/"><i class="fa fa-home"></i> Home</a></li>
                    <li class="nav-item"><a class="nav-link"  href="/file"><i class="fa fa-file"></i> File</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about"><i class="fa fa-info"></i> About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact"><i class="fa fa-send"></i> Contact</a></li>
                    <li class="nav-item"><a class="nav-link"  href="/profile"><i class="fa fa-user"></i> profile</a></li>
                    <li class="nav-item"><a class="nav-link"  href="/fileupload"><i class="fa fa-arrow-down"></i> Upload file</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">account</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="/login">Login</a><a class="dropdown-item" href="/register">sign up</a></div>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fa fa-gears"></i> manage</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="/manage">file manage</a><a class="dropdown-item" href="#">user manage</a><a class="dropdown-item" href="/register">register admin user</a></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav> --}}







<nav class="navbar  navbar-dark navbar-expand-md fixed-top " id="mdcustom">
    <div class="container"><a class="navbar-brand" href="#page-top">Basug E-book</a><button data-bs-toggle="collapse"
            data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i
                class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto text-capitalize">
                @auth
                    <li class="nav-item"><a class="nav-link active" href="#page-top"><i class="fa fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#faculty"><i class="fa-solid fa-school"></i>
                        Faculty</a></li>
                    <li class="nav-item"><a class="nav-link" href="/blog"><i class="fa-solid fa-newspaper"></i> Blog</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/file"><i class="fa-solid fa-file-lines"></i> files</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/e-learning"><i class="fa-solid fa-video"></i> E learning</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/profile"><i class="fa-solid fa-id-badge"></i>
                        profile</a></li>


                    @if (auth()->user()->type == 'developer' || auth()->user()->type == 'administrator')
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false"
                        data-bs-toggle="dropdown" href="#"><i class="fa fa-gears"></i> manage</a>
                    <div style="background: #ddd" class="dropdown-menu ">
                        <a class="dropdown-item" href="/fileupload"><i class="fa-solid fa-upload"></i> Upload file
                        </a>
                        <a class="dropdown-item " href=" /videoUpload"><i class="fa-solid fa-upload"></i>Upoad video</a>
                        <a class="dropdown-item " href=" /postForm"><i class="fa-solid fa-upload"></i>create post</a>
                        <hr>

                        <a class="dropdown-item " href="/manage"><i class="fa fa-table"></i>manage file</a>
                        <a class="dropdown-item " href="/videoManage"><i class="fa fa-table"></i>manage video</a>
                        <a class="dropdown-item " href="/postmanage"><i class="fa fa-table"></i>manage post</a>
                        <a  class="dropdown-item" href="/usermanage"><i class="fa fa-table"></i> manage user</a>
                            <hr>
                            <a class="dropdown-item" href="/register"><i class="fa fa-user"></i> Register Admin </a>
                    </div>
                </li>
                    @else
                        @if (auth()->user()->type != null)
                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false"
                            data-bs-toggle="dropdown" href="#"><i class="fa fa-gears"></i> manage</a>
                        <div style="background: #ddd" class="dropdown-menu ">
                            <a class="dropdown-item" href="/fileupload"><i class="fa-solid fa-upload"></i> Upload
                                file </a>
                                <a class="dropdown-item " href=" /postForm"><i class="fa-solid fa-upload"></i>create post</a>
                                <hr>
                            <a class="dropdown-item " href="/manage"><i class="fa fa-table"></i> file manage</a>
                            <a class="dropdown-item " href="/postmanage"><i class="fa fa-table"></i> post manage</a>
                        </div>
                    </li>
                            {{-- <li class="nav-item"><a class="nav-link" href="/fileupload"><i class="fa fa-arrow-down"></i> Upload
                            file</a></li> --}}
                        @endif



                    @endif

                    <li class="nav-item"><a class="nav-link" href="/logout"> logOut <i
                                class="fa-solid fa-arrow-right-to-bracket"></i></a></li>
                    <li class="mood-set" class="nav-item"><a class="nav-link "><i class="fa-solid fa-moon-over-sun"></i></a>
                    </li>
                @else
                    <li class="nav-item"><a class="nav-link active" href="#page-top"><i class="fa fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#faculty"><i class="fa-solid fa-school"></i>
                        Faculty</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about"><i class="fa fa-info"></i> About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact"><i class="fa-solid fa-envelope-open-text"></i>
                            Contact</a></li>



                            {{-- <li class="nav-item"><a class="nav-link" href="/postForm"><i class="fa-solid fa-file-lines"></i>
                                createpost</a></li> --}}




                    <li class="nav-item"><a class="nav-link" href="/file"><i class="fa-solid fa-file-lines"></i> files</a></li>
                    <li class="nav-item"><a class="nav-link" href="/blog"><i class="fa-solid fa-newspaper"></i> Blog</a>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false"
                            data-bs-toggle="dropdown" href="#"><i class="fa fa-user"></i> account</a>
                        <div style="background: #ddd" class="dropdown-menu "><a class="dropdown-item "
                                href="/login">login</a><a class="dropdown-item" href="/register">sign up</a>
                    <li class="mood-set" class="nav-item"><a class="nav-link "><i
                                class="fa-solid fa-moon-over-sun"></i></a></li>
                    </li>



                    
                    {{-- <li class="nav-item"><a class="nav-link" href="/login"><i class="fa fa-login"></i> login</a></li>
                    <li class="nav-item"><a class="nav-link" href="/register">sign up</a></li> --}}

                @endauth
            </ul>
        </div>
    </div>
</nav>
























{{-- @endauth --}}
