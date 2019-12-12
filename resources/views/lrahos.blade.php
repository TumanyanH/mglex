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
    </style>
    <div class="container" style="padding-bottom: 50px;">
        <div class="p-15">
            <div class="left_side">
                <div class="card_left_side">
                    <img src="./img//card_img.png" alt="" title=""/>
                    <h4 class="card_left_side_title">Lorem ipsum Lorem ipsum</h4>
                    <ul>
                        <li><img src="./img/calendar.png" alt="">10.10.10</li>
                        <li><img src="./img/clock.png" alt="">10.10</li>
                        <li><img src="./img/Group 280.png" alt="">1010</li>
                    </ul>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic </p>
                    <button class="card_button">ԱՎԵԼԻՆ</button>
                </div>

            </div>
            <div class="right_side">
                <button class="search_button_top"><img src="./img/calendar.png" alt="" title="">Որոնում</button>
                <div class="clear-both"></div>
                <div class="srolling">
                    <ul>
                        <li>
                            <img class="sm-card-img" src="./img/small_card_img.png" alt="alt" title="title">
                            <div class="sm_card_right_side">
                                <h4>Lorem ipsum Lorem</h4>
                                <ul>
                                    <li><img src="./img/calendar.png" alt="">10.10.10</li>
                                    <li><img src="./img/clock.png" alt="">10.10</li>
                                    <li><img src="./img/Group 280.png" alt="">1010</li>
                                </ul>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                            </div>
                        </li>
                        <li>
                            <img class="sm-card-img" src="./img/small_card_img.png" alt="alt" title="title">
                            <div class="sm_card_right_side">
                                <h4>Lorem ipsum Lorem</h4>
                                <ul>
                                    <li><img src="./img/calendar.png" alt="">10.10.10</li>
                                    <li><img src="./img/clock.png" alt="">10.10</li>
                                    <li><img src="./img/Group 280.png" alt="">1010</li>
                                </ul>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                            </div>
                        </li>
                        <li>
                            <img class="sm-card-img" src="./img/small_card_img.png" alt="alt" title="title">
                            <div class="sm_card_right_side">
                                <h4>Lorem ipsum Lorem</h4>
                                <ul>
                                    <li><img src="./img/calendar.png" alt="">10.10.10</li>
                                    <li><img src="./img/clock.png" alt="">10.10</li>
                                    <li><img src="./img/Group 280.png" alt="">1010</li>
                                </ul>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                            </div>
                        </li>
                        <li>
                            <img class="sm-card-img" src="./img/small_card_img.png" alt="alt" title="title">
                            <div class="sm_card_right_side">
                                <h4>Lorem ipsum Lorem</h4>
                                <ul>
                                    <li><img src="./img/calendar.png" alt="">10.10.10</li>
                                    <li><img src="./img/clock.png" alt="">10.10</li>
                                    <li><img src="./img/Group 280.png" alt="">1010</li>
                                </ul>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                            </div>
                        </li>
                        <li>
                            <img class="sm-card-img" src="./img/small_card_img.png" alt="alt" title="title">
                            <div class="sm_card_right_side">
                                <h4>Lorem ipsum Lorem</h4>
                                <ul>
                                    <li><img src="./img/calendar.png" alt="">10.10.10</li>
                                    <li><img src="./img/clock.png" alt="">10.10</li>
                                    <li><img src="./img/Group 280.png" alt="">1010</li>
                                </ul>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                            </div>
                        </li>
                        <li>
                            <img class="sm-card-img" src="./img/small_card_img.png" alt="alt" title="title">
                            <div class="sm_card_right_side">
                                <h4>Lorem ipsum Lorem</h4>
                                <ul>
                                    <li><img src="./img/calendar.png" alt="">10.10.10</li>
                                    <li><img src="./img/clock.png" alt="">10.10</li>
                                    <li><img src="./img/Group 280.png" alt="">1010</li>
                                </ul>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                            </div>
                        </li>
                        <li>
                            <img class="sm-card-img" src="./img/small_card_img.png" alt="alt" title="title">
                            <div class="sm_card_right_side">
                                <h4>Lorem ipsum Lorem</h4>
                                <ul>
                                    <li><img src="./img/calendar.png" alt="">10.10.10</li>
                                    <li><img src="./img/clock.png" alt="">10.10</li>
                                    <li><img src="./img/Group 280.png" alt="">1010</li>
                                </ul>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clear-both"></div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            var right_height = $('.card_left_side').height() - 20;
            $('.srolling').css('height', right_height);
        })
    </script>
@endsection