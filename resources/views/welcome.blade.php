<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/speech-input.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
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
                font-size: 84px;
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
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="col-md-12">
                    <h3>
                        Переводчик
                    </h3>
                </div>
                <form class="main-form" action="/translate" method="get">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="select-block col-md-12">
                                <span>с</span>
                                <select class="select-list form-control" name="lang_in">
                                    <option value="ru">русский</option>
                                    <option value="ua">украинский</option>
                                    <option value="en">английский</option>
                                    <option value="false">определить язык</option>
                                </select>
                                <span>на</span>
                                <select class="select-list form-control" name="lang_out">
                                    <option value="en">английский</option>
                                    <option value="ru">русский</option>
                                    <option value="ua">украинский</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <textarea class="speech-input form-control" rows="10" cols="45" name="text_in" placeholder="введите текст" resize="none" required></textarea>
                            </div>

                            <div class="col-md-6">
                                <textarea class="form-control" rows="10" cols="45" name="text_out" placeholder="полученный перевод" resize="none" readonly></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="btn-submit-block col-md-12">
                                <button>Перевести</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/speech-input.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
