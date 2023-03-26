<style>
    .nav {
        justify-content: center;
        align-items: center;
    }

    .nav-item {
        justify-content: center;
        align-items: center;
    }

    .nav-link:focus,
    .nav-link:hover {
        color: #66CC00;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        color: #fff;
        background-color: #66CC00;
    }

    .nav-link {
        text-decoration: none;
        color: white;
        font-weight: bold;
        text-align: center;
        font-size: 20px;
    }

    swiper-container {
        width: 100%;
        height: 100%;
    }

    swiper-slide {
        text-align: center;
        font-size: 18px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: .3s ease-in-out;
    }

    swiper-slide img:hover {
        transform: scale(1.1);
    }

    #pills-tabContent {
        padding-bottom: 60px;
    }

    .tab-content>.active {
        display: block;
        margin-top: 50px;
    }

    .product-name {
        font-weight: bold;
        text-decoration: none;
        text-align: center;
        font-size: 18px;
        color: white;
        margin-top: 10px;
        margin-bottom: 50px;
    }

    .product-name:hover {
        color: #66CC00;
    }
</style>

<div style="">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active rounded-pill" id="pills-home-tab" data-bs-toggle="pill"
                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                aria-selected="true">PHIM ĐANG CHIẾU</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link rounded-pill" id="pills-profile-tab" data-bs-toggle="pill"
                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                aria-selected="false">PHIM SẮP
                CHIẾU</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
            tabindex="0">
            <div class="container" style="width: 90%">
                <swiper-container class="mySwiper" slides-per-view="6" space-between="30" free-mode="true">
                    <swiper-slide>
                        <div>
                            <div class="" style="overflow: hidden">
                                <a href="" title="">
                                    <img src="{{ asset('images/phim1.jpg') }}" alt="..." />
                                </a>
                            </div>
                            <div>
                                <a href="{{ route('movie') }}" class="product-name">
                                    Demon Slayer
                                </a>
                            </div>
                            <div class="">
                                <div class="align-text-bottom">
                                    <div class="col-12">
                                        <form method="get" action="" class="form-muave">
                                            <button class="btn btn-muave"
                                                style="font-weight: bold;width: 100%;border: 0;background: #66CC00;color: white">
                                                <i class="fa fa-ticket"></i> MUA VÉ
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div>
                            <div class="" style="overflow: hidden">
                                <a href="" title="">
                                    <img src="{{ asset('images/phim2.jpg') }}" alt="..." />
                                </a>
                            </div>
                            <div>
                                <a href="" class="product-name">
                                    Finding Doghouse
                                </a>
                            </div>
                            <div class="">
                                <div class="align-text-bottom">
                                    <div class="col-12">
                                        <form method="get" action="">
                                            <button class="btn btn-muave"
                                                style="font-weight: bold;width: 100%;border: 0;background: #66CC00;color: white">
                                                <i class="fa fa-ticket"></i> MUA VÉ
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>
                    <swiper-slide><a href=""><img src="{{ asset('images/phim3.jpg') }}" alt=""></a>
                    </swiper-slide>
                    <swiper-slide><a href=""><img src="{{ asset('images/phim4.jpg') }}" alt=""></a>
                    </swiper-slide>
                    <swiper-slide><a href=""><img src="{{ asset('images/phim4.jpg') }}" alt=""></a>
                    </swiper-slide>
                    <swiper-slide><a href=""><img src="{{ asset('images/phim4.jpg') }}" alt=""></a>
                    </swiper-slide>
                    <swiper-slide><a href=""><img src="{{ asset('images/phim4.jpg') }}" alt=""></a>
                    </swiper-slide>
                    <swiper-slide><a href=""><img src="{{ asset('images/phim4.jpg') }}" alt=""></a>
                    </swiper-slide>
                </swiper-container>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
            tabindex="0">
            <div class="container" style="width: 90%">
                <swiper-container class="mySwiper" slides-per-view="6" space-between="30" free-mode="true">
                    <swiper-slide>
                        <div>
                            <div class="" style="overflow: hidden">
                                <a href="" title="">
                                    <img src="{{ asset('images/phim2.jpg') }}" alt="..." />
                                </a>
                            </div>
                            <div>
                                <a href="" class="product-name">
                                    Finding Doghouse
                                </a>
                            </div>
                            <div class="">
                                <div class="align-text-bottom">
                                    <div class="col-12">
                                        <form method="get" action="">
                                            <button class="btn btn-muave"
                                                style="font-weight: bold;width: 100%;border: 0;background: #66CC00;color: white">
                                                <i class="fa fa-ticket"></i> MUA VÉ
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>
                    <swiper-slide><a href=""><img src="{{ asset('images/phim2.jpg') }}" alt=""></a>
                    </swiper-slide>
                    <swiper-slide><a href=""><img src="{{ asset('images/phim3.jpg') }}" alt=""></a>
                    </swiper-slide>
                    <swiper-slide><a href=""><img src="{{ asset('images/phim4.jpg') }}" alt=""></a>
                    </swiper-slide>
                    <swiper-slide><a href=""><img src="{{ asset('images/phim4.jpg') }}" alt=""></a>
                    </swiper-slide>
                    <swiper-slide><a href=""><img src="{{ asset('images/phim4.jpg') }}" alt=""></a>
                    </swiper-slide>
                    <swiper-slide><a href=""><img src="{{ asset('images/phim4.jpg') }}" alt=""></a>
                    </swiper-slide>
                    <swiper-slide><a href=""><img src="{{ asset('images/phim4.jpg') }}" alt=""></a>
                    </swiper-slide>
                </swiper-container>
            </div>
        </div>
    </div>
</div>
