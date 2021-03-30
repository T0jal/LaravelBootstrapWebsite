<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Card;
use App\Post;
use App\Gallery;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view ('pages.home',
        [
            'cards'=>Card::take(3)->get(),
            'sliders'=>Slider::take(3)->get(),
            'posts'=>Post::take(3)->get(),
        ]
        );
    }
    public function gallery(){
        $galleries = Gallery::take(4)->get();
        return view ('pages.gallery',
            [
                'galleries'=>$galleries
            ]
        );
    }
}
