@extends('layouts.app')
        <!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

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
    <body style="background-image: url({{asset('img/sport.jpg')}})">

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))





                {{--<div class="top-right links">--}}

                    {{--@if (Auth::check())--}}
                        {{--<a href="{{ url('/home') }}" style="color: #cccc00">Home</a>--}}
                    {{--@else--}}
                        {{--<a href="{{ url('/login') }}" style="color: #cccc00">Login</a>--}}
                        {{--<a href="{{ url('/register') }}" style="color: #cccc00;">Register</a>--}}
                    {{--@endif--}}
                {{--</div>--}}




            @endif
            <div class="content" style="background-color: rgba(0,0,0,.7); border-radius: 15px; display: table; padding: 50px;">
                <div class="title m-b-md" style="display: table-cell;">
                    <span style="color: aqua;font-weight: bold ">Sports<i></i></span><span style="color: #cccc00; font-weight: bold">KZ</span>
                    <div style="color: white; font-size: 20px">Not registered yet? Click here<span style="font-size: 20px; color:Tomato">
                            <a style="color: white" href="{{'/register'}}"><i class="fas fa-registered"></i></a></span>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
