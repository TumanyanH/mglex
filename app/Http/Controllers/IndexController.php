<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request, $pagename)
    {
        $pages = [
            'banaxosner',
            'conferanci_masin',
            'credits',
            'grancman_vcharner',
            'grancvel_conferencin_no_profile',
            'grancvel_conferencin_with_profile',
            'hayastani_masin',
            'hayastani_masin2',
            'haytararutyun',
            'hovanavorner',
            'hraver',
            'hth',
            'inchu_masnakcel',
            'index',
            'kap',
            'kazmakerputyunner',
            'kazmkomite',
            'kecutyan_vayr',
            'kecutyan_vayr2',
            'lrahos',
            'lur',
            'mer_masin',
            'mer_masin2',
            'nkarashar1',
            'nkarasrah',
            'tesasrah',
            'tesasrah1',
            'unxevorutyunner',
            'vcharayin_pastatxter',
        ];
        if(in_array($pagename, $pages)) {
            return view($pagename);
        }
        return back();
    }
}
