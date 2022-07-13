<dialog id="dialog__register">
    <ion-icon name="close-outline"></ion-icon>
    <form>
        <div class="form__field--title">Register</div>
        <input type="text" class="rgfield__input rgfield__input--name" placeholder="Name" required spellcheck="false">
        <input type="password" class="rgfield__input rgfield__input--password" placeholder="Password" required spellcheck="false">
        <input type="text" class="rgfield__input rgfield__input--email" placeholder="Email" required spellcheck="false">
        <input type="text" class="rgfield__input rgfield__input--phone" placeholder="Phone" required spellcheck="false">
        <textarea name="" id="" cols="30" rows="10" class="rgfield__input rgfield__input--note" placeholder="Address" required spellcheck="false"></textarea>
        <div class="wrap__field--accept">
            <input type="checkbox" name="" id="rgfield__input--accept">
            <p>Admin can use this information.</p>
        </div>
        <button id="btn__submit--register" type="submit" disabled>Submit</button>
    </form>
</dialog>
