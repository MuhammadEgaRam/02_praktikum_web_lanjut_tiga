<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news (){
        return redirect() -> to('https://www.educastudio.com/news');
    }
    public function covid ($id){
        return redirect() -> to('https://www.educastudio.com/news/' .$id);
    }
}
