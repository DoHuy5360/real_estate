<x-guest-layout>
    
    <div class="frame__password--forgot">
        <a href="/">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
    
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form action="{{ route('password.email') }}" class="frame__provide--information" method="POST">
            @csrf
            <label id="label__guide--email" for="input__email--provide">Nhập Email và kiểm tra trong hộp thư</label>
            <input name="email" id="input__email--provide" type="text" spellcheck="false" required autofocus>
            <button type="submit">Gởi mail đổi mật khẩu cho tôi</button>
        </form>
    </div>
</x-guest-layout>
