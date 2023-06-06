



<nav  class="navbar  navbar-dark navbar-expand-md fixed-top " id="mdcustom">
    <div class="container"><a class="navbar-brand" href="#page-top">Basug E-book</a><button data-bs-toggle="collapse"
            data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i
                class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto text-capitalize">

                @auth
                    <li class="nav-item"><a class="nav-link" href="/"><i class="fa fa-home"></i> Home</a></li>

                                <li class="nav-item"><a class="nav-link" href="/blog"><i class="fa-solid fa-newspaper"></i> Blog</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="/file"><i
                                    class="fa-solid fa-file-lines"></i> files</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/e-learning"><i class="fa-solid fa-video"></i> E learning</a>
                                    </li>
                    <li class="nav-item"><a class="nav-link" href="/profile"><i class="fa-solid fa-id-badge"></i>
                            profile</a></li>


                    @if (auth()->user()->type == 'developer' || auth()->user()->type == 'administrator')
                        {{-- <li class="nav-item"><a class="nav-link" href="/fileupload"><i class="fa fa-arrow-down"></i> Upload
                                file</a></li> --}}

                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false"
                                data-bs-toggle="dropdown" href="#"><i class="fa fa-gears"></i> manage</a>
                            {{-- <div style="background: #ddd" class="dropdown-menu ">
                                <a class="dropdown-item" href="/fileupload"><i class="fa-solid fa-upload"></i> Upload file
                                </a>
                                <a class="dropdown-item " href=" /postForm"><i class="fa-solid fa-upload"></i>create post</a>
                                <hr>

                                <a class="dropdown-item " href="/manage"><i class="fa fa-table"></i> file manage</a>
                                <a class="dropdown-item " href="/postmanage"><i class="fa fa-table"></i> post manage</a>
                                <a  class="dropdown-item" href="/usermanage"><i class="fa fa-table"></i> user manage </a>
                                    <hr>
                                    <a class="dropdown-item" href="/register"><i class="fa fa-user"></i> Register Admin </a>
                            </div> --}}

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
                        @endif
                    @endif

                    <li class="nav-item"><a class="nav-link" href="/logout"> Logout <i
                                class="fa-solid fa-arrow-right-to-bracket"></i></a></li>
                    <li class="mood-set" class="nav-item"><a class="nav-link"><i class="fa-solid fa-moon-over-sun"></i></a>
                    </li>




                @else
                    <li class="nav-item"><a class="nav-link" href="/"><i class="fa fa-home"></i> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/file"><i
                                class="fa-solid fa-file-lines"></i> files</a></li>
                                <li class="nav-item"><a class="nav-link" href="/blog"><i class="fa-solid fa-newspaper"></i> Blog</a>
                                </li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false"
                            data-bs-toggle="dropdown" href="#"><i class="fa fa-user"></i> account</a>
                        <div style="background: #ddd" class="dropdown-menu "><a class="dropdown-item "
                                href="/login">login</a><a class="dropdown-item" href="/register">sign up</a>
                    </li>
                    <li class="mood-set" class="nav-item"><a class="nav-link "><i class="fa-solid fa-moon-over-sun"></i></a>
                    </li>

                    {{-- <li class="nav-item"><a class="nav-link" href="/login">login</a></li>
                <li class="nav-item"><a class="nav-link" href="/register">sign up</a></li> --}}

                @endauth
            </ul>
        </div>
    </div>
</nav>
