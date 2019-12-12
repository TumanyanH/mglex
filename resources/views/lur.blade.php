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

    @media (max-width: 992px) {
        .hth_title {
            text-align: center;
        }
        .hth_title p {
            margin-left: 0 !important;
        }
    }

</style>
    <section class="section_img">
        
    </section>

    <section class="hth_section" style="padding-bottom: 150px;">
        <h2 class="hth_title" style="color: #121212; font-weight: 400;">Հայտարարություն <p style="font-size: 24px;display: inline-block;margin-left: 100px;" class="date_time"><img src="./img/calendar.png" /> 10.10.10  <img class="ml-35" src="./img/clock.png" /> 10:10</p></h2>

        

    <div class="container">
        <div class="p-30">
            
            <p class="line-height text-center">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>

        </div>
    </div>
        
    </section>

@endsection

