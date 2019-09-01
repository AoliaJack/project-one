<meta name="csrf-token" content="{{ csrf_token() }}">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pretest Joko - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @section('header')
    <header id="navigation" class="p-navigation">
            <div class="row">
                <div class="p-navigation__banner">
                    <div class="p-navigation__logo">
                    <a class="p-navigation__link" href="#">
                        <img class="p-navigation__image" src="https://assets.ubuntu.com/v1/ac9a0e00-lxd_primary.svg" alt="" width="95">
                    </a>
                    </div>
                    <a href="#navigation" class="p-navigation__toggle--open" title="menu">Menu</a>
                    <a href="#navigation-closed" class="p-navigation__toggle--close" title="close menu">Close menu</a>
                </div>
                <nav class="p-navigation__nav u-align--right">
                    <ul class="p-navigation__links" role="menu">
                    <li class="p-navigation__link" role="menuitem" id="link-1">
                        <a href="#link-1-menu">Logout
                        </a>
                    </li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="p-strip--light is-shallow">
            <div class="row">
                <div class="p-media-object--large">
                <img src="https://api.jujucharms.com/charmstore/v5/mysql-58/icon.svg" class="p-media-object__image">
                <div class="p-media-object__details">
                    <h1 class="p-media-object__title">Mysql</h1>
                    <p class="p-media-object__content">By mysql-charmers</p>
                    <ul class="p-media-object__meta-list">
                    </ul>
                </div>
                </div>
            </div>
        </div>
    @show
    <div>
        @yield('content')
    </div>
</body>
<script src="{{ asset('js/app.js') }}">
</script>
</html>



