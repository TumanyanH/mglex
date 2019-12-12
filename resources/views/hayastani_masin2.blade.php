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
    </style>


    <section class="big_owl">

        <div class="owl-carousel owl-theme">
            <div class="item big_background" style="background-image: url('./img/big_bg.png');">
                <h2 class="big_title">LOREM IPSUM</h2>
            </div>
            <div class="item big_background" style="background-image: url('./img/big_bg.png');">
                <h2 class="big_title">LOREM IPSUM</h2>
            </div>
            <div class="item big_background" style="background-image: url('./img/big_bg.png');">
                <h2 class="big_title">LOREM IPSUM</h2>
            </div>
            <div class="item big_background" style="background-image: url('./img/big_bg.png');">
                <h2 class="big_title">LOREM IPSUM</h2>
            </div>
        </div>
        

    </section>

    <div class="container">
        <div class="p-60">
            <ul class="content_ul_block">
                <li>
                    <div class="content_text">
                        <h4>Lorem ipsum is simply dummy text of the printing</h4>
                        <p class="line-height">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
                                unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.ng Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu
                                ng Lorem Ipsum passages, and more recently with 
                                </p>
                        <a href="">Ավելին ...</a>
                    </div>
                    <img src="./img/c1.png" alt="" title="">
                    <div class="clear-both"></div>
                </li>
                <li>
                    <div class="content_text">
                        <h4>Lorem ipsum is simply dummy text of the printing</h4>
                        <p class="line-height">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
                                unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.ng Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu
                                ng Lorem Ipsum passages, and more recently with 
                                </p>
                        <a href="">Ավելին ...</a>
                    </div>
                    <img src="./img/c2.png" alt="" title="">
                    <div class="clear-both"></div>
                </li>
                <li>
                    <div class="content_text">
                        <h4>Lorem ipsum is simply dummy text of the printing</h4>
                        <p class="line-height">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
                                unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.ng Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu
                                ng Lorem Ipsum passages, and more recently with 
                                </p>
                        <a href="">Ավելին ...</a>
                    </div>
                    <img src="./img/c2.png" alt="" title="">
                    <div class="clear-both"></div>
                </li>
            </ul>
        </div>
    </div>
    


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
        })
    </script>

@endsection