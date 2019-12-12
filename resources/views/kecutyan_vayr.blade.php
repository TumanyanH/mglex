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
    <section class="owl_section">
            <div class="owl-carousel owl-theme">
                <section class="place_section item" style="padding-bottom: 100px;">
                    <div class="container">
                        <div class="p-15">
                            <h2 class="place_title">Անցկացման վայրը
                            </h2>
                            <p class="place-text">ԻԲԻՍ ԵՐԵՎԱՆ ԿԵՆՏՐՈՆ հյուրանոց Հայաստան,
                            </p>
            
                            <div class="address">
                                <p>Հասցե</p>
                                <p>0001, Երևան</p>
                                <p>Հյուսիսային պող., 5/1 շենք</p>
                                <p>(Կենտրոն վարչ. շրջան)</p>
                                <p>հեռախոս</p>
                                <p>+374-10-595959</p>
                                <button class="see_on_map">Դիտել քարտեզի վրա</button>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="place_section item" style="padding-bottom: 100px;">
                    <div class="container">
                        <div class="p-15">
                            <h2 class="place_title">Անցկացման վայրը
                            </h2>
                            <p class="place-text">ԻԲԻՍ ԵՐԵՎԱՆ ԿԵՆՏՐՈՆ հյուրանոց Հայաստան,
                            </p>
            
                            <div class="address">
                                <p>Հասցե</p>
                                <p>0001, Երևան</p>
                                <p>Հյուսիսային պող., 5/1 շենք</p>
                                <p>(Կենտրոն վարչ. շրջան)</p>
                                <p>հեռախոս</p>
                                <p>+374-10-595959</p>
                                <button class="see_on_map">Դիտել քարտեզի վրա</button>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="place_section item" style="padding-bottom: 100px;">
                    <div class="container">
                        <div class="p-15">
                            <h2 class="place_title">Անցկացման վայրը
                            </h2>
                            <p class="place-text">ԻԲԻՍ ԵՐԵՎԱՆ ԿԵՆՏՐՈՆ հյուրանոց Հայաստան,</p>
            
                            <div class="address">
                                <p>Հասցե</p>
                                <p>0001, Երևան</p>
                                <p>Հյուսիսային պող., 5/1 շենք</p>
                                <p>(Կենտրոն վարչ. շրջան)</p>
                                <p>հեռախոս</p>
                                <p>+374-10-595959</p>
                                <button class="see_on_map">Դիտել քարտեզի վրա</button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            
        </section>


    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                items:1,
                lazyLoad:true,
                loop:true,
                margin:10,
                nav: true,
                dots: false,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                smartSpeed: 1000,
                navText: ["<img src='./img/prev.png'>","<img src='./img/next.png'>"]    
            });

            var footer_height = $('footer').height(); 
            $('place-section.item').css('height', 'calc(100% - '+footer_height+')');
        })
    </script>

@endsection