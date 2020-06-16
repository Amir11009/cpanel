<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->type=='admin'){
            function alexaRank($url)
            {
                $alexaData = simplexml_load_file("http://data.alexa.com/data?cli=10&url=".$url);
                $alexa['globalRank'] =  isset($alexaData->SD->POPULARITY) ? $alexaData->SD->POPULARITY->attributes()->TEXT : 0 ;
                $alexa['CountryRank'] =  isset($alexaData->SD->COUNTRY) ? $alexaData->SD->COUNTRY->attributes() : 0 ;
                return json_decode(json_encode($alexa), TRUE);
            }

            $domain = parse_url(request()->root())['host'];
            if($domain=='127.0.0.1'){
                $url='ima-web.com';
            }
            else{
                $url=$domain;
            }
            $alexa = alexaRank($url);
            $your_country_rank=$alexa['CountryRank']['@attributes']['RANK'];
            $my_country='ایران';
            $global_rank=$alexa['globalRank'][0];
            $country_name=$alexa['CountryRank']['@attributes']['NAME'];
            if($country_name=='Canada'){
                $my_country='کانادا';
            }
            return view('home',compact('your_country_rank','global_rank','url','my_country'));
        }
        else{
            return redirect('/');
        }
    }
}
