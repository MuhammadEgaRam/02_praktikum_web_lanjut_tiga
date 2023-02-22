<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function marbeledu (){
        return redirect() -> to('https://www.educastudio.com/category/marbel-edu-games');
    }
    public function marbelnfriends (){
        return redirect() -> to('https://www.educastudio.com/category/marbel-and-friends-kids-games');
    }
    public function storybooks (){
        return redirect() -> to('https://www.educastudio.com/category/riri-story-books');
    }
    public function kidssongs (){
        return redirect() -> to('https://www.educastudio.com/category/kolak-kids-songs');
    } 
}
