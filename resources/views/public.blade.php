<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    @php
        $css_names = [
            '/' => ['header', 'footer', 'home', 'projects', 'projects-view', 'cart', 'gallery-input-file', 'component'],
            'features/' => ['register-form', 'toast-message', 'user-information-form'],
        ];
    @endphp
    @foreach ($css_names as $location => $array_names)
        @foreach ($array_names as $name)
            <link rel="stylesheet" href="{{ asset("assets/css/{$location}{$name}.css") }}" type="text/css">
        @endforeach
    @endforeach
    <title>Public page</title>
    <style>
        @import "~bootstrap/dist/css/bootstrap.css";
        .welcome {
            width: 100%;
            height: 100vh;
            position: relative;
        }

        .welcome .welcome-inner {
            width: inherit;
            height: 100vh;
            filter: grayscale(60%);
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .title {
            position: absolute;
            width: 800px;
            top: 25%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #30475e;
            opacity: .8;
            border-radius: 50px;
            overflow: hidden;
        }

        .title img {
            object-fit: contain;
            width: 100%;
        }

        .nav-search {
            display: grid;
            grid-template-columns: 2fr repeat(5, 1.2fr) 0.5fr;
            width: 65%;
            border: 1px solid lightgray;
            border-radius: 50px;
            height: 60px;
            overflow: hidden;
            background-color: #fff;
            position: absolute;
            top: 70%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .feature {
            padding: 0 5px;
            margin: auto 0;
            border-right: 2px solid lightgray;
            display: flex;
            position: relative;
            align-items: center;
        }

        .feature:nth-child(1) {
            height: inherit;
        }

        .feature:nth-child(1) input {
            border: hidden;
            text-overflow: ellipsis;
            margin: auto 0;
            padding-left: 5px;
            width: 100%;
        }

        .feature:first-child input:focus {
            outline: none;
        }

        .feature:first-child input:focus::placeholder {
            color: #fff;
        }

        .feature:last-child {
            border-right: none;
            justify-self: center;
        }

        .feature ion-icon {
            margin: auto 0;
            padding: 0 5px;
        }

        .feature #arrow-down {
            position: absolute;
            right: 0;
        }

        .page-content {
            width: 80%;
            margin: 50px auto;
        }

        .product-list {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 60px 0;
        }

        .product-list div {
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .product-list div ion-icon {
            font-size: 80px;
            background-color: rgba(211, 211, 211, 0.677);
            border-radius: 50% 50% 0 50%;
            cursor: pointer;
            transition: 0.8s ease;
        }

        .product-list div ion-icon:hover {
            color: #fff;
            background-color: gray;
        }

        .product-list div p {
            font-size: 1.4rem;
        }

        .page-content .project-header {
            display: flex;
            justify-content: space-between;
            margin: 30px 0%;
            align-items: center;
        }

        .page-content .project-header h2 {
            font-size: 2rem;
            color: rgb(96, 96, 96);
        }

        .project-content {
            display: flex;
            justify-content: center;
            gap: 20px;
            border-radius: 10px;
            overflow: hidden;
        }

        .project-content .cell {
            width: calc(100% / 4);
            height: 400px;
            object-fit: cover;
            text-overflow: ellipsis;
        }

        .project-content .cell img {
            object-fit: cover;
            width: 100%;
            border-radius: 10px 10px 0 0;
            border-radius: inherit;
            height: 50%;
        }

        .project-content .cell .project-caption {
            height: calc(100% - 50%);
            background-color: #30475e;
            width: 100%;
            white-space: nowrap;
            padding: 5px 5px 10px 5px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .project-content .cell .project-caption p {
            color: #fff;
            overflow: hidden;
            text-overflow: ellipsis;
            margin: 0 !important;
        }

        .project-content .cell .project-caption .about {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            white-space: normal;
        }

        .page-content .company .about {
            display: flex;
            width: inherit;
            gap: 20px;
            justify-content: space-between;
        }

        .page-content .company .about .company-cell {
            width: 100%;
            padding: 20px;
        }

        .page-content .company .about .company-cell img {
            width: 100%;
            aspect-ratio: 1;
            object-fit: cover;
            transition: transform .5s;
        }

        .page-content .company .about .company-cell :hover {
            transform: rotate(2deg);
        }
    </style>
</head>

<body>
    <!-- <div class="welcome"></div> -->
    <div id="carouselExampleIndicators" class="carousel slide welcome" data-ride="carousel" data-interval="2000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="welcome-inner" style="background-image: url('https://i.pinimg.com/originals/7f/e4/f7/7fe4f7f7372cad9204ae6734546237c1.jpg')"></div>
            </div>
            <div class="carousel-item">
                <div class="welcome-inner" style="background-image: url('https://images.lifestyleasia.com/wp-content/uploads/2018/06/04104345/Black-Soul-001.png')"></div>
            </div>
            <div class="carousel-item">
                <div class="welcome-inner"
                    style="background-image: url('https://www.primeclassicdesign.com/images/modern-italian-bedroom-sets/fabric-bed-with-storage-in-grey-white-dresser-e-veronica.jpg')"></div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="title">
        <img src="{{ asset('assets/img/cart/title-removebg-preview.png') }}" alt="" />
    </div>
    <div class="nav-search">
        <div class="feature input-field">
            <input type="text" placeholder="Finding your areas, places you want" />
        </div>
        <div class="feature type">
            <span>All</span>
            <ion-icon id="arrow-down" name="chevron-down"></ion-icon>
        </div>
        <div class="feature price">
            <ion-icon name="logo-usd"></ion-icon>
            <span>price</span>
            <ion-icon id="arrow-down" name="chevron-down"></ion-icon>
        </div>
        <div class="feature size">
            <ion-icon name="expand-outline"></ion-icon>
            <span>size</span>
            <ion-icon id="arrow-down" name="chevron-down"></ion-icon>
        </div>
        <div class="feature direction">
            <ion-icon name="compass"></ion-icon>
            <span>direction</span>
            <ion-icon id="arrow-down" name="chevron-down"></ion-icon>
        </div>
        <div class="feature loacation">
            <ion-icon name="map"></ion-icon>
            <span>location</span>
            <ion-icon id="arrow-down" name="chevron-down"></ion-icon>
        </div>
        <div class="feature search-icon">
            <ion-icon name="search"></ion-icon>
        </div>
    </div>

    <div class="page-content">
        <div class="product-list">
            <div>
                <ion-icon id="house-sale" name="home"></ion-icon>
                <p>Mua nhà</p>
            </div>
            <div>
                <ion-icon id="house-rent" name="home-outline"></ion-icon>
                <p>Thuê nhà</p>
            </div>
            <div>
                <ion-icon id="land-sale" name="receipt"></ion-icon>
                <p>Mua đất</p>
            </div>
            <div>
                <ion-icon id="apart-sale" name="business"></ion-icon>
                <p>Mua căn hộ</p>
            </div>
            <div>
                <ion-icon id="apart-rent" name="home-outline"></ion-icon>
                <p>Thuê căn hộ</p>
            </div>
        </div>
        <div class="for-sale">
            <div class="project-header">
                <h2 class="project-label">Nhà đất bán mới nhất</h2>
                <x-redirect-btn url="/home" title="Xem tất cả" style="simple">
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                </x-redirect-btn>
            </div>
            <div class="project-content">
                @foreach ($all_projects as $project)
                    <div class="cell">
                        <img src="{{ $project->source }}" alt="" />
                        <div class="project-caption">
                            <p class="price"><span class="price">{{ $project->price }}</p>
                            <p class="desc">
                                <ion-icon name="expand-outline"></ion-icon> <span class="area_square">{{ $project->project_acreage }}</sup>
                            </p>
                            <p class="about">{{ $project->project_name }}</p>
                            <p class="address">{{ $project->project_address }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="for-rent">
                <div class="project-header">
                    <h2 class="project-label">Nhà đất thuê mới nhất</h2>
                    <x-redirect-btn url="/home" title="Xem tất cả" style="simple">
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </x-redirect-btn>
                </div>
                <div class="project-content">
                    <div class="cell">
                        <img src="https://cdn.realtor.ca/listing/TS637908502113670000/reb10/highres/1/E4299651_3.jpg" alt="" class="pic1" />
                        <div class="project-caption">
                            <p class="price"><span class="price">4.8 triệu</span>/m<sup>2</sup></p>
                            <p class="desc">
                                <ion-icon name="expand-outline"></ion-icon> <span class="area_square">50</span>m<sup>2</sup>
                            </p>
                            <p class="about">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam est ab velit quo officiis nemo omnis error fugiat aliquid! Sunt minus tempore nulla
                                delectus
                                amet omnis similique, earum animi nihil!</p>
                            <p class="address">69/68 Dang Thuy Tram Street, Ward 13, Binh Thanh District, HCMC</p>
                        </div>
                    </div>
                    <div class="cell">
                        <img src="https://cdn.realtor.ca/listing/TS637908502113670000/reb10/highres/1/E4299651_3.jpg" alt="" class="pic1" />
                        <div class="project-caption">
                            <p class="price"><span class="price">4.8 triệu</span>/m<sup>2</sup></p>
                            <p class="desc">
                                <ion-icon name="expand-outline"></ion-icon> <span class="area_square">50</span>m<sup>2</sup>
                            </p>
                            <p class="about">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam est ab velit quo officiis nemo omnis error fugiat aliquid! Sunt minus tempore nulla
                                delectus
                                amet omnis similique, earum animi nihil!</p>
                            <p class="address">69/68 Dang Thuy Tram Street, Ward 13, Binh Thanh District, HCMC</p>
                        </div>
                    </div>
                    <div class="cell">
                        <img src="https://cdn.realtor.ca/listing/TS637908502113670000/reb10/highres/1/E4299651_3.jpg" alt="" class="pic1" />
                        <div class="project-caption">
                            <p class="price"><span class="price">4.8 triệu</span>/m<sup>2</sup></p>
                            <p class="desc">
                                <ion-icon name="expand-outline"></ion-icon> <span class="area_square">50</span>m<sup>2</sup>
                            </p>
                            <p class="about">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam est ab velit quo officiis nemo omnis error fugiat aliquid! Sunt minus tempore nulla
                                delectus
                                amet omnis similique, earum animi nihil!</p>
                            <p class="address">69/68 Dang Thuy Tram Street, Ward 13, Binh Thanh District, HCMC</p>
                        </div>
                    </div>
                    <div class="cell">
                        <img src="https://cdn.realtor.ca/listing/TS637908502113670000/reb10/highres/1/E4299651_3.jpg" alt="" class="pic1" />
                        <div class="project-caption">
                            <p class="price"><span class="price">4.8 triệu</span>/m<sup>2</sup></p>
                            <p class="desc">
                                <ion-icon name="expand-outline"></ion-icon> <span class="area_square">50</span>m<sup>2</sup>
                            </p>
                            <p class="about">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam est ab velit quo officiis nemo omnis error fugiat aliquid! Sunt minus tempore nulla
                                delectus
                                amet omnis similique, earum animi nihil!</p>
                            <p class="address">69/68 Dang Thuy Tram Street, Ward 13, Binh Thanh District, HCMC</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="company">
                <div class="project-header">
                    <h2 class="project-label">Doanh nghiệp hợp tác</h2>
                </div>
                <div class="about">
                    <div class="company-cell">
                        <img src="https://nhadatvui.vn/uploads/images/233230d06573eebd260a1413dfd0f96f.jpg" alt="">
                    </div>
                    <div class="company-cell">
                        <img src="https://nhadatvui.vn/uploads/images/e08b5baa7db7cca65ce6224c984e3e6e.png" alt="">
                    </div>
                    <div class="company-cell">
                        <img src="https://nhadatvui.vn/uploads/images/3b25726195960b9691cd1df0a23ba40c.jpg" alt="">
                    </div>
                    <div class="company-cell">
                        <img src="https://nhadatvui.vn/uploads/images/43f4e907fe9fe1b1b6485ed025f21f6b.jpg" alt="">
                    </div>
                    <div class="company-cell">
                        <img src="https://nhadatvui.vn/uploads/images/741de67482ad9b50858dc053abd931ef.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
