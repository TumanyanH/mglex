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
<section class="hth_section">
    <h2 style="background: #F2F2F2;text-transform: uppercase;" class="hth_title" style="color: #121212; font-weight: 400;">Համագումարի մասնակցության<br>
        գրանցման վճարներ</h2>
</section>

<section style="background: #F2F2F2;">
    <div class="container">
        <div class="p-15 text-center">

            <div class="price_card">
                <div class="top_area_block position-relative">
                    <img src="./img/bgbg.png" alt="" title="">
                    <p>Վաղ գրանցում</p>
                </div>
                <ul>
                    <li>120 000 AMD</li>
                    <li>16 000 RUB</li>
                    <li>225 EUR</li>
                    <li>250 USD</li>
                </ul>
                <button class="dock_button">ԳՐԱՆՑՎԵԼ</button>
            </div>

            <div class="price_card">
                <div class="top_area_block position-relative">
                    <img src="./img/bgbg.png" alt="" title="">
                    <p>գրանցում</p>
                </div>
                <ul>

                    <li>145 000 AMD</li>
                    <li>19 000 RUB</li>
                    <li>270 EUR</li>
                    <li>300 USD</li>
                </ul>
                <button class="dock_button">ԳՐԱՆՑՎԵԼ</button>
            </div>

        </div>
    </div>

    <div class="container" style="padding-bottom: 30px;">
        <div class="p-190 text-center" style="margin-top: 100px !important;">
            <p class="text-center line-height">
                Նույն ընտանիքից մեկից ավելի մասնակցի գրանցման դեպքում յուրաքանչյուրին կտրամադրվի համապատասխան զեղչ, բժիշկներին՝ 50%, բուժքույրերին, ուսանողներին և ռեզիդենտներին՝ 25%:
            </p><br>

            <p class="text-center line-height">
                Գրանցման վճարը ներառում է մասնակցություն բոլոր գիտական սեկցիաներին, անվանական բաջ, մասնակցի պայուսակ՝ տպագիր նյութերով, կոկտեյլ-ընդունելություն, սուրճի ընդմիջումներ և լանչ:

            </p><br>
            <p class="text-center line-height">Գրանցման վճարը չի ներառում սոցիալական ծրագրի և բանկետի արժեքները, որոնք պետք է վճարվեն առանձին, տեղում:

            </p><br>
            <p class="text-center line-height">Հարգելի մասնակիցներ, եթե դուք ցանկանում եք, որ Ձեր թեզիսները հաստատվեն Բարձրագույն ատեստական հանձնաժողովով, գրեք համագումարի պաշտոնական էլ. հասցեին. info@5imca.am</p>
        </div>
    </div>
</section>



@endsection