@extends('layouts.header-footer')
@section('contents')
    <div class="box__message">
        @if (Session::has('message'))
            <div class="toast__message" style='background-color:${_color}'>
                <div class="toast__icon"><ion-icon name="checkmark-outline"></ion-icon></div>
                <div class="toast__text">
                    <div class="toast__title">Status</div>
                    <div class="toast__description">{{ Session::get('message') }}</div>
                </div>
            </div>
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
    <div class="cart__frame--wrap">
        @foreach ($products as $product)
            <div class="product__card">
                <img src="{{ $product->source }}" alt="">
                <div class="product__content">
                    <div class="product__title">{{ $product->name }}</div>
                    <div class="product__price">{{ $product->price }}</div>
                </div>
                <div class="product__setting">
                    <button>Detail</button>
                    <button>Purchase</button>
                    <a href="{{ url("cart/{$product->id}") }}">
                        <button>Remove</button>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
