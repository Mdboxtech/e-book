<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>E-books</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script"> --}}
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">
    {{-- <link rel="stylesheet" href="{{asset('assets/fonts/fa-solid-900.woff2')}}"> --}}
    <link rel="stylesheet" href="{{ asset('webfonts/fa-solid-900.woff') }}">
    <link rel="stylesheet" href="{{ asset('webfonts/fa-brands-400.woff') }}">
    <link rel="stylesheet" href="{{ asset('webfonts/fa-regular-400.woff') }}">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
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
    .speakCon{
        position: fixed; top:80%; left:70px; border-radius:20px; z-index:10000000; color:#7c7a04;
        display: none;
    }
    .speakCon input{
   width: 350px;
   height: 60px;
   background: rgba(221, 221, 221, 0.829);
   backdrop-filter: blur(20px);
   padding: 15px;
   outline: 0;
   border: 0;
   border-radius: 20px;
   margin-top:5px ;
   transition: .2s
    }
    .microphone{
        position: fixed; top:80%; left:20px; color:#000000; font-size:30px;transition: .2s
    }
    .microphone:hover{
        color: #fff;
    }
</style>



<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" class="" data-bs-offset="54">
    <div class="mdcontaine '">


        <a href="#page-top">
            <div id="toTop">
                <i class="fa fa-arrow-up"></i>
            </div>
        </a>


        <div class="microphone" style="">
           <i class="fa fa-robot mic"></i> 
        </div>
        <div class="speakCon">

                    <input id="text-input" type="text" name=""  placeholder="speak......">
           
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


        {{-- <div class="mdloader">
            <div id="load" class="spinner-border text-success"></div>
        </div> --}}

        @include('include.navbar')

        @yield('bdycontent')



        <footer style="background: black">
            <div class="container">
                <div class="row">
                    <div class="col-md-4"><span class="copyright">Copyright&nbsp;© mdbox 2023</span></div>
                    <div class="col-md-4">
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item"><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            </li>
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
        </footer>


        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/agency.js"></script>
        <script src="{{ asset('js/fun.js') }}"></script>

        <script>
            $(document).ready(function() {

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


                // localStorage.getItem("bool");

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


$('.microphone').click(function(){
    // mydd = $('#mydd');
       $('.speakCon').toggle();
// Check if the browser supports the Web Speech API
if ('SpeechRecognition' in window || 'webkitSpeechRecognition' in window) {
  // Create a new SpeechRecognition object
  const recognition = new (window.SpeechRecognition || window.webkitSpeechRecognition)();

  // Set the language for speech recognition (e.g., 'en-US')
  recognition.lang = 'YOUR_LANGUAGE_CODE';

  // Set the continuous property to true for continuous speech recognition
  recognition.continuous = true;

  // Set the interimResults property to true to get interim (not final) results
  recognition.interimResults = true;

  // Start the speech recognition process
  recognition.start();

  // Handle the result event when speech is recognized
  recognition.onresult = function (event) {
    const resultIndex = event.resultIndex;
    const transcript = event.results[resultIndex][0].transcript;

    // Populate the text input form with the recognized speech
    document.getElementById('text-input').value = transcript;

    text = $('#text-input').val();
$.get('/textdemo',{

    speakText:text
}
,function(data, status){
    if(data == 'profile'){
        // alert(data);
        location.replace('/profile');
    }
    if(data == 'files'){
        
        location.replace('/file');

    }
    if(data == 'account'){
        
        location.replace('/register');

    }
    if(data == 'account'){
        
        location.replace('/register');

    }
})
  };

  // Handle the error event
  recognition.onerror = function (event) {
    console.error('Speech recognition error: ', event.error);
  };
} else {
  // Web Speech API is not supported
  console.log('Speech recognition is not supported in this browser.');
}



});

// $('#text-input').keyup(function(){
//     text = $('#text-input').val();
// $.get('/textdemo',{

//     speakText:text
// }
// ,function(data, status){
//     if(data == 'profile'){
//         // alert(data);
//         location.replace('/profile');
//     }
//     if(data == 'files'){
        
//         location.replace('/file');

//     }
//     if(data == 'account'){
        
//         location.replace('/register');

//     }
// })

// });




                // Retrieve
                // document.getElementById("result").innerHTML = localStorage.getItem("lastname");

                // $('.mood-set').click(function(e){
                //     e.preventDefault();

                //     $('body').toggle().addClass('dark-theme');
                // });

            });
        </script>

    </div>
</body>

</html>
