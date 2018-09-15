<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        $title = "Pagina Inicial";
        $instagramapi = "https://api.instagram.com/oauth/authorize/?client_id=461f1c55efe444e4856cea157bec2b41&redirect_uri=http://localhost&response_type=token&scope=public_content";
        $tokeninsta = "602925651.461f1c5.d852f2f5c283477bbfdec2bcc8e07ca7";
        $getpost = "https://api.instagram.com/v1/tags/faculdadecambury/media/recent?access_token=".$tokeninsta;
        $results = "";
        $results2 = "";

        $statisticsJson = file_get_contents("https://api.instagram.com/v1/tags/faculdadecambury/media/recent?access_token=602925651.461f1c5.d852f2f5c283477bbfdec2bcc8e07ca7");
        $statisticsObj = json_decode($statisticsJson);
        if ($statisticsObj !== null) {
        $results = $statisticsObj->data;
        } else {
        $results = "deu ruim";
        }

        $statisticsJson2 = file_get_contents("https://api.instagram.com/v1/users/self/?access_token=602925651.461f1c5.d852f2f5c283477bbfdec2bcc8e07ca7");
        $statisticsObj2 = json_decode($statisticsJson2);
        if ($statisticsObj2 !== null) {
        $results2 = $statisticsObj2->data;
        } else {
        $results2 = "deu ruim";
        }


        return view('index', [
            'title'     => $title,
            'results'   => $results,
            'results2'  => $results2
        ]);


    }
}
