@extends('layouts.app')

@section('content')
<script src="./js/timer.js"></script>
<style>
    .hamburger {
        color: #fff !important;
    }
</style>
    <section class="top_secton">
        <div class="container text-center">
            <div class="p-15 text-center">
                <h1>Anesthesiology & Perioperative Medicine Update</h1>
                <p class="conference_start_date">July 09-11, 2020</p>

                <ul class="timer position-relative">
                    <li><span id="days"></span>days</li>
                    <li><span id="hours"></span>Hours</li>
                    <li><span id="minutes"></span>Minutes</li>
                    <li><span id="seconds"></span>Seconds</li>
                </ul>
            </div>

            <a href="/grancvel_conferencin_no_profile"><button class="sign_in_conference">Գրանցվել</button></a>
        </div>
    </section>

    <section class="whay_accept_to_conference">
        <div class="container">
            <div class="p-15">
                <h2 class="whay_accept_to_conference_title">Ինչու մասնակցել կոնֆերանսին</h2>
            </div>

            <div class="container">
                <div class="p-15 flex_contant flex_arraund">
                    <div class="card">
                        <img src="./img/card1.png" alt="" title=""/>
                        <p class="count">1111</p>
                        <P class="card_text">Երկրներ</P>
                    </div>
                    <div class="card">
                        <img src="./img/card2.png" alt="" title=""/>
                        <p class="count">111</p>
                        <P class="card_text">Բանախոսներ</P>
                    </div>
                    <div class="card">
                        <img src="./img/card3.png" alt="" title=""/>
                        <p class="count">11</p>
                        <P class="card_text">Գրանցվածներ</P>
                    </div>
                    <div class="card">
                        <img src="./img/card4.png" alt="" title=""/>
                        <p class="count">11</p>
                        <P class="card_text">Թեզիսներ</P>
                    </div>
                </div>
            </div>

            <div class="container" id="section_dock">
                <div class="p-60">
                    <p class="whay_accept_to_conference_p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
                </div>
            </div>
        </div>
        
    </section>

    <section class="section_dock"  style="margin-top: 25px;">
        <div class="container">
            <div class="p-30 text-center mt-70">
                <div class="docks_card">
                    <img src="./img/docks1.png" alt="" title="" />
                    <div class="card_right_side">
                        <p class="dock_title">Ծրագիր</p>
                        <p class="dock_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem</p>
                        <button class="dock_button">ՆԵՐԲԵՌՆԵԼ</button>
                    </div>
                </div>

                <div class="docks_card">
                    <img src="./img/docks2.png" alt="" title="" />
                    <div class="card_right_side">
                        <p class="dock_title">Կրեդիտներ</p>
                        <p class="dock_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem</p>
                        <a href="/credits"><button class="dock_button">ԿԱՐԴԱԼ</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="place_section">
        <div class="container">
            <div class="p-15">
                <h2 class="place_title">Անցկացման վայրը
                </h2>
                <p class="place-text">ԻԲԻՍ ԵՐԵՎԱՆ ԿԵՆՏՐՈՆ հյուրանոց Հայաստան,
                </p>

                <div class="address" style="position:relative;">
                    <p>Հասցե</p>
                    <p>0001, Երևան</p>
                    <p>Հյուսիսային պող., 5/1 շենք</p>
                    <p>(Կենտրոն վարչ. շրջան)</p>
                    <p>հեռախոս</p>
                    <p>+374-10-595959</p>
                    <button class="see_on_map not_clicked">Դիտել քարտեզի վրա</button>
                    <div class="map_wrapper">
                        <div class="close_map" style="text-align: right;padding-bottom: 10px;">
                            <button class="close_map_btn" style="border: none; background: transparent; outline: none;">
                                <i class="fas fa-times" style="cursor: pointer;"></i>
                            </button>
                        </div>

                        <div id="map" style="width:100%; height:400px"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_map p-140">
        <iframe src="https://yandex.ru/map-widget/v1/-/CGdtVHK-" width="100%" height="400" frameborder="1" allowfullscreen="true"></iframe>
    </section>

@endsection