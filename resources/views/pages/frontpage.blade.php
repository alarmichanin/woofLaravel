@extends('layouts.main-layout')

@section('title','Woof Головна')
@section('content')
    <div class="header">
        <div class="row">
            <div class="ellipse col-6">
                <div class="firstInfo">
                    <p class="woof">WOOF</p>
                    <p class="motto">Ваш улюбленець – наше<br>натхнення</p>
                    <div class="col-8">
                        <a href="/goodsPage" class="btnHref">
                            <button class="buyNow">КУПУВАТИ</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="aboutUs _anim-items">
        <div class="row">
            <div class="offset-1 col-10 offset-md-0 col-md-8">
                <div class="photoForBlock">
                    <img src="{{asset("assets/aboutUs.png")}}" alt="aboutUs">
                </div>
            </div>
            <div class="offset-1 col-10 offset-md-0 col-md-8">
                <div class="blocks">
                    <div class="textPart">
                        <p class="headerOfArticle">
                            Про нас --------------
                        </p>
                        <p class="article">

                            Ми є найкращим міжнародним
                            <br>
                            магазином собачої амуніції.
                            <br>
                            Щодня тисячі клієнтів з усього
                            <br>
                            світу замовляють нашу
                            <br>
                            продукцію. Ми співпрацюємо з
                            <br>
                            найкращими брендами і
                            <br>
                            доставляємо все дуже швидко
                        </p>
                    </div>
                    <div class="awards">
                        <div class="row">
                            <div class="col-4">
                                <div class="paw"></div>
                                <p>163 <br>країни</p>
                            </div>
                            <div class="col-4">
                                <div class="paw"></div>
                                <p>16 <br>виробників</p>
                            </div>
                            <div class="col-4">
                                <div class="paw"></div>
                                <p>16000+ <br>клієнтів</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ourGoods _anim-items">
        <div class="row">
            <div class="offset-1 col-10 col-md-8">
                <div class="blocks">
                    <div class="textPart">
                        <p class="headerOfArticle">
                            -------------- Наші товари
                        </p>
                        <p class="article">
                            У нашому магазині можна
                            <br>
                            підібрати спорядження для собак
                            <br>
                            будь-якого розміру та породи. Ми
                            <br>
                            працюємо тільки з перевіреними
                            <br>
                            виробниками. Кожен предмет
                            <br>
                            ретельно перевіряється перед
                            <br>
                            продажем. Перш за все, ми
                            <br>
                            турбуємося про комфорт ваших
                            <br>
                            вихованців.
                        </p>
                    </div>
                    <div class="awards row">
                        <div class="col-6">
                            <div class="dog"></div>
                            <p>Будь-який<br>вік</p>
                        </div>
                        <div class="col-6 mirror">
                            <div class="dog"></div>
                            <p>Будь-які<br>розміри</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offset-1 col-10 offset-md-0 col-md-8">
                <div class="photoForBlock">
                    <img src="{{asset("assets/ourGoods.jpg")}}" alt="ourGoods">
                </div>
            </div>
        </div>
    </div>


    <div class="ourPartners _anim-items">
        <div class="container">
            <p class="headerOfPartner">НАШІ ПАРТНЕРИ</p>
            <div class="row logos">
                <div class="col-3 partner"><img src="{{asset('assets/ourPartners/lifeGroups.png')}}"></div>
                <div class="col-3 partner"><img src="{{asset('assets/ourPartners/fedEx.png')}}"></div>
                <div class="col-3 partner"><img src="{{asset('assets/ourPartners/pedigree.png')}}"></div>
                <div class="col-3 partner"><img src="{{asset('assets/ourPartners/purina.png')}}"></div>
            </div>
        </div>
    </div>
    <div class="offset-1 col-10">
        <div class="weAreSelling container-sm">
            <div class="goods">
                <p class="headerOfGoods">МИ ПРОДАЄМО</p>
                <div class="row line _anim-items">
                    <div class="offset-1 col-10 col-md-5">
                        <div class="photo">
                            <img src="{{asset('assets/ourGoods/dogLeash.jpg')}}">
                        </div>
                        <p class="nameOfGood">Повідці</p>
                    </div>
                    <div class="offset-1 col-10 offset-md-0 col-md-5">
                        <div class="photo">
                            <img src="{{asset('assets/ourGoods/dogMuzzle.jpg')}}">
                        </div>
                        <p class="nameOfGood">Намордники</p>
                    </div>
                </div>
                <div class="row line _anim-items">
                    <div class="offset-1 col-10 col-md-5">
                        <div class="photo">
                            <img src="{{asset('assets/ourGoods/dogCloth.jpg')}}">
                        </div>
                        <p class="nameOfGood">Одяг</p>
                    </div>
                    <div class="offset-1 col-10 offset-md-0 col-md-5">
                        <div class="photo">
                            <img src="{{asset('assets/ourGoods/dogEat.jpg')}}">
                        </div>
                        <p class="nameOfGood">Їжу</p>
                    </div>
                </div>
                <div class="row line _anim-items">
                    <div class="col-10 offset-1 col-md-8 offset-md-2">
                        <div class="photo">
                            <img src="{{asset('assets/ourGoods/dogMed.jpg')}}">
                        </div>
                        <p class="nameOfGood">Медикаменти</p>
                    </div>
                </div>
                <div class="col-6 offset-3">
                    <a href="/goodsPage" class="btnHref">
                        <button class="ourGoodsBtn">КУПИТИ ЗАРАЗ</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
