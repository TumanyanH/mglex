@extends('layouts.app')

@section('content')
<style>
    .footer_show {
        display: none;
    }

    .padding_margin {
        margin-top: 0;
        padding-top: 0;
    }

    p.text-center {
        margin-top: 100px !important;
    }
</style>
    <style>
        .owl-carousel .owl-dots.disabled, .owl-carousel .owl-nav.disabled {
            display: inline-block;
        }
        .item.pad.text-center {
            min-height: 330px;
            height: 330px;
            padding-bottom: 10px;
        }
        .owl-theme .owl-nav [class*=owl-]:hover {
            background: #fff;
            color: #FFF;
            text-decoration: none;
        }
    </style>

    <div class="container">
        <div class="p-15">
            <h2 class="kecutyan_vayr2_title text-center">Կեցության վայրը</h2>


            <div class="owl-carousel owl-theme">
                <div class="item pad text-center">
                    <img src="./img/a1.png" alt="" title="">
                    <h3>ԱՆԻ ՊԼԱԶԱ</h3>
                    <button>ԱՎԵԼԻՆ</button>
                </div>
                <div class="item pad text-center">
                    <img src="./img/a2.png" alt="" title="">
                    <h3>ԱՆԻ ՊԼԱԶԱ</h3>
                    <button>ԱՎԵԼԻՆ</button>
                </div>
                <div class="item pad text-center">
                    <img src="./img/a3.png" alt="" title="">
                    <h3>ԱՆԻ ՊԼԱԶԱ</h3>
                    <button>ԱՎԵԼԻՆ</button>
                </div>
                <div class="item pad text-center">
                    <img src="./img/a4.png" alt="" title="">
                    <h3>ԱՆԻ ՊԼԱԶԱ</h3>
                    <button>ԱՎԵԼԻՆ</button>
                </div>
            </div>


            <p class="text-center" style="padding: 15px 0;">Այլընտրանքային տարբերակներ <a href="#">booking.com</a></p>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                items:4,
                lazyLoad:true,
                loop:true,
                margin:20,
                nav: true,
                dots: false,
                autoplay: false,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                smartSpeed: 1000,
                navText: ["<img src='./img/prev1.png'>","<img src='./img/next1.png'>"],
                responsiveClass:true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    768: {
                        items: 1,
                        nav: false
                    },
                    992: {
                        items: 2,
                        nav: false
                    },
                    1200: {
                        items: 4,
                        nav: false
                    }
                }
            });
        })
    </script>

@endsection
