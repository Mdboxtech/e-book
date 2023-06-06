@extends('layout.app')

@section('bdycontent')
    <header class="masthead"
        style="background-image:linear-gradient(rgba(230, 230, 13, 0.694), rgba(59, 59, 2, 0.879)),url('images/bg2.jpeg');">
        <div class="container">
            <div class="intro-text">
                @auth
                    <div class="intro-lead-in"><span style="font-size:30px">Welcome back {{ auth()->user()->type }}
                            <hr id="mdline">
                        </span>

                        <div style="font-size:40px" class="intro-heading text-uppercase"><span> {{ auth()->user()->name }}</span>
                        </div>
                    @else
                        <div class="intro-lead-in"><span>Welcome to Basug E-book Website</span>

                            <div class="intro-heading text-uppercase"><span>It's Nice To Meet You</span></div>

                        @endauth
                        @auth
                            @if (auth()->user()->type != null)
                                <a style="border-radius: 30%" class="btn btn-success btn-xl text-uppercase" role="button"
                                    href="/fileupload"><i class="fa-solid fa-upload"></i> UPLOAD file</a>
                        </div>
                        @endif
                    @endauth
                    <a href="https://basug.edu.ng"><button class="btn btn-success">school website</button></a>
                    <a href="https://basug.safsrms.com"><button class="btn btn-success">school portal</button></a>
                    <br>
                    <br>
                </div>
            </div>


    </header>

    <section id="faculty">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Faculties</h2>
                    <hr style="border-color: brown;" id="mdline">

                </div>

            </div>

            <div style="text-transform: uppercase" class="row text-center">

                <div style="margin-top: 20px" class="col-md-4">
                    <a id="facultys" style="text-decoration: none; color:#333" href="/school?faculty=science">
                        <span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i
                                class="fa-solid fa-atom fa-stack-1x fa-inverse"></i></span>
                        <h6 class="section-heading">science</h6>
                        {{-- <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p> --}}
                    </a>
                </div>
                <div style="margin-top: 20px" class="col-md-4">
                    <a id="facultys" style="text-decoration: none; color:#333" href="/school?faculty=art_and_education">
                        <span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i
                                class="fa fa-book fa-stack-1x fa-inverse"></i></span>
                        <h6 class="section-heading">art & Education</h6>
                        {{-- <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p> --}}
                    </a>
                </div>
                <div class="col-md-4">
                    <a id="facultys" style="text-decoration: none; color:#333" href="/school?faculty=basic_medical_science">
                        <span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i
                                class="fa-solid fa-house-medical fa-stack-1x fa-inverse"></i></span>
                        <h6 class="section-heading">basic medical science</h6>
                        {{-- <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p> --}}
                    </a>
                </div>
                <div style="margin-top: 20px" id="facultys" class="col-md-4">
                    <a style="text-decoration: none; color:#333" href="/school?faculty=social_management_science">
                        <span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i
                                class="fa-solid fa-bank fa-stack-1x fa-inverse"></i></span>
                        {{-- <i class="fa-solid fa-house-medical"></i> --}}
                        <h6 class="section-heading">social management science</h6>
                    </a>

                </div>
                <div style="margin-top: 20px" id="facultys" class="col-md-4">
                    <a style="text-decoration: none; color:#333" href="/school?faculty=law">
                        <span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i
                                class="fas fa-gavel fa-stack-1x fa-inverse"></i></span>
                        {{-- <i class="fa-solid fa-house-medical"></i> --}}
                        <h6 class="section-heading">Law</h6>
                    </a>

                </div>
                <div style="margin-top: 20px" id="facultys" class="col-md-4">
                    <a style="text-decoration: none; color:#333" href="/school?faculty=agric">
                        <span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i
                                class="fa-solid fa-farm fa-stack-1x fa-inverse"></i></span>
                        {{-- <i class="fa-solid fa-house-medical"></i> --}}
                        <h6 class="section-heading">agric</h6>
                    </a>

                </div>
                <div style="margin-top: 20px" id="facultys" class="col-md-4">
                    <a style="text-decoration: none; color:#333" href="/school?faculty=pharmacy">
                        <span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i
                                class="fa-solid fa-house-medical fa-stack-1x fa-inverse"></i></span>
                        {{-- <i class="fa-solid fa-house-medical"></i> --}}
                        <h6 class="section-heading">pharmacy</h6>
                    </a>

                </div>
            </div>
        </div>
    </section>
    @auth
        @if (auth()->user()->type != null)
        @else
            {{-- <section id="about" class="bg-light"> --}}
            <section id="about">
                <div class="container">
                    <h3 style="text-align: center; padding:5px">about us</h3>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="team-member"><img class="rounded-circle mx-auto"
                                    src="{{ asset('images/update logoc.png') }}">

                                <h4>mdboxtech</h4>
                                <p class="text-muted">fullstack developer</p>
                                <ul class="list-inline social-buttons">
                                    <li class="list-inline-item"><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="team-member"><img class="rounded-circle mx-auto"
                                    src="{{ asset('images/update logoc.png') }}">
                                <h4>mdboxtech</h4>
                                <p class="text-muted">web designer</p>
                                <ul class="list-inline social-buttons">
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="team-member"><img class="rounded-circle mx-auto"
                                    src="{{ asset('images/update logoc.png') }}">

                                <h4>mdboxtech</h4>
                                <p class="text-muted">graphic designer</p>
                                <ul class="list-inline social-buttons">
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p style="text-align: center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit saepe vel
                        nisi
                        incidunt, nam eum eaque, commodi necessitatibus similique ratione maxime? Reprehenderit nesciunt
                        repudiandae
                        commodi facilis, quos asperiores totam mollitia.</p>
                </div>
            </section>



            <section id="contact" style="background-image:url('assets/img/map-image.png');">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 class="text-uppercase section-heading">Contact Us</h2>
                            <h3 class="text-muted section-subheading">Lorem ipsum dolor sit amet consectetur.</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="contactForm" name="contactForm" novalidate="novalidate" action=""
                                method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3"><input class="form-control" type="text"
                                                id="name" placeholder="Your Name *" required=""><small
                                                class="form-text text-danger flex-grow-1 help-block lead"></small></div>
                                        <div class="form-group mb-3"><input class="form-control" type="email"
                                                id="email" placeholder="Your Email *" required=""><small
                                                class="form-text text-danger help-block lead"></small></div>
                                        <div class="form-group mb-3"><input class="form-control" type="tel"
                                                id="number" placeholder="Your Phone *" required=""><small
                                                class="form-text text-danger help-block lead"></small></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <textarea class="form-control" id="message" placeholder="Your Message *" required=""></textarea><small
                                                class="form-text text-danger help-block lead"></small>
                                        </div>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col-lg-12 text-center">
                                        <div id="success"></div><button class="btn btn-primary btn-xl text-uppercase"
                                            id="sendMessageButton" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @else
        {{-- <section id="about" class="bg-light"> --}}
        <section id="about">
            <div class="container">
                <h3 style="text-align: center; padding:5px">about us</h3>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="team-member"><img class="rounded-circle mx-auto"
                                src="{{ asset('images/update logoc.png') }}">

                            <h4>mdboxtech</h4>
                            <p class="text-muted">fullstack developer</p>
                            <ul class="list-inline social-buttons">
                                <li class="list-inline-item"><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="team-member"><img class="rounded-circle mx-auto"
                                src="{{ asset('images/update logoc.png') }}">
                            <h4>mdboxtech</h4>
                            <p class="text-muted">web designer</p>
                            <ul class="list-inline social-buttons">
                                <li class="list-inline-item"><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="team-member"><img class="rounded-circle mx-auto"
                                src="{{ asset('images/update logoc.png') }}">

                            <h4>mdboxtech</h4>
                            <p class="text-muted">graphic designer</p>
                            <ul class="list-inline social-buttons">
                                <li class="list-inline-item"><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p style="text-align: center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit saepe vel nisi
                    incidunt, nam eum eaque, commodi necessitatibus similique ratione maxime? Reprehenderit nesciunt repudiandae
                    commodi facilis, quos asperiores totam mollitia.</p>
            </div>
        </section>


        <section id="contact" style="background-image:url('assets/img/map-image.png');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="text-uppercase section-heading">Contact Us</h2>
                        <h3 class="text-muted section-subheading">Let`s get in torch</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form id="contactForm" name="contactForm" novalidate="novalidate" action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3"><input class="form-control" type="text" id="name"
                                            placeholder="Your Name *" required=""><small
                                            class="form-text text-danger flex-grow-1 help-block lead"></small></div>
                                    <div class="form-group mb-3"><input class="form-control" type="email" id="email"
                                            placeholder="Your Email *" required=""><small
                                            class="form-text text-danger help-block lead"></small></div>
                                    <div class="form-group mb-3"><input class="form-control" type="tel" id="number"
                                            placeholder="Your Phone *" required=""><small
                                            class="form-text text-danger help-block lead"></small></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <textarea class="form-control" id="message" placeholder="Your Message *" required=""></textarea><small
                                            class="form-text text-danger help-block lead"></small>
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div><button class="btn btn-primary btn-xl text-uppercase"
                                        id="sendMessageButton" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    @endauth
@endsection
