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
            p{
                margin-bottom: 0;
                font-weight: bold;
            }    
        </style>
    </head>
    <body>
        <div class="flex-center position-ref">        
            <div class="container py-5">
                <div class="title m-b-md">                    
                    Buat Account Baru!
                </div>

                <h3>Sign Up Form</h3>
                <form action="/welcome" method="post">
                    @csrf()
                    <div class="form-group">                        
                        <p>First name: </p>
                        <input type="text" name="first_name" class="form-control">
                    </div>
                        
                    <div class="form-group">  
                        <p>Last name:</p>
                        <input type="text" name="last_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <p>Gender:</p>
                        <div class="form-check">
                            <input type="radio" name="gender" id="Male" value="Male" class="form-check-input">
                            <label for="Male" class="form-check-label"> Male </label><br>
                            <input type="radio" name="gender" id="Female" value="Female" class="form-check-input">
                            <label for="Female" class="form-check-label"> Female </label><br>
                            <input type="radio" name="gender" id="Other" value="Other" class="form-check-input">
                            <label for="Other" class="form-check-label"> Other </label><br>
                        </div>
                    </div>

                    <div class="form-group">
                        <p>Nationallity:</p>
                        <select name="nationallity" id="" class="form-control">
                            <option value="Indonesian">Indonesian</option>
                            <option value="American">American</option>
                            <option value="Thurkistan">Thurkistan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <p>Language Spoken:</p>
                        <div class="form-check">
                            <input type="checkbox" name="language" id="Bahasa Indonesia" value="Bahasa Indonesia" class="form-check-input">
                            <label for="Bahasa Indonesia" class="form-check-label"> Bahasa Indonesia </label><br>
                            <input type="checkbox" name="language" id="English" value="English" class="form-check-input">
                            <label for="English" class="form-check-label"> English </label><br>
                            <input type="checkbox" name="language" id="other" value="Other" class="form-check-input">
                            <label for="other" class="form-check-label"> Other </label><br>
                        </div>
                    </div>

                    <div class="form-group">
                        <p>Bio:</p>
                        <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                        <br>
                    </div>
                    <button type="submit" class="btn btn-outline-info form-control">Sign Up</button>

                </form>
            </div>
        </div>
    </body>
</html>
