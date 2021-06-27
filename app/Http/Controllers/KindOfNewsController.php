<?php

namespace App\Http\Controllers;

use App\Http\Requests\KindOfNewsRequest;
use App\Models\KindOfNews;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\KindOfNewsRepositoryInterface;
use Illuminate\Support\Facades\Session;

class KindOfNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // protected $kindofnewsRepository;
    // public function __construct(KindOfNewsRepositoryInterface $kindofnewsRepository){
    //     $this->kindofnewsRepository = $kindofnewsRepository;
    // }
    public function index()
    {
        $kindOfNewsList = KindOfNews::all();
        return view('admin.kindofnews.index', compact('kindOfNewsList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kindofnewsList = kindofnews::all();
        return view('admin.kindofnews.create', compact('kindofnewsList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KindOfNewsRequest $request)
    {
        KindOfNews::create($request->only([
            'name',
            'kindofnews_id'
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
        $kindofnews = KindOfNews::find($id);
        $categoryList = Category::all();
        return view('admin.kindofnews.edit', compact('kindofnews', 'categoryList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KindOfNewsRequest $request, $id)
    {
        $kindofnews = KindOfNews::find($id);
        $kindofnews->update($request->only([
            'name',
            'kindofnews_id'
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
        KindOfNews::destroy($id);
        Session::flash('success', 'Delete Success');
        return redirect()->back();
    }
}
