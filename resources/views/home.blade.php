@extends('layouts.header-footer')
@section('title', 'Home')
@section('contents')
    <div class="header__demo--project">
        <div class="demo__text--left">
            <div class="wrap__text">
                <div class="wrap__text--tittle">
                    <span>PROJECT</span><br>
                    <span>Lorum</span>
                </div>
                <div class="wrap__number--location"><span>01</span>/<span>02</span></div>
            </div>
        </div>
        <div class="demo__image--right" data-carousel>
            @foreach ($all_projects as $project)
                <div class="carousel__cell--image" style="--bg-img: url({{ $project->source }})">
                    <x-redirect-btn url="/projects/{{ $project->id }}" title="VIEW PROJECT" add_class="button__show--redirect">
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </x-redirect-btn>
                </div>
            @endforeach
        </div>
    </div>
    {{-- ! end demo projects --}}
    <div class="about-us">
        <div class="containt1">
            <div class="cover">
                <p>Welcome to our website</p>
            </div>
            <img src="https://images.unsplash.com/photo-1496851473196-e26508c21494?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80" alt="">
        </div>
        <div class="containt2">
            <h2>About us</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad aut ab iste. Vel consequatur cum sint natus, non
                quia vitae ratione hic maxime ut obcaecati quaerat accusantium cupiditate blanditiis eligendi?</p>
            <button id="read-more">READ MORE</button>
        </div>
    </div>
    <div class="mission">
        <h2>Our project</h2>
        <div class="product">
            @foreach ($limit_projects as $project)
                <div class="img">
                    <img src="{{ $project->source }}" alt="">
                </div>
            @endforeach
        </div>
        <a href="{{ url('projects') }}">
            <button type="button" id="read-more">READ MORE</button>
        </a>
    </div>
    {{-- ! start contact us --}}
    <div class="map-contact">
        <div id="content-1">
            <span>Contact</span>
            <span>Information</span>

            <strong>Comany Name</strong>
            <p>Address: Hẻm 69/68 Đ. Đặng Thuỳ Trâm, Phường 13, Bình Thạnh, Thành phố Hồ Chí Minh 70000</p>
            <strong>500.999.88</strong>
            <p>123.@gmail.com</p>

            <input type="button" value="contact us">
        </div>
        <div id="content-2">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.7879879197285!2d106.69774151477186!3d10.827530492286856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528f4a62fce9b%3A0xc99902aa1e26ef02!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBWxINuIExhbmcgLSBDxqEgc-G7nyAz!5e0!3m2!1svi!2s!4v1656385613851!5m2!1svi!2s"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    {{-- <div class="the__wrap">
        <div class="wrap__contact">
            <div class="contact__form">
                <div class="form__title">Contact Us</div>
                <div class="form__field">
                    <form action="#" id="form__main--contact">
                        <input class="input__field form__field--name" type="text" placeholder="Name" />
                        <input class="input__field form__field--phone" type="text" placeholder="Phone Number" />
                        <input class="input__field form__field--email" type="text" placeholder="Email" />
                        <input class="input__field form__field--interest" type="text" placeholder="Interested in" />
                        <textarea name="" id="" class="input__field" cols="30" rows="10" placeholder="Message"></textarea>
                    </form>
                    <img class="contact__img"
                        src="https://images.unsplash.com/photo-1516055619834-586f8c75d1de?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                        alt="contact-us" />
                </div>
                <input class="field__submit--btn" form="form__main--contact" type="submit" value="SEND EMAIL -→" />
            </div>
        </div>
    </div> --}}
@endsection
