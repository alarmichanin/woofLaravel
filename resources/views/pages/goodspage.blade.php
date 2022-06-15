@extends('layouts.main-layout')

@section('title','Woof Товари')
@section('content')
    {{--    {{dd($products)}}--}}
    {{--    @foreach($products as $prod)--}}
    {{--        {{dd($prod->category)}}--}}
    {{--    @endforeach--}}
    <div class="container search">
        <div class="row">
            <div class="offset-1 col-10 offset-lg-0 col-lg-3 ">
                <form>
                    <input type="text" class="searcher">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row g-0">
            <div class="col-3 categories">
                @foreach($categories as $category)
                    <div class="category {{$category->name}}">{{$category->name}}</div>
                @endforeach
            </div>
            <ul class="category_menu">
                @foreach($categories as $category)
                    <div class="category {{$category->name}}">{{$category->name}}</div>
                @endforeach
                <li><i class="fa-solid fa-xmark close_category"></i></li>
            </ul>
            <div class="col-12 col-lg-9">
                <div class="generalContainer">
                    <div class="col-8 offset-2">
                        <div class="popularGoods">
                            <p class="header">ПОПУЛЯРНІ ТОВАРИ</p>
                            <section class="popularGoodsCards">
                                @foreach($popular as $prod)
                                    <div class="product">
                                        @foreach($prod->photos as $photo)
                                            <div class="photoOfProduct"><img
                                                    src="{{asset("assets/$photo->url/$photo->filename")}}"></div>
                                        @endforeach
                                        <p class="nameOfProduct">{{$prod->name}}</p>
                                    </div>
                                @endforeach
                            </section>
                        </div>
                    </div>
                    <div class="col-10 offset-1">
                        <div class="col-12 col-lg-6 offset-lg-6 sortBlock">
                            <div class="row">
                                <div class="col-8 col-sm-6 col-lg-12">
                                    <div class="sorting">
                                        <select size="1">
                                            <option>Сортувати</option>
                                            <option>Ціна: за зростанням</option>
                                            <option>Ціна: за спаданням</option>
                                            <option>За відгуками клієнтів</option>
                                            <option>Новинки</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="filter">
                                        <i class="fa-solid fa-filter"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="goods">
                            @foreach($products as $prod)
                                <div class="col-6 col-md-3 p-1">
                                    <div class="card" id="{{$prod->id}}">
                                        <div class="content">
                                            <div class="photo">
                                                @foreach($prod->photos as $photo)
                                                    <img src="{{asset("assets/$photo->url/$photo->filename")}}">
                                                @endforeach
                                            </div>
                                            <p class="name">{{$prod->name}}</p>
                                            <p class="shortDesc">{{$prod->shortDescription}}</p>
                                            <div class="row lastLine">
                                                <p class="price col-6">{{$prod->price}}₴</p>
                                                <div class="buy col-6"><i class="fa-solid fa-cart-shopping"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="pagination">
                            <div class="col-6 offset-3">
                                <div class="row">
                                    {{ $products->links('vendor.pagination.custom') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
