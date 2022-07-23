@extends('layouts.header-footer')
@section('title', 'Cart')
@section('contents')
    <div class="box__message">
        @if (Session::has('delete-success'))
            <x-alert-message :message="Session::get('delete-success')" color="lightgreen">
                <ion-icon name="checkmark-outline"></ion-icon>
            </x-alert-message>
        @elseif (Session::has('delete-fail'))
            <x-alert-message :message="Session::get('delete-fail')" color="lightpink">
                <ion-icon name="alert-outline"></ion-icon>
            </x-alert-message>
        @endif
    </div>
    <div class="cart__background--show">
        <div id="cart__frame--wrap">
            @php
                $count = 0;
            @endphp
            @foreach ($products as $product)
                <div class="product__card">
                    <span>{{ ++$count }}</span>
                    <img src="{{ $product->source }}" alt="">
                    <div class="product__content">
                        <div class="product__title">{{ $product->name }}</div>
                        <div class="product__price">{{ $product->price }}</div>
                    </div>
                    <div class="product__setting">
                        <a href="{{ url("projects/{$product->reference}") }}">
                            <button>Detail</button>
                        </a>
                        <button>Purchase</button>
                        <a href="{{ url("cart/{$product->id}") }}">
                            <button>Remove</button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <center>
            <button id="product__button--showMore">
                <p>Show more</p>
                <ion-icon name="chevron-down-outline"></ion-icon>
            </button>
        </center>
    </div>
@endsection
