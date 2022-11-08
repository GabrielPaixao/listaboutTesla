<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ArticleController extends Controller
{
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {       
        return view("list");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listAjax()
    {
        $response = Http::get(getenv('APP_API_HOST').'/'.config('config.get.type').'?q='.config('config.get.filter').'&from='.config('config.get.from').'&sortBy='.config('config.get.sortBy').'&apiKey='.config('config.get.apiKey').''); //Configurável em config/config.php
        $json = $response->json();

        $d = ["data" => array_filter($json['articles'])];

        return $d;
    }

 
}
