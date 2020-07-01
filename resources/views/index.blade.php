<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Laravel</title>
        
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            *{
                box-sizing: border-box;
            }
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">        
            <div class="content container p-0">
                <div class="title m-b-md">                    
                    SanberBook
                </div>

                <h2>Social Media Developer Santai Berkualitas</h2>
                <p>Belajar dan Berbagi agar hidup ini semakin santai berkualitas</p>
                <div class="col-12 p-0 m-0 form-inline">
                    <div class="col-5 mx-auto p-5 shadow card">
                        <h3 class="card-title">Benefit Join di SanberBook</h3>
                        <ul class="text-left">
                            <li>Mendapatkan motivasi dari sesama developer</li>
                            <li>Sharing knowledge dari para mastah Sanber</li>
                            <li>Dibuat oleh calon web developer terbaik</li>
                        </ul>
                    </div>
                    <div class="col-5 mx-auto p-5 shadow card">
                        <h3 class="card-title">Cara Bergabung ke SanberBook</h3>
                        <ol class="text-left">
                            <li>Mengunjungi Website ini</li>
                            <li>Mendaftar di <a href="/register" class="text-success font-weight-bold">Form Sign Up</a></li>
                            <li>Selesai!</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
