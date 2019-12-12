@extends('layouts.app')

@section('content')

    <section class="hth_section">
        <h2 style="background: #F2F2F2;" class="hth_title" style="color: #121212; font-weight: 400;">ԿԱՊ</h2>

        <div class="container" style="padding-bottom: 30px;">
            <div class="p-190">
                <div class="form_control">
                    <label>Անուն</label>
                    <input type="text" value="">
                </div>
                <div class="form_control">
                    <label>Էլ. հասցե</label>
                    <input type="email" value="">
                </div>
                <div class="form_control">
                    <label>Ներմուծել տեքստ</label>
                    <textarea style="width: 100%;resize: none;min-height: 450px"></textarea>
                </div>
                <div class="form_control" style="text-align: right;">
                    <input type="file" class="add_file" style="position:absolute;visibility: hidden;">
                    <button class="add_file_button"><img src="./img/metal-paper-clip-.png" align="" title=""> Կցել ֆայլ</button>
                </div>

                <form action="?" method="POST">
                        <div class="g-recaptcha" data-sitekey="6LedRsUUAAAAACovpluo4TnzU9R8Aa_zd7ibX8fn"></div>
                    </form>
                    
                    <button style="margin-top: 15px !important" class="see_on_map sign_in_popup_btn text-center mb-15">Ուղարկել</button>
            </div>
        </div>
        
    </section>


    <section class="section_map p-140" style="background: #fff;">
        <iframe src="https://yandex.ru/map-widget/v1/-/CGdtVHK-" width="100%" height="400" frameborder="1" allowfullscreen="true"></iframe>
    </section>

    @endsection