<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- importing google fonts icons library !-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- STYLE -->
    <link href="{{url('/css/style.css')}}" rel="stylesheet">
    <!-- Materialize -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/materialize.min.css') }}"/>

</head>
<body>
<header>
    <div id="header_container" class="container">
        <div class="row">
            <div class="col m12">
                <div class="header_top">
                    <div class="logo col s3">
                        <a href="{{url('/')}}"><img src="{{url('imgs/logo.png')}}" alt="Logo "></a>
                        <p>At preSent News</p>
                    </div>
                    <div class="header_menu">
                        <ul>
                            <li><a href="{{url('/')}}">Home Page</a></li>
                            <li><a href="{{url('')}}">Most Popular</a></li>
                            <li><a href="#">World</a></li>
                            <li><a href="#">Politics</a></li>
                            <li><a href="#">Weather</a></li>
                            <li><a href="#">Sport</a></li>
                            <li><a href="#">Entertaiment</a></li>
                            <li><a href="#">About/Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="right_box col s2">
                        <div class="search_header">
                            <a class="waves-effect waves-light btn login_btn search_btn_color_grey header_top_menu_search">Search</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form action="{{url('')}}" method="post">
        <div class="search_popap">
            <div class="container">
                <div class="row">
                    <div class="col m12">
                        <div class="margin_center">
                            <div class="input-field col s8">
                                <input id="search_header" type="text" name="keyword"  class="validate search_input">
                                <label for="password">Search</label>
                            </div>
                            <div class="serach_button_popap col s3">
                                <input type="submit" class="waves-effect waves-light btn login_btn search_btn_color_grey" value="Search">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</header>







