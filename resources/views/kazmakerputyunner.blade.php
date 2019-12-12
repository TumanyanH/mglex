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
            footer {
                margin-top: 30% !important;
            }
        }
    </style>

    <section class="hth_section">
        <h2 class="hth_title">Կազմակերպություններ</h2>

    <div class="container">
        <div class="p-30">
           <ul class="company_logo">
               <li><a href="#"><img src="./img/logo-01.png"/></a></li>
               <li><a href="#"><img src="./img/logo-02.png"/></a></li>
               <li><a href="#"><img src="./img/logo-03.png"/></a></li>
               <li><a href="#"><img src="./img/logo-04.png"/></a></li>
               <li><a href="#"><img src="./img/logo-05.png"/></a></li>
               <li><a href="#"><img src="./img/logo-06.png"/></a></li>
               <li><a href="#"><img src="./img/logo-07.png"/></a></li>
               <li><a href="#"><img src="./img/logo-08.png"/></a></li>
               <li><a href="#"><img src="./img/logo-09.png"/></a></li>
               <li><a href="#"><img src="./img/logo-10.png"/></a></li>
               <li><a href="#"><img src="./img/logo-11.png"/></a></li>
               <li><a href="#"><img src="./img/logo-12.png"/></a></li>
               <li><a href="#"><img src="./img/logo-13.png"/></a></li>
               <li><a href="#"><img src="./img/logo-14.png"/></a></li>
           </ul>
        </div>
    </div>
        
    </section>

@endsection