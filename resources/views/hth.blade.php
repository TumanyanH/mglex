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
        <h2 class="hth_title">Հաճախ տրվող հարցեր</h2>

    <div class="container">
        <div class="p-30">
            <ul>
                <li class="li_question li_question_active">
                    <h3 class="hth_question_title">Հարց 1
                        <img src="./img/arrow.png" alt="" title="" />
                        <div class="clear-both"></div>
                    </h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </li>
    
                <li class="li_question">
                    <h3 class="hth_question_title">Հարց 2
                        <img src="./img/arrow.png" alt="" title="" />
                        <div class="clear-both"></div>
                    </h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </li>
    
                <li class="li_question">
                    <h3 class="hth_question_title">Հարց 3
                        <img src="./img/arrow.png" alt="" title="" />
                        <div class="clear-both"></div>
                    </h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </li>

                <li class="li_question">
                    <h3 class="hth_question_title">Հարց 4
                        <img src="./img/arrow.png" alt="" title="" />
                        <div class="clear-both"></div>
                    </h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </li>
            </ul>
        </div>
    </div>
        
    </section>

@endsection