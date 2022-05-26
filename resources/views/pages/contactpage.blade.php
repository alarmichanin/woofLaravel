@extends('layouts.main-layout')

@section('title','Woof Контакти')
@section('content')
    <div class="contactUs">
        <div class="row paws">
            <div class="col-2">
                <i class="fa-solid fa-paw paw child left"></i>
            </div>
            <div class="col-2 offset-8">
                <i class="fa-solid fa-paw paw child right"></i>
            </div>
        </div>
        <div class="row">
            <div class="col-10 offset-1 col-md-6 offset-md-3">
                <p class="contact">ЗВ’ЯЖІТЬСЯ З НАМИ</p>
            </div>
        </div>
        <div class="row mapForm">
            <div class="col-10 offset-1 col-md-3 offset-md-1">
                <form class="contactUsForm" id="contactUs">
                    <label for="name">Ім’я</label>
                    <input id="name" type="text" name="name">
                    <label for="email">Пошта</label>
                    <input id="email" type="email" name="mail">
                    <label for="subject">Тема</label>
                    <input id="subject" type="text" name="subject">
                    <label for="message">Повідомлення</label>
                    <textarea id="message" type="text" name="message"></textarea>
                </form>
                <button type="submit" form="contactUs">Надіслати</button>
            </div>
            <div class="col-10 offset-1 col-md-6 offset-md-1">
                <p class="ourOffice">Наш головний офіс</p>
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d6433.197341139532!2d30.449753802953527!3d50.449052221060185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z0Y_QvdCz0LXQu9GPIDU!5e0!3m2!1suk!2sua!4v1647543147085!5m2!1suk!2sua"
                        allowfullscreen="" loading="lazy">
                    </iframe>
                </div>

            </div>
        </div>
    </div>
@endsection
