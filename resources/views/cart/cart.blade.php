@extends('layouts.header-footer')
@section('title','Cart')
@section('contents')
    <div class="box__message">
        @if (Session::has('delete-success'))
            <x-alert-message>
                <x-slot name="status">
                    <ion-icon name="checkmark-outline"></ion-icon>
                </x-slot>
                <x-slot name="message">
                    {{ __(Session::get('delete-success')) }}
                </x-slot>
                <x-slot name="color">
                    {{ __('lightgreen') }}
                </x-slot>
            </x-alert-message>
        @elseif (Session::has('delete-fail'))
            <x-alert-message>
                <x-slot name="status">
                    <ion-icon name="alert-outline"></ion-icon>
                </x-slot>
                <x-slot name="message">
                    {{ __(Session::get('delete-fail')) }}
                </x-slot>
                <x-slot name="color">
                    {{ __('lightsalmon') }}
                </x-slot>
            </x-alert-message>
        @endif
    </div>
    {{-- @can('admin')
        <form id="form__cart--upload" action="{{ url('cart') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="name" id="cart__input--namefile">
            <input type="file" name="image_file" id="galley__input--file">
            <button type="submit">Upload</button>
        </form>
    @endcan --}}
    <div class="cart__background--show">
        <div id="cart__frame--wrap">
            <?php $count = 0;?>
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
