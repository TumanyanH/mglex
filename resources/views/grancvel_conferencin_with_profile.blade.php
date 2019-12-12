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
        <h2 style="background: #F2F2F2;text-transform: uppercase;" class="hth_title" style="color: #121212; font-weight: 400;">Գրանցվել կոնֆերանսին</h2>

        <div class="container" style="padding-bottom: 30px;">
            <div class="p-190 text-center" style="margin-top: 100px !important;">
                <div class="form_control">
                    <label class="text-left">Երկիրը  *</label>
                    <input type="text" value=""/>
                </div>

                <div class="flex_contant mb-15">
                   <div class="form_left">
                        <div class="form_control">
                            <label class="text-left">Փաթեթի անունը  *</label>
                            <select>
                                <option></option>
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                            </select>
                        </div>
                   </div>
                   <div class="form_right">
                        <div class="form_control">
                            <label class="text-left">Արժեք  *</label>
                            <select>
                                <option></option>
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                            </select>
                        </div>
                   </div>
                </div>


                

                <p class="text-left line-height" style="padding: 15px 0;">
                    Կոնֆերանսին մասնակցությունը կազմակերպելու համար անձնական տվյալները տրամադրել հովանավոր կազմակերպություններին:
                </p>

                <div style="width: 100%;">
                    <input type="checkbox" style="margin: 10px;"/>
                    <span>Այո</span>
                    <input type="checkbox" style="margin: 10px;"/>
                    <span>Ոչ</span>
                </div>
                
                <p class="text-left line-height" style="padding: 15px 0;">
                    Ցանկանում եք Ձեր տվյալները պահպանենք համագումարներին մասնակցելու, նոր լուրեր ստանալու և ընդհանրապես մեզ հետ կապն ապահովելու համար:
                </p>

                <div style="width: 100%;">
                    <input type="checkbox" style="margin: 10px;"/>
                    <span>Այո</span>
                    <input type="checkbox" style="margin: 10px;"/>
                    <span>Ոչ</span>
                </div>

                <p class="text-left line-height" style="padding: 15px 0;">
                    Ցանկանում եք սույն կոնֆերանսին մասնակցելու համար ստանալ պաշտոնական հրավեր՝ նամակի տեսքով:
                </p>

                <div style="width: 100%;">
                    <input type="checkbox" style="margin: 10px;"/>
                    <span>Այո</span>
                    <input type="checkbox" style="margin: 10px;"/>
                    <span>Ոչ</span>
                </div>


                <p class="text-left line-height"><span style="color: #0620CE;">Ուշադրությո՛ւն 1.</span> գումարների վերադարձը կիրականացվի Համագումարի ավարտից հետո:Գրանցման անվավեր ճանաչման և գումարի վերադարձման քաղաքականություն</p>
                <p class="text-left line-height" style="margin-top: 15px;"><span style="color: #0620CE;">Ուշադրությո՛ւն 2.</span> Մինչև 2019 թ. հունիսի 10-ն ապավավերացման դեպքում կվերադարձվի ամբողջ գումարը՝ բացառությամբ բանկային փոխանցումների արժեքը։ Ավելի ուշ ապավավերացման դեպքում բանկային փոխանցումների հետ նաև կպահվի ամբողջ գումարի 30%-ը։</p>


                <div style="width: 100%;margin-top: 15px;">
                    <input type="checkbox" style="margin: 10px;"/>
                    <span>Առցանց վճարում</span>
                    <input type="checkbox" class="show_or_not" style="margin: 10px;"/>
                    <span>Բանկային փոխանցում</span>
                    <input type="checkbox" style="margin: 10px;"/>
                    <span>Վճարում կոնֆերանսի ժամանակ</span>
                </div>

                <p class="text-left line-height" style="margin-top: 25px;">
                    Ցանկանում եք ներկայացված սույն տեղեկատվության հիման վրա ստեղծել  անձնական էջ՝ այսուհետ տեղեկացված լինելու համար
                </p>


                <div style="width: 100%;">
                    <input type="checkbox" style="margin: 10px;"/>
                    <span>Այո</span>
                    <input type="checkbox" style="margin: 10px;"/>
                    <span>Ոչ</span>
                </div>

                <h3 style="font-size: 36px;color:#121212; font-weight: 700;margin-top: 30px;margin-bottom: 30px;">Բանկային տվյալներ` դրամական փոխանցՈՒՄ</h3>
<div class="show_content">



                <ul class="banck_ul">
                    <li>TRANSFER IN USD CURRENCY<br>
                            BENEFICIARY’S BANK
                            </li>
                    <li>SWIFT (BIC)
                        </li>
                    <li>CORRESPONDENT BANK
                        </li>
                    <li>SWIFT (BIC)
                        </li>
                    <li>BENEFICIARY’S ACCOUNT
                        </li>
                    <li>BENEFICIARY’S NAME
                        </li>
                    <li>INTERMEDIARY BANK
                        </li>
                    <li>SWIFT</li>
                    <li>CONVERSE BANK CJSC, YEREVAN, ARMENIA
                        </li>
                </ul>

                <ul class="banck_ul">
                    <li>TRANSFER IN USD CURRENCY<br>
                            BENEFICIARY’S BANK
                            </li>
                    <li>SWIFT (BIC)
                        </li>
                    <li>CORRESPONDENT BANK
                        </li>
                    <li>SWIFT (BIC)
                        </li>
                    <li>BENEFICIARY’S ACCOUNT
                        </li>
                    <li>BENEFICIARY’S NAME
                        </li>
                    <li>INTERMEDIARY BANK
                        </li>
                    <li>SWIFT</li>
                    <li>CONVERSE BANK CJSC, YEREVAN, ARMENIA
                        </li>
                </ul>

                <ul class="banck_ul">
                    <li>TRANSFER IN USD CURRENCY<br>
                            BENEFICIARY’S BANK
                            </li>
                    <li>SWIFT (BIC)
                        </li>
                    <li>CORRESPONDENT BANK
                        </li>
                    <li>SWIFT (BIC)
                        </li>
                    <li>BENEFICIARY’S ACCOUNT
                        </li>
                    <li>BENEFICIARY’S NAME
                        </li>
                    <li>INTERMEDIARY BANK
                        </li>
                    <li>SWIFT</li>
                    <li>CONVERSE BANK CJSC, YEREVAN, ARMENIA
                        </li>
                </ul>


                <p class="text-left line-height" style="margin-top: 50px;"><span style="color: #0620CE;">Ուշադրությո՛ւն 3.</span> Խնդրում եմ չմոռանալ ուղարկել փաստաթղթի սքանավորված նկարը մեր info@5imca.am Էլ. հասցեին կամ կցել Ձեր անձնական էջի Կցել փաստաթղթեր բաժնում
                    </p>


</div>
                
                <button class="see_on_map sign_up_popup_btn text-center mb-15">ԳՐԱՆՑՎԵԼ</button>

            </div>
        </div>
        
    </section>

    <script>
        $('.show_or_not').click(function(){
            if($(this).prop("checked") == true){
                $('.show_content').css('display','block');
            }
            else if($(this).prop("checked") == false){
                $('.show_content').css('display','none');
            }
        });
    </script>

@endsection
