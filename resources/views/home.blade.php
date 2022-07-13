@extends('layouts.header-footer')
@section('contents')
    <div class="header__demo--project">
        <div class="demo__text--left">
            <div class="wrap__text">
                <div class="wrap__text--tittle">
                    <span>PROJECT</span><br>
                    <span>Lorum</span>
                </div>
                <div class="wrap__button--show">
                    <button class="button__previous">←</button>
                    <button class="button__next">→</button>
                </div>
                <div class="wrap__number--location"><span>01</span>/<span>02</span></div>
            </div>
        </div>
        <div class="demo__image--right">
            <img src="https://images.unsplash.com/photo-1479839672679-a46483c0e7c8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=710&q=80"
                alt="">
            <button class="button__show--redirect">VIEW PROJECT →</button>
        </div>
    </div>
    {{-- ! end demo projects --}}
    <div class="about-us">
        <div class="containt1">
            <div class="cover">
                <p>Welcome to our website</p>
            </div>
            <img src="https://images.unsplash.com/photo-1496851473196-e26508c21494?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80"
                alt="">
        </div>
        <div class="containt2">
            <h1>About us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad aut ab iste. Vel consequatur cum sint natus, non
                quia vitae ratione hic maxime ut obcaecati quaerat accusantium cupiditate blanditiis eligendi?</p>
            <button id="read-more">READ MORE</button>
        </div>
    </div>
    <div class="mission">
        <h2>Our project</h2>
        {{-- <div class="left"></div> --}}
        <div class="product">
            <div class="img">
                <img src="https://images.unsplash.com/photo-1470075801209-17f9ec0cada6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8YnVpbGRpbmd8ZW58MHx8MHx8&auto=format&fit=crop&w=400&q=60"
                    alt="">
            </div>
            <div class="img">
                <img src="https://images.unsplash.com/photo-1428366890462-dd4baecf492b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGJ1aWxkaW5nfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=400&q=60"
                    alt="">
            </div>
            <div class="img">
                <img src="https://images.unsplash.com/photo-1490644658840-3f2e3f8c5625?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8YnVpbGRpbmd8ZW58MHwxfDB8fA%3D%3D&auto=format&fit=crop&w=400&q=60"
                    alt="">
            </div>
            <div class="img">
                <img src="https://images.unsplash.com/photo-1512403754473-27835f7b9984?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fGJ1aWxkaW5nfGVufDB8MXwwfHw%3D&auto=format&fit=crop&w=400&q=60"
                    alt="">
            </div>
            <div class="img">
                <img src="https://images.unsplash.com/photo-1518005020951-eccb494ad742?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=755&q=80"
                    alt="">
            </div>
            <div class="img">
                <img src="https://images.unsplash.com/photo-1528469138590-fa12d3193392?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=685&q=80"
                    alt="">
            </div>
            <div class="img">
                <img src="https://images.unsplash.com/photo-1522069365959-25716fb5001a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=688&q=80"
                    alt="">
            </div>
        </div>
        <div class="right"></div>
        <button id="read-more">READ MORE</button>
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.7879879197285!2d106.69774151477186!3d10.827530492286856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528f4a62fce9b%3A0xc99902aa1e26ef02!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBWxINuIExhbmcgLSBDxqEgc-G7nyAz!5e0!3m2!1svi!2s!4v1656385613851!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
