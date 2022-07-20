<dialog id="dialog__user--information">
    <form action="{{ url('user/edit') }}" class="card__user--information" method="POST">
        @csrf
        <ion-icon name="settings-outline" id="btn__userInformation--setting"></ion-icon>
        <button type="submit" id="setting__userInformation--save">
            <ion-icon name="save-outline"></ion-icon>
        </button>
        <ion-icon name="close-outline"></ion-icon>
        <img src="{{ Auth::user()->avatar }}" draggable="false" alt="" class="card__user--avatar" id="user__avatar" />
        <div class="card__content--wrap">
            <div class="card__info--name">{{ Auth::user()->name }}</div>
            <div class="card__info--email">{{ Auth::user()->email }}</div>
            <div class="card__infor--phone">{{ Auth::user()->phone }}</div>
            <div class="card__info--updated">{{ Auth::user()->created_at }}</div>
            <div class="card__country--field">
                <img id="country__image--small" src="" alt="">
                <input type="text" name="country" id="country__name" list="list__countries" value="{{ Auth::user()->country }}" spellcheck="false" disabled>
            </div>
        </div>
        <div class="card__infor--myProject">
            <h3>About {{ Auth::user()->name }}</h3>
            <textarea name="user_description" id="card__user--description" type="text" disabled placeholder="About me ?" spellcheck="false">{{ Auth::user()->description }}</textarea>
        </div>
        <dialog id="dialog__choose--avatar">
            <label for="avatar__choose--url">Please fill your avatar's url</label><br>
            <input type="text" name="avatar_url" id="avatar__choose--url" value="{{ Auth::user()->avatar }}">
            <button type="button" id="choose__avatar--submit">Submit</button>
        </dialog>
        <datalist id="list__countries" aria-placeholder="Quốc gia"></datalist>
    </form>
</dialog>
