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
        <h2 style="background: #F2F2F2;text-transform: uppercase;" class="hth_title" style="color: #121212; font-weight: 400;">Վճարային փաստաթղթեր</h2>

         
        <div class="container">
            <div class="p-15">

                
                <input class="add_new_file" type="file" value="" style="visibility: hidden; position:absolute;">
                <button class="add_file"><i class="fas fa-plus" style="margin-right: 15px;"></i>Կցել փաստաթուղթ</button>


            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="p-15 text-center">
                <div class="document_card">
                    <img src="./img/document_img.png" alt="" title="">
                    <p class="data_document">10.10.2016</p>
                </div>
                <div class="document_card">
                    <img src="./img/document_img.png" alt="" title="">
                    <p class="data_document">10.10.2016</p>
                </div>
                <div class="document_card">
                    <img src="./img/document_img.png" alt="" title="">
                    <p class="data_document">10.10.2016</p>
                </div>
                <div class="document_card">
                    <img src="./img/document_img.png" alt="" title="">
                    <p class="data_document">10.10.2016</p>
                </div>
            </div>
        </div>

    </section>

   <script>
       $(document).ready(function() {
           $('.add_file').click(function(){
               $('.add_new_file').trigger('click');
           })
       })
   </script>

@endsection
