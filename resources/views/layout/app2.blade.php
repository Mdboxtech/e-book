<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>E-Book</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script"> --}}
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Contact-Form-Clean.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('webfonts/fa-solid-900.woff') }}">
    <link rel="stylesheet" href="{{ asset('webfonts/fa-regular-400.woff') }}">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

</head>

<style>
    .mesagebox {
        position: fixed;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        top: 20px;
        top: -100px;
        z-index: 100000;
        color: #fff;
    }

    .mesagebox-n {
        position: fixed;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        top: -100px;
        z-index: 100000;
        color: #fff;
    }

    .mesagebox p {
        border-radius: 10px;
        padding: 10px;
    }

    .mesagebox p i:hover {
        background: #333;
    }

    .mesagebox-n p i:hover {
        background: #333;
    }

    .mesagebox-n p {
        border-radius: 10px;

        padding: 10px;
    }
</style>





<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54">
    <a href="#page-top">
        <div id="toTop">
            <i class="fa fa-arrow-up"></i>
        </div>
    </a>


    <div class="mdloader">
        <div id="load" class="spinner-border text-success"></div>
    </div>





    @if (session('success'))
        <div style="" class="mesagebox ">
            <p style="background:rgba(0, 128, 0, 0.322) !important;
            backdrop-filter: blur(20px);" class=" shadow">
                {{ session('success') }}
                <i style="border-radius: 30%" class="fa fa-times p-2 ml-2 bg-black closefa"></i>

            </p>
        </div>
    @endif


    @if (session('error'))
        <div style="" class="mesagebox-n ">

            <p class="bg-danger shadow">
                {{ session('error') }}
                <i style="border-radius: 50%" class="fa fa-times p-2 ml-2 bg-black closefa"></i>
            </p>
        </div>
    @endif

    @include('include.navbar2')

    @yield('bdycontent')







    {{--
<footer style="background: black">
    <div class="container">
        <div class="row">
            <div class="col-md-4"><span class="copyright">Copyright&nbsp;© Brand 2023</span></div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                    <li class="list-inline-item"><a href="#">Terms of Use</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer> --}}


    <script src="{{ asset('assets/js/agency.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/fun.js') }}"></script>

    <script>
        CKEDITOR.replace("editor");

        // initSample();


        $(document).ready(function() {
            $('.mdloader').hide();

            get = $('.mesagebox p').html();
            get2 = $('.mesagebox-n p').html();

            if (get != undefined) {
                $('.mesagebox').animate({
                    top: "20px"
                }, 100);
                $('.mesagebox').animate({
                    top: "20px"
                }, 2000);
                $('.mesagebox').animate({
                    top: "-100px"
                }, 100);
            }
            if (get2 != undefined) {
                $('.mesagebox-n').animate({
                    top: "20px"
                }, 100);
                $('.mesagebox-n').animate({
                    top: "20px"
                }, 2000);
                $('.mesagebox-n').animate({
                    top: "-100px"
                }, 100);
            }

            //   $('.mood-set').click(function(){
            // document.body.classList.toggle('dark-theme');
            //   })



            console.log(localStorage.getItem('bool'));
            if (localStorage.getItem('bool') == 1) {

                $('#page-top').addClass('dark-theme');
                // localStorage.setItem('bool', 1);

            } else {
                $('#page-top').removeClass('dark-theme');
                // localStorage.setItem('bool', 0);

                // bool =0;

            }


            bool = 0;

            $('.mood-set').click(function() {
                console.log(localStorage.getItem('bool'));
                // document.body.classList.toggle('dark-theme');
                if (localStorage.getItem('bool') == 0) {
                    $('#page-top').addClass('dark-theme');
                    localStorage.setItem('bool', 1);
                } else {
                    $('#page-top').removeClass('dark-theme');
                    localStorage.setItem('bool', 0);

                    // bool =0;

                }


            });



            // $(".mood-set").click(function () {
            //     if (localStorage.getItem("bg") == "light") {
            //         document.body.classList.add("dark-theme");
            //         localStorage.setItem("bg", "dark");

            //         // alert('p');
            //     } else if (localStorage.getItem("bg") == "dark") {
            //         document.body.classList.remove("dark-theme");
            //         localStorage.setItem("bg", "light");
            //     }

            //     console.log(document.body.classList);
            // });


            $('.closefa').click(function() {
                $('.mesagebox').hide();
                $('.mesagebox-n').hide();
            });




            // $('.mood-set').click(function(e){
            //     e.preventDefault();

            //     $('body').toggle().addClass('dark-theme');
            // });


            document.onreadystatechange = function() {
                // console.log(document.readyState);
                if (document.readyState !== 'complete') {
                    $('.mdloader').show();
                } else {
                    $('.mdloader').hide();
                }
            }


        });
    </script>
</body>

</html>
