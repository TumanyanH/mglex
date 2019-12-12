@extends('layouts.app')

@section('content')

    <style>
        .owl-nav {
            position: absolute;
            width: 100%;
            bottom: 50px;
        }
        .owl-dots {
            position: absolute;
            right: 0;
            transform: rotate(90deg);
            top: 260px;
            z-index: 999;
        }
        button.owl-dot span:after {
            content: "";
            width: 20px;
            height: 2px;
            background: white;
            top: 9px;
            position: absolute;
            z-index: -1;
        }

        button.owl-dot:nth-child(1) span::before {
            content: "նորություններ";
            width: 20px;
            height: 2px;
            top: 155px;
            position: absolute;
            z-index: -1;
            text-transform: uppercase;
            transform: rotate(-90deg);
            left: -4px;
            color: #fff;
            font-weight: 700;
        }
        button.owl-dot:nth-child(2) span::before {
            content: "նկարադարան";
            width: 20px;
            height: 2px;
            top: 155px;
            position: absolute;
            z-index: -1;
            text-transform: uppercase;
            transform: rotate(-90deg);
            left: 20px;
            color: #fff;
            font-weight: 700;
        }
        button.owl-dot:nth-child(3) span::before {
            content: "տեսադարան";
            width: 20px;
            height: 2px;
            top: 155px;
            position: absolute;
            z-index: -1;
            text-transform: uppercase;
            transform: rotate(-90deg);
            left: 43px;
            color: #fff;
            font-weight: 700;
        }
        button.owl-dot:nth-child(4) span::before {
            content: "Ազգային";
            width: 20px;
            height: 2px;
            top: 155px;
            position: absolute;
            z-index: -1;
            text-transform: uppercase;
            transform: rotate(-90deg);
            left: 65px;
            color: #fff;
            font-weight: 700;
        }

        button.owl-dot:last-child span:after {
            content: unset;
        }

        button.owl-dot span {
            background: #fff !important;
        }

        button.owl-dot.active span {
            background: #166DA2 !important;
        }
        .item.pad.text-center {
            min-height: 360px;
            height: 360px;
            padding-bottom: 10px;
        }
        img.prevS.slick-arrow{
            position: absolute;
            bottom: 0;
            left: 45%;
        }
        img.nextS.slick-arrow{
            right: 45%;
            position: absolute;
            bottom: 0;
        }
    </style>


    <section class="big_owl">

        <div class="owl-carousel owl-theme">
            <div class="item big_background" style="background-image: url('./img/Image201.png');">
                <h2 class="big_title">Տուրեր</h2>
            </div>
            <div class="item big_background" style="background-image: url('./img/Image201.png');">
                <h2 class="big_title">Տուրեր</h2>
            </div>
            <div class="item big_background" style="background-image: url('./img/Image201.png');">
                <h2 class="big_title">Տուրեր</h2>
            </div>
            <div class="item big_background" style="background-image: url('./img/Image201.png');">
                <h2 class="big_title">Տուրեր</h2>
            </div>
        </div>

    </section>

    <div class="container">
        <div class="p-15">
            <h2 class="kecutyan_vayr2_title text-center">Ուղեվորություն</h2>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="p-15">
                <div class="your-class">
                    <div class="item pad text-center">
                        <img src="./img/slick.png" alt="" title="">
                        <h3>ԱՆԻ ՊԼԱԶԱ</h3>
                        <button>ԱՎԵԼԻՆ</button>
                    </div>
                    <div class="item pad text-center">
                        <img src="./img/slick.png" alt="" title="">
                        <h3>ԱՆԻ ՊԼԱԶԱ</h3>
                        <button>ԱՎԵԼԻՆ</button>
                    </div>
                        <div class="item pad text-center">
                                <img src="./img/slick.png" alt="" title="">
                                <h3>ԱՆԻ ՊԼԱԶԱ</h3>
                                <button>ԱՎԵԼԻՆ</button>
                            </div>
                            <div class="item pad text-center">
                                    <img src="./img/slick.png" alt="" title="">
                                    <h3>ԱՆԻ ՊԼԱԶԱ</h3>
                                    <button>ԱՎԵԼԻՆ</button>
                                </div>
                                <div class="item pad text-center">
                                        <img src="./img/slick.png" alt="" title="">
                                        <h3>ԱՆԻ ՊԼԱԶԱ</h3>
                                        <button>ԱՎԵԼԻՆ</button>
                                    </div>
                                    <div class="item pad text-center">
                                            <img src="./img/slick.png" alt="" title="">
                                            <h3>ԱՆԻ ՊԼԱԶԱ</h3>
                                            <button>ԱՎԵԼԻՆ</button>
                                        </div>
                </div>
            </div>
        </div>
    </section>



    <section class="section_map p-140" style="background: #fff;">
        <iframe src="https://yandex.ru/map-widget/v1/-/CGdtVHK-" width="100%" height="400" frameborder="1" allowfullscreen="true"></iframe>
    </section>



    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                items:1,
                lazyLoad:true,
                loop:true,
                margin:10,
                nav: true,
                dots: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                smartSpeed: 1000,
                navText: ["<img src='./img/prev.png'>","<img src='./img/next.png'>"]
            });

            $('.your-class').slick({
                dots: false,
                infinite: true,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: true,
                prevArrow:"<img class='prevS' src='./img/prev1.png'>",
                nextArrow:"<img class='nextS' src='./img/next1.png'>",
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: false
                        }
                    },{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: false,
                            dots: false
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: false,
                            dots: false
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: false,
                            dots: false
                        }
                    }
                ]
            });


        })
    </script>

@endsection
