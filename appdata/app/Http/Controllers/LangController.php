<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;



class LangController extends Controller
{
    //Analyse de langues
    public function langroute(Request $request)
    {

        //on recupere la langue demander
        //////Route::getRoutes()->getRoutesByName()
        $url = url()->previous();//url recupere


        $route_base =env('APP_URL'); //url de base


        //$route = Arr::last($url, $route_base); //recupere le url apres avoir enlever la base url
        $route = Str::after($url, $route_base);//recupere le url apres avoir enlever la base url


       

        //convertir en array
        $r_array=explode('/', $route);
        $newlang = $request->selectlang;//langue demande
        // $oldlang = @$r_array[0];
        // $lasturl = @$r_array[1]; 
        $oldlang = @$r_array[1];
        $lasturl = @$r_array[2];

        //dd($route,$r_array,$newlang,$oldlang,$lasturl);

        //New full url
         //$fullnewroute = $route_base.$newlang.'/'.$lasturl;
         $fullnewroute = $route_base.'/'.$newlang.'/'.$lasturl;


         //dd($fullnewroute);
        return redirect()->to($fullnewroute);
    }

}
