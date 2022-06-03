<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/less/app.css">
    <script src="https://kit.fontawesome.com/62aeaedac6.js" crossorigin="anonymous"></script>
    <script src="/js/app.js"></script>
    <title>@yield('title')</title>
</head>
<body>    <div class="navbar">
        <div class="row nav">
            <div class="offset-1 col-6 col-sm-8 offset-md-1 col-md-2">
                <a href=""> <img src="{{asset("assets/logo.png")}}" alt="logo" class="logo"></a>
            </div>
            <div class="col-md-5 offset-md-3 col-lg-4 offset-lg-3 row menu">
                <div class="col-3 aDiv"><a href="/" class="underline">Головна</a></div>
                <div class="col-3 aDiv"><a href="/aboutPage">Про нас</a></div>
                <div class="col-3 aDiv"><a href="goodsPage?page=0">Наші товари</a></div>
                <div class="col-3 aDiv"><a href="contactPage">Контакти</a></div>
            </div>
            <div class="col-4 col-sm-3 col-md-1 col-lg-1 offset-lg-1 iconsHeader">
                <div class="row">
                    <div class="col-4 col-md-6 phoneI">
                        <i class="fa-solid fa-mobile"></i>
                    </div>
                    <div class="col-4 col-md-6 cartI">
                        <i class="fa-solid fa-cart-shopping cart"></i>
                    </div>
                    <div class="col-4 barI">
                        <i class="fa-solid fa-bars"></i>
                        <ul class="hamburger_menu">
                            <li><a class="item" href="/">Головна</a></li>
                            <li><a class="item" href="aboutPage">Про нас</a></li>
                            <li><a class="item" href="goodsPage">Наші товари</a></li>
                            <li><a class="item" href="contactPage">Контакти</a></li>
                            <li><i class="fa-solid fa-xmark close_menu"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@yield('content')
<div class="footer">
    <div class="container-md">
        <div class="row">
            <div class="offset-1 col-10 offset-sm-1 col-sm-10 offset-md-0">
                <p class="headerOfFooter">Почнемо ваші покупки!</p>
                <p class="schedule">Кожен день з 10 ранку до 6 вечора</p>
                <p class="detail">Контактні дані:<br>
                    Телефон: +1 234 567 89 01<br>
                    E-mail: dogshop@dog.com<br>
                    Янгеля 1<br>
                    Київ, Україна</p>
            </div>
            <div class="col-12 col-sm-1 offset-sm-1">
                <div class="footerPaw">
                    <div class="row ">
                        <div class="socials">
                            <div class="col-3"><i class="fa-brands fa-instagram child socialNet inst"></i></div>
                            <div class="col-3"><i class="fa-brands fa-facebook child socialNet face"></i></div>
                            <div class="col-3"><i class="fa-brands fa-telegram child socialNet tel"></i></div>
                            <div class="col-3"><i class="fa-brands fa-whatsapp child socialNet whats"></i></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mainPaw">
                            <i class="fa-solid fa-paw paw"></i>
                        </div>
                    </div>
                    <p class="madeBy child">Розроблено<br>Ткаченко Романом</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
