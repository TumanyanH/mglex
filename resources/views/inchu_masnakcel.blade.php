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
<section class="whay_accept_to_conference" style="box-shadow: none;">
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

            <div class="container">
                <div class="p-60">
                    <p class="whay_accept_to_conference_p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
                </div>
            </div>
        </div>

    </div>

</section>


@endsection
