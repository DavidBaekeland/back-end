<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <style>
            * {
                font-family: 'Segoe UI', sans-serif;
                margin: 0;
            }

            a {
                text-decoration: none;
                color: #ffffff;
                background-color: transparent;
                font-size: 20px;
                padding: 6px 110px;
                border: 4px solid #ffffff;
                border-radius: 30px;
            }

            .card {
                color: #ffffff;
                display: flex;
                padding: 2%;
                box-sizing: border-box;
                height: 88vh;
                margin: 6vh;
                border-radius: 40px;
            }

            #pijl2  {
                border: none;
                padding: 0;
            }
            /* https://developer.mozilla.org/en-US/docs/Web/CSS/box-shadow */
            #red  {
                background-color: #FE3E3E;
                box-shadow: 0px 0px 20px 6px #F9DCDC;
                flex-direction: column;
                justify-content: space-between;
                text-align: center;
            }

            /* https://developer.mozilla.org/en-US/docs/Web/CSS/box-shadow */
            #blue  {
                background-color: #35DED6;
                box-shadow: 0px 0px 20px 6px #DCF8F9;
                flex-direction: row;
                justify-content: space-between;
                text-align: center;
            }

            #icons  {
                display: flex;
                width: 50%;
                justify-content: space-evenly;
                margin: auto 0;
            }

            #about  {
                width: 50%;
                text-align: left;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }

            #about p {
                font-size: 30px;
            }

            .card h1 {
                font-size: 4em;
                margin-top:3vh
            }

            #about a {
                margin: 0 auto;
                text-align: center;
            }

            #red nav {
                display: flex;
                justify-content: space-between;
            }

            #red nav a {
                margin:  auto 0;
            }

            #red nav img {
                width: 5vw;
            }

            #leden {
                box-shadow: 0px 0px 20px 6px #DCF8F9;
                color: #35DED6;
                display: flex;
                flex-direction: column;
            }

            #leden h1  {
                padding-left: 2%;
            }

            #leden .personen {
                display: flex;
                /* justify-content: space-between; */

                height: 100%;
                width: 100%;
                flex-wrap: wrap;
            }

            .personen  {
                padding: 2%;
                padding-bottom: 0;
            }

            #leden .persoon  {
                display: flex;
                flex-direction: column;
                justify-content: space-evenly;
                color: white;
                background-color: #35DED6;
                border-radius: 40px;
                width: 9vw;
                margin-right: 4%;
                height: 29vh;
                box-shadow: 0px 0px 20px 6px #DCF8F9;
                text-align: center;

            }

            .overflow img {
                width: 100%;
                /*padding: auto;*/
                height: 100%;

            }

            /*
            https://www.w3schools.com/cssref/pr_pos_overflow.asp
            WEB I
            */
            .overflow {
                /* border: 1px solid white; */
                border-radius: 510px;
                overflow: hidden;
                width: 40%;
                margin: 0 auto;
            }

            .name  {
                font-size: 26px;
            }

            .funnctie  {
                font-size: 21px;
            }




            svg{
                width: 70px;
                height: 70px;
            }

            /* https://pretagteam.com/question/changing-svg-image-color-with-javascript */
            #pijl svg path{
                stroke: white;
            }

            /* https://pretagteam.com/question/changing-svg-image-color-with-javascript */
            #icons svg path{
                fill: white;
            }


        </style>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                <div class="card" id="red">
                    <nav>
                        <img src="assets/img/logo_studentenraad.png" alt="Logo">

                        @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/dashboard') }}">Log in</a>
                                @else
                                    <a href="{{ route('login') }}">Log in</a>

{{--                                    @if (Route::has('register'))--}}
{{--                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>--}}
{{--                                    @endif--}}
                                @endauth
                        @endif
                    </nav>
                    <div id="title">
                        <h1>Probleem? Creatief idee?</h1>
                        <p>Voor de studentenraard</p>
                    </div>
                    <div id="pijl">

                    </div>
                </div>

                <div class="card" id="blue">
                    <div id="icons">

                    </div>

                    <div id="about">
                        <h1>Probleem? Creatief idee?</h1>
                        <p>
                            Heb je een probleem in je opleiding
                            of wil je graag iets veranderen aan je
                            campus? Of wil je graag een evenement organiseren?
                        </p>
                        <p>
                            De studentenraad kan dit allemaal regelen
                        </p>
                        <p>
                            Maak een account en geef je mening!
                        </p>
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}">Log in</a>
                            @else
                                <a href="{{ route('login') }}">Log in</a>

                                {{--                                    @if (Route::has('register'))--}}
                                {{--                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>--}}
                                {{--                                    @endif--}}
                            @endauth
                        @endif
                    </div>

                </div>

                <div class="card" id="leden">
                    <h1>Leden DSR</h1>
                    <div class="personen">
                        <div class="persoon">
                            <div class="overflow"><img src="assets/img/foto.png" alt="David Baekeland"></div>
                            <div class="info">
                                <p class="name">David Baekeland</p>
                                <p class="funnctie">Voorzitter</p>
                            </div>
                        </div>
                        <div class="persoon">
                            <div class="overflow"><img src="assets/img/foto.png" alt="David Baekeland"></div>
                            <div class="info">
                                <p class="name">David Baekeland</p>
                                <p class="funnctie">Voorzitter</p>
                            </div>
                        </div>
                        <div class="persoon">
                            <div class="overflow"><img src="assets/img/foto.png" alt="David Baekeland"></div>
                            <div class="info">
                                <p class="name">David Baekeland</p>
                                <p class="funnctie">Voorzitter</p>
                            </div>
                        </div>
                        <div class="persoon">
                            <div class="overflow"><img src="assets/img/foto.png" alt="David Baekeland"></div>
                            <div class="info">
                                <p class="name">David Baekeland</p>
                                <p class="funnctie">Voorzitter</p>
                            </div>
                        </div>
                        <div class="persoon">
                            <div class="overflow"><img src="assets/img/foto.png" alt="David Baekeland"></div>
                            <div class="info">
                                <p class="name">David Baekeland</p>
                                <p class="funnctie">Voorzitter</p>
                            </div>
                        </div>
                        <div class="persoon">
                            <div class="overflow"><img src="assets/img/foto.png" alt="David Baekeland"></div>
                            <div class="info">
                                <p class="name">David Baekeland</p>
                                <p class="funnctie">Voorzitter</p>
                            </div>
                        </div>
                        <div class="persoon">
                            <div class="overflow"><img src="assets/img/foto.png" alt="David Baekeland"></div>
                            <div class="info">
                                <p class="name">David Baekeland</p>
                                <p class="funnctie">Voorzitter</p>
                            </div>
                        </div>
                        <div class="persoon">
                            <div class="overflow"><img src="assets/img/foto.png" alt="David Baekeland"></div>
                            <div class="info">
                                <p class="name">David Baekeland</p>
                                <p class="funnctie">Voorzitter</p>
                            </div>
                        </div>
                    </div>
                </div>
    </body>
</html>
