<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $getRandom1 = $this->getRandom1();
        $getRandom2 = $this->getRandom2();
        $getTrending = $this->getTrending();
        $getMenu = $this->getMenu();
        $getNewsLasted = $this->getNewsLasted();
        $getNews9Lasted = $this->getNewsLastedN(9);
        $getNews2Lasted = $this->getNewsLastedN(2);
        $getNews6Lasted = $this->getNewsLastedN(6);
        return view('user.index', compact(
            'getRandom1',
            'getRandom2',
            'getTrending',
            'getMenu',
            'getNewsLasted',
            'getNews9Lasted',
            'getNews2Lasted',
            'getNews6Lasted'
        ));
    }
    function getRandom1()
    {
        $getRandom1 = News::inRandomOrder()->take(1)->get();
        return $getRandom1;
    }
    function getRandom2()
    {
        $getRandom2 = News::inRandomOrder()->take(2)->get();
        return $getRandom2;
    }
    function getTrending()
    {
        $getTrending = News::inRandomOrder()->take(5)->get();
        return $getTrending;
    }
    function getMenu()
    {
        $getMenu = Category::take(5)->get();
        return $getMenu;
    }
    function getNewsLasted()
    {
        $getNewsLasted = News::orderBy('created_at', 'desc')->simplePaginate(6);
        return $getNewsLasted;
    }
   
    function showNews($id)
    {
        $getNews2Lasted = $this->getNewsLastedN(2);
        $getNews5Lasted = $this->getNewsLastedN(5);
        $getTrending = $this->getTrending();
        $getMenu = $this->getMenu();
        $news = News::find($id);
        return view('user.show', compact('news', 'getTrending', 'getMenu', 'getNews5Lasted', 'getNews2Lasted'));
    }
    function getNewsLastedN($amount)
    {
        $getNewsLastedN = News::orderBy('created_at', 'desc')->take($amount)->get();
        return $getNewsLastedN;
    }
}
