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

    <div class="container">
        <div class="p-15">
            <p style="margin-top: 20px;margin-bottom: 20px;">Հայաստանի մասին/Ազգային/Ավանդույթներ</p>
            <ul class="tab">
                <li class="tab_btn active_tab" data-id="1">Ավանդույթներ</li>
                <li class="tab_btn" data-id="2">Մշակույթ</li>
                <li class="tab_btn" data-id="3">Տոներ</li>
            </ul>
        </div>
    </div>

    <div class="container" dataContainer-id="1" style="padding-bottom: 40px;">
        <div class="p-15">
            <div class="left_side">
                <div class="card_left_side left_side_haysatani_masin">
                    <img src="./img/Mask Group 43.png" alt="" title=""/>
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
            <div class="right_side right_side_haysatani_masin">
                <button class="search_button_top" style="position: relative;"><img src="./img/calendar.png" alt="" title="">Որոնում
                    <div class="calendar">
                        <div class="form_control" style="width: 45%;display: inline-block;">
                            <label>Սկիզմ</label>
                            <input type="date">
                        </div>
                        <div class="form_control" style="width: 45%;display: inline-block;">
                            <label>Ավարտ</label>
                            <input type="date">
                        </div>
                    </div>
                </button>
                <div class="clear-both"></div>
                <div class="srolling">
                    
                    <div class="mini_card">
                        <img src="./img/mini_card.png" alt="" title="" >
                        <h4>Lorem ipsum Lorem ipsum</h4>
                        <ul>
                            <li><img src="./img/calendar.png" alt="">10.10.10</li>
                            <li><img src="./img/clock.png" alt="">10.10</li>
                            <li><img src="./img/Group 280.png" alt="">1010</li>
                        </ul>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                        <button>ԱՎԵԼԻՆ</button>
                    </div>
                    <div class="mini_card">
                        <img src="./img/mini_card.png" alt="" title="" >
                        <h4>Lorem ipsum Lorem ipsum</h4>
                        <ul>
                            <li><img src="./img/calendar.png" alt="">10.10.10</li>
                            <li><img src="./img/clock.png" alt="">10.10</li>
                            <li><img src="./img/Group 280.png" alt="">1010</li>
                        </ul>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                        <button>ԱՎԵԼԻՆ</button>
                    </div>
                    <div class="mini_card">
                        <img src="./img/mini_card.png" alt="" title="" >
                        <h4>Lorem ipsum Lorem ipsum</h4>
                        <ul>
                            <li><img src="./img/calendar.png" alt="">10.10.10</li>
                            <li><img src="./img/clock.png" alt="">10.10</li>
                            <li><img src="./img/Group 280.png" alt="">1010</li>
                        </ul>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                        <button>ԱՎԵԼԻՆ</button>
                    </div>

                    <div class="mini_card">
                        <img src="./img/mini_card.png" alt="" title="" >
                        <h4>Lorem ipsum Lorem ipsum</h4>
                        <ul>
                            <li><img src="./img/calendar.png" alt="">10.10.10</li>
                            <li><img src="./img/clock.png" alt="">10.10</li>
                            <li><img src="./img/Group 280.png" alt="">1010</li>
                        </ul>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                        <button>ԱՎԵԼԻՆ</button>
                    </div>

                    <div class="mini_card">
                        <img src="./img/mini_card.png" alt="" title="" >
                        <h4>Lorem ipsum Lorem ipsum</h4>
                        <ul>
                            <li><img src="./img/calendar.png" alt="">10.10.10</li>
                            <li><img src="./img/clock.png" alt="">10.10</li>
                            <li><img src="./img/Group 280.png" alt="">1010</li>
                        </ul>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                        <button>ԱՎԵԼԻՆ</button>
                    </div>

                    <div class="mini_card">
                        <img src="./img/mini_card.png" alt="" title="" >
                        <h4>Lorem ipsum Lorem ipsum</h4>
                        <ul>
                            <li><img src="./img/calendar.png" alt="">10.10.10</li>
                            <li><img src="./img/clock.png" alt="">10.10</li>
                            <li><img src="./img/Group 280.png" alt="">1010</li>
                        </ul>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                        <button>ԱՎԵԼԻՆ</button>
                    </div>

                    <div class="mini_card">
                        <img src="./img/mini_card.png" alt="" title="" >
                        <h4>Lorem ipsum Lorem ipsum</h4>
                        <ul>
                            <li><img src="./img/calendar.png" alt="">10.10.10</li>
                            <li><img src="./img/clock.png" alt="">10.10</li>
                            <li><img src="./img/Group 280.png" alt="">1010</li>
                        </ul>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                        <button>ԱՎԵԼԻՆ</button>
                    </div>

                    <div class="mini_card">
                        <img src="./img/mini_card.png" alt="" title="" >
                        <h4>Lorem ipsum Lorem ipsum</h4>
                        <ul>
                            <li><img src="./img/calendar.png" alt="">10.10.10</li>
                            <li><img src="./img/clock.png" alt="">10.10</li>
                            <li><img src="./img/Group 280.png" alt="">1010</li>
                        </ul>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                        <button>ԱՎԵԼԻՆ</button>
                    </div>

                    <div class="mini_card">
                        <img src="./img/mini_card.png" alt="" title="" >
                        <h4>Lorem ipsum Lorem ipsum</h4>
                        <ul>
                            <li><img src="./img/calendar.png" alt="">10.10.10</li>
                            <li><img src="./img/clock.png" alt="">10.10</li>
                            <li><img src="./img/Group 280.png" alt="">1010</li>
                        </ul>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                        <button>ԱՎԵԼԻՆ</button>
                    </div>

                </div>
            </div>
            <div class="clear-both"></div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            var right_height = $('.card_left_side').height() - 20;
            $('.srolling').css('height', right_height);

            $('.tab li').click(function() {
                $('.tab li').each(function() {
                    $(this).removeClass('active_tab');
                })

                $(this).addClass('active_tab');

                console.log($(this).data('id'))
            })
        })
    </script>

@endsection