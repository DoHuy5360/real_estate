<dialog id="dialog__user--information">
    <form action="" class="card__user--information">
        <ion-icon name="close-outline"></ion-icon>
        <img
            src="{{ asset('assets/img/cart/1657619989.png') }}"
            alt=""
            class="card__user--avatar"
        />
        <div class="card__content--wrap">
            <div class="card__info--name">{{ Auth::user()->name }}</div>
            <div class="card__info--email">{{ Auth::user()->email }}</div>
            <div class="card__infor--phone">{{ Auth::user()->phone }}</div>
            <div class="card__info--updated">{{ Auth::user()->created_at }}</div>
        </div>
        <div class="card__infor--myProject">
            <h3>On market:</h3>
            <p>fkbsobd</p>
        </div>
    </form>
</dialog>