@extends('layouts.main-layout')

@section('title','Woof Про нас')
@section('content')
    <div class="about">
        <div class="row line">
        </div>
        <div class="mainContent">
            <div class="row dogs">
            </div>
            <div class="whoWeAre col-10 offset-1">
                <div class="row">
                    <p class="header _anim-items">ХТО МИ</p>
                </div>
                <div class="row">
                    <div class="col-6 offset-3">
                        <img src="{{asset("assets/founder.jpeg")}}" alt="founder" class="founder _anim-items">
                    </div>
                </div>
                <div class="row">
                    <p class="photoTitle _anim-items">Засновник компанії Woof </p>
                </div>
                <div class="row">
                    <div class="col-10 offset-1">
                        <p class="generalInfo _anim-items">Засновані в Україні з клієнтами та членами команди зі всього світу</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 offset-2">
                        <p class="info _anim-items">
                            Наша компанія працює на міжнародному ринку більше п'яти років. За цей час ми заслужили довіру
                            тисяч клієнтів. Наш продукт є гарантією якості та довговічності. Ми довіряємо компаніям, з якими
                            працюємо. Вони професіонали своєї справи. На початку зародження нашої компанії у нас була
                            невелика квартира в Києві, звідки ми обробляли всі замовлення та відправляли їх на міжнародну
                            пошту. На даний момент у нас 72 активних офіси по всьому світу, і ми не плануємо зупинятися на
                            досягнутому. Продукцією нашої компанії користуються домашні улюбленці багатьох відомих людей.
                            Навіть королева Великобританії Єлизавета 2 зробила замовлення на повідці для своїх коргі. Ми
                            пишаємося кожним нашим замовленням і з любов’ю ставимося до своєї справи. Сподіваємося, що після
                            замовлення на нашому сайті ви залишитеся задоволені.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="awards col-10 offset-1">
            <div class="awImg row col-10 offset-1">
                <div class="col-4">
                    <img src="{{asset("assets/award.png")}}" alt="award" class="awardIc">
                    <p>Найкращий собачий магазин року</p>
                </div>
                <div class="col-4">
                    <img src="{{asset("assets/award.png")}}" alt="award" class="awardIc">
                    <p>Найвища якість обслуговування</p>
                </div>
                <div class="col-4">
                    <img src="{{asset("assets/award.png")}}" alt="award" class="awardIc">
                    <p>Найбільший асортимент продукції</p>
                </div>
            </div>
        </div>
    </div>
@endsection
