<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('/css/ionicons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/materialize.min.css') }}"/>
    <link rel="stylesheet" href="{{url('/css/style.css')}}">
</head>
<body>
<header id="admin_header" class="top-header">
    <div class="row">
        <div class="col s12 admin_header">
            <div class="row">
                    <div class="col s2 header-logo">
                        <div class="header-logo">
                        <a href="" class="top-header-logo">
                            <span class="text-primary">Varello</span>Admin
                        </a>
                    </div>
                </div>
                <div class="col s1 btn_show_sidebar_block">
                    <div class="btn_show_sidebar">
                        <a href="#" data-activates="slide-out" class="button-collapse"><i class="ion-android-arrow-back"></i></a>
                    </div>
                </div>
                <div class="admin_header_menu col s9">
                    <ul>
                        <li>
                            <form class="navbar-left navbar-search-form">
                                <button type="submit" class="navbar-search-btn"><i class="ion-search"></i></button>
                                <input type="text" class="navbar-search-box" placeholder="Find something...">
                            </form>
                        </li>
                        <div class="coment_logout_block col s2">
                            <li><a href="#"><i class="ion-android-notifications"></i></a></li>
                            <li><a href="#"><i class="ion-android-exit"></i>Log out</a></li>
                        </div>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

