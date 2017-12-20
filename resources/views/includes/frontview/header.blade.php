<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'abcCompany') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
    
    <script type="text/javascript" src="js/slick.js"></script>
    <style type="text/css">

        .content-container{
            margin-top :70px;
        }
        body{
            background-color: black;
            color: white;
        }
        
    </style>
    </head>
<body>
    
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'ABC') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li class="{{Request::is('/') ? 'active' : '' }}"><a href="{{ route('default') }}">Home</a></li>
                        <li class="{{Request::is('about') ? 'active' : '' }}"><a href="{{ route('about') }}" class="">About Us</a></li>
                        <li class="{{Request::is('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}" class="">Contact</a></li>
                        <li class="{{Request::is('portfolio') ? 'active' : '' }}"><a href="{{ route('portfolio') }}" class="">Portfolio</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        
                            <li class="{{Request::is('login') ? 'active' : '' }}"><a href="{{ route('login') }}" class="">Login</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav> 
               