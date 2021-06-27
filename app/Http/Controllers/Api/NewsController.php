<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Http\Resources\NewsCollection;
use App\Http\Resources\NewsResource;
use App\Models\News;
use App\Repositories\Interfaces\NewsRepositoryInterface;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a lisnewsg of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $newsRepository;
    public function __construct(NewsRepositoryInterface $newsRepository){
        $this->newsRepository = $newsRepository;
    }
    public function index()
    {
        $newsList = News::all();
        return new NewsCollection($newsList);
    }

    
    public function show($id)
    {
        $newsList = News::find($id);
        return new NewsResource($cat);
    }

    /**
     * Show the form for edinewsg the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}