<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\Models\KindOfNews;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Repositories\Interfaces\NewsRepositoryInterface;

use PhpParser\Node\Stmt\Return_;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // protected $newsRepository;
    // public function __construct(NewsRepositoryInterface $newsRepository){
    //     $this->newsRepository = $newsRepository;
    // }
    public function index()
    {
        $newsList = News::all();
        return view('admin.news.index', compact('newsList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kindOfNewsList = KindOfNews::all();
        return view('admin.news.create', compact('kindOfNewsList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        News::create($request->only([
            'title',
            'description',
            'content',
            'thumbnail',
            'kindofnews_id',
            'user_id'
        ]));
        Session::flash('success', 'Add Success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        $kindOfNewsList = KindOfNews::all();
        return view('admin.news.edit', compact('news', 'kindOfNewsList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, $id)
    {
        $news = News::find($id);
        $news->update($request->only([
            'title',
            'description',
            'content',
            'thumbnail',
            'kindofnews_id',
            // 'user_id'
        ]));
        Session::flash('success', 'Update Success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::destroy($id);
        Session::flash('success', 'Delete Success');
        return redirect()->back();
    }
}
