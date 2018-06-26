
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>newhome</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #9febf4;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 64px;
                font-weight: 600;

            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .button1 {
                color: #fff;
                background-color: #FB785B;
                border-color: #636b6f;
                margin-top: 35px;
                margin-bottom: 30px;
                width: 226px;
                height: 47px;
                font-size: 18px;
            }
            .button {
                color: #fff;
                background-color: #43C5E9;
                border-color: #636b6f;
                margin-bottom: 30px;
                width: 226px;
                height: 47px;
                font-size: 18px;
            }
            .homeafb1{
                height: 125px;
            }
            .homeafb12{
                height: 35px;
            }
            .homeafb{
                height: 90px;
            }
            .homeafb2{
                height: 28px;
                position: absolute;
                right: 0px;
                margin-top: -10px;
                padding-right: 10px;

            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <!-- <a href="{{ route('calendar') }}">Home</a>
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a> -->

                    @endauth
                </div>
            @endif

            <div class="content">
                    <img class="homeafb12" src="{{ URL::to('/icons/logo.png') }}">
                    <br>
                    <br>
                    <img class="homeafb1" src="{{ URL::to('/icons/dagboek.png') }}">
                    <img class="homeafb" src="{{ URL::to('/icons/dokter.png') }}">

                <div class="title m-b-md">
                    Medisch Dagboek
                </div>

                <div class="infotekst">
                    <p style="font-weight: bold;">
                        Welkom bij Medisch Dagboek!<br>
                        Hier kun je al je medische gegevens bijhouden. <br>
                        Dit doe je om de huisarts te helpen. <br>
                        Hierdoor is je consult gelijk een stuk completer <br>
                        en kun je al de gegeven meenemen naar de arts. <br>
                    </p>
                </div>                  

                <div class="links">
                    <form method="get" action="/login">
                      <button class="button1" >Login</button>
                    </form>
                    <form method="get" action="/register" >
                      <button class="button">Of meld je aan</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
