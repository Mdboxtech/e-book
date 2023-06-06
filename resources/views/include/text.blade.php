
<nav style="height: fit-content !important; margin: 2; padding: 1;" class="navbar  navbar-dark navbar-expand-md fixed-top bg-success" id="mainNav">
    <div class="container"><a class="navbar-brand" href="#page-top">Basug E-book</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto text-uppercase">




































                @if (auth()->user()->type == null)
                <li class="nav-item"><a class="nav-link" href="/"><i class="fa fa-home"></i> Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/file"><i class="fa fa-file"></i>files</a></li>
                <li class="nav-item"><a class="nav-link" href="#about"><i class="fa fa-info"></i> About</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact"><i class="fa fa-send"></i> Contact</a></li>
<li class="nav-item"><a class="nav-link" href="/profile">profile</a></li>


@else
<li class="nav-item"><a class="nav-link" href="/"><i class="fa fa-home"></i> Home</a></li>
<li class="nav-item"><a class="nav-link" href="/file"><i class="fa fa-file"></i> files</a></li>
<li class="nav-item"><a class="nav-link" href="/fileupload"><i class="fa fa-arrow-down"></i> Upload file</a></li>
<li class="nav-item"><a class="nav-link" href="/profile"><i class="fa fa-user"></i>profile</a></li>
     @endif

                @if (auth()->user()->type == 'developer' || auth()->user()->type == 'administrator')


                <li class="nav-item dropdown">
                    <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fa fa-gears"></i> manage</a>
                    <div style="background: #ddd" class="dropdown-menu ">
                        <a class="dropdown-item "   href="/manage">file manage</a>
                        <a class="dropdown-item" href="#">user manage</a>
                        <a class="dropdown-item" href="/register">register admin user</a>
                    </div>
                </li>
                @endif
                <li class="nav-item"><a class="nav-link" href="/logout"> <i class="fa fa-outdoor"></i> logout</a></li>

                @else
                <li class="nav-item"><a class="nav-link" href="/"><i class="fa fa-home"></i> Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/file"><i class="fa fa-file"></i> files</a></li>
                <li class="nav-item"><a class="nav-link" href="#about"><i class="fa fa-info"></i> About</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact"><i class="fa fa-send"></i> Contact</a></li>


                <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fa fa-user"></i> account</a>
                    <div style="background: #ddd" class="dropdown-menu "><a class="dropdown-item "   href="/login">login</a><a class="dropdown-item" href="/register">sign up</a>
                </li>
                {{-- <li class="nav-item"><a class="nav-link" href="/login"><i class="fa fa-login"></i> login</a></li>
                <li class="nav-item"><a class="nav-link" href="/register">sign up</a></li> --}}

                @endauth
            </ul>
        </div>
    </div>
</nav>
