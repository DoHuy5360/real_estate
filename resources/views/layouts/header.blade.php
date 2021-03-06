@php
$user_id = Auth::user()->id;
$amount_of_product = DB::select("select count(*) from carts where orderer = '{$user_id}'")[0]->count;
@endphp
<div class="header__navbar" id="header">
    <div class="navbar__element--logo">
        <x-application-logo style="width: 80px; height: fit-content;"></x-application-logo>
    </div>
    <div class="wrap__elements">
        <a href="/home" class="link__element--wrap {{ request()->is('/home') ? 'link__active' : '' }}">
            <div class="navbar__element--redirect">
                <ion-icon name="home-outline"></ion-icon><span>Home</span>
            </div>
        </a>
        <a href="{{ url('cart') }}" class="link__element--wrap {{ request()->is('cart') ? 'link__active' : '' }}">
            <div class="navbar__element--redirect">
                <div id="cart__project--amount">{{ $amount_of_product }}</div>
                <ion-icon name="cart-outline"></ion-icon><span>Cart</span>
            </div>
        </a>
        <a href="{{ route('projects.projects') }}" class="link__element--wrap {{ request()->is('projects') ? 'link__active' : '' }}">
            <div class="navbar__element--redirect">
                <ion-icon name="pricetags-outline"></ion-icon><span>Projecs</span>
            </div>
        </a>
        <div id="user__form-show" class="navbar__element--redirect link__element--wrap">
            <ion-icon name="person-outline"></ion-icon>
            <span>
                {{ Auth::user()->name }}
            </span>
        </div>
        <div class="navbar__element--redirect link__element--wrap">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <div onclick="event.preventDefault();
                    this.closest('form').submit()" class="navbar__element--redirect link__element--wrap">
                    <ion-icon name="log-out-outline"></ion-icon><span>Log out</span>
                </div>
            </form>
        </div>
    </div>
</div>
