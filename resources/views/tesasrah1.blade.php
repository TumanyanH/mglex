@extends('layouts.app')

@section('content')
<style>
    .footer_show {display: none;}
    .padding_margin {margin-top: 0;padding-top: 0;}
    .mfp-figure {padding: 20px;border-radius: 10px;}
    .mfp-figure:after {background: #fff !important;}
    .mfp-title {text-align: center !important;color: #000 !important;}
    .mfp-counter {display: none !important;}
    .mfp-bottom-bar {margin-top: -47px;position: absolute;top: 100%;width: 100%;left: 0;text-align: center;padding-bottom: 10px;background: #fff;cursor: auto;}
    button.mfp-close {left: -20px;margin-top: 25px;color: #fff !important;opacity: 1;font-weight: lighter;}
    .mfp-image-holder .mfp-close, .mfp-iframe-holder .mfp-close {top: 28px;color: #FFF;right: -5px;text-align: right;padding-right: 6px;width: 100%;color: #121212;}
</style>
<div class="container" style="margin-top: 25px;">
    <div class="p-15">
        <div class="breadcrumb">
            <a href="#">Հայաստանի մասին</a> / <a href="#"><span>Տեսասրահ</span></a>
            <p style="margin-top: 15px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem </p>
        </div>
    </div>
</div>

<div class="container">
    <div class="p-15 text-center scroll_gallery parent-container">
        <div class="img_card" style="position:relative;">
            <a href="./img/img22.png" class="test-popup-link" title="You can add caption to pictures.">
            <img src="./img/img22.png" alt="" title="">
            </a>
            <h3>Lorem ipsum</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lore</p>
            <img class="play_btn img_card1" src="./img/play.png" alt=""/>
        </div>
        <div class="img_card" style="position:relative;">
            <a href="./img/img22.png" class="test-popup-link" title="You can add caption to pictures.">
            <img src="./img/img22.png" alt="" title="">
            </a>
            <h3>Lorem ipsum</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lore</p>
            <img class="play_btn img_card1" src="./img/play.png" alt=""/>
        </div>
        <div class="img_card" style="position:relative;">
            <a href="./img/img22.png" class="test-popup-link" title="You can add caption to pictures.">
            <img src="./img/img22.png" alt="" title="">
            </a>
            <h3>Lorem ipsum</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lore</p>
            <img class="play_btn img_card1" src="./img/play.png" alt=""/>
        </div>
        <div class="img_card" style="position:relative;">
            <a href="./img/img22.png" class="test-popup-link" title="You can add caption to pictures.">
            <img src="./img/img22.png" alt="" title="">
            </a>
            <h3>Lorem ipsum</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lore</p>
            <img class="play_btn img_card1" src="./img/play.png" alt=""/>
        </div>
        <div class="img_card" style="position:relative;">
            <a href="./img/img22.png" class="test-popup-link" title="You can add caption to pictures.">
            <img src="./img/img22.png" alt="" title="">
            </a>
            <h3>Lorem ipsum</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lore</p>
            <img class="play_btn img_card1" src="./img/play.png" alt=""/>
        </div>
        <div class="img_card" style="position:relative;">
            <a href="./img/img22.png" class="test-popup-link" title="You can add caption to pictures.">
            <img src="./img/img22.png" alt="" title="">
            </a>
            <h3>Lorem ipsum</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lore</p>
            <img class="play_btn img_card1" src="./img/play.png" alt=""/>
        </div>
        <div class="img_card" style="position:relative;">
            <a href="./img/img22.png" class="test-popup-link" title="You can add caption to pictures.">
            <img src="./img/img22.png" alt="" title="">
            </a>
            <h3>Lorem ipsum</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lore</p>
            <img class="play_btn img_card1" src="./img/play.png" alt=""/>
        </div>
        <div class="img_card" style="position:relative;">
            <a href="./img/img22.png" class="test-popup-link" title="You can add caption to pictures.">
            <img src="./img/img22.png" alt="" title="">
            </a>
            <h3>Lorem ipsum</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lore</p>
            <img class="play_btn img_card1" src="./img/play.png" alt=""/>
        </div>
        <div class="img_card" style="position:relative;">
            <a href="./img/img22.png" class="test-popup-link" title="You can add caption to pictures.">
            <img src="./img/img22.png" alt="" title="">
            </a>
            <h3>Lorem ipsum</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lore</p>
            <img class="play_btn img_card1" src="./img/play.png" alt=""/>
        </div>
        <div class="img_card" style="position:relative;">
            <a href="./img/img22.png" class="test-popup-link" title="You can add caption to pictures.">
            <img src="./img/img22.png" alt="" title="">
            </a>
            <h3>Lorem ipsum</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lore</p>
            <img class="play_btn img_card1" src="./img/play.png" alt=""/>
        </div>
        <div class="img_card" style="position:relative;">
            <a href="./img/img22.png" class="test-popup-link" title="You can add caption to pictures.">
            <img src="./img/img22.png" alt="" title="">
            </a>
            <h3>Lorem ipsum</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lore</p>
            <img class="play_btn img_card1" src="./img/play.png" alt=""/>
        </div>
        <div class="img_card" style="position:relative;">
            <a href="./img/img22.png" class="test-popup-link" title="You can add caption to pictures.">
            <img src="./img/img22.png" alt="" title="">
            </a>
            <h3>Lorem ipsum</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lore</p>
            <img class="play_btn img_card1" src="./img/play.png" alt=""/>
        </div>
    </div>
</div>

<div class="modal_gallery" style="padding-top:30px">
    <div class="modal_gallery_body text-center">
        <span class="close"><i class="fas fa-times"></i></span>
        <img style="width: 100%;" src="./img/img22.png" alt="" title=""/>
        <p style="margin-top: 15px;">Lorem, ipsum dolor.</p>
    </div>
</div>

<!--<script>-->
<!--    $(document).ready(function() {-->
<!---->
<!--        $('.img_card1').click(function() {-->
<!--            var src_img = $('.img_card').children('img').attr('src');-->
<!--            $('.modal_gallery_body').children('img').attr('src', src_img);-->
<!--            $('.modal_gallery').css('display','block');-->
<!--            $('.close').click(function() {-->
<!--                $('.modal_gallery').css('display','none')-->
<!--            });-->
<!--        })-->
<!--    })-->
<!--</script>-->

@endsection
