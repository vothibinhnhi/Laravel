<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\KindOfNewsRequest;
use App\Http\Resources\KindOfNewsCollection;
use App\Http\Resources\KindOfNewsResource;
use App\Models\KindOfNews;
use App\Repositories\Interfaces\KindOfNewsRepositoryInterface;
use Illuminate\Http\Request;

class KindOfNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $kindofnewsRepository;
    public function __construct(KindOfNewsRepositoryInterface $kindofnewsRepository){
        $this->kindofnewsRepository = $kindofnewsRepository;
    }
    public function index()
    {
        $kindOfNewsList = KindOfNews::all();
        return new KindOfNewsCollection($kindofnewsList);
    }

    
    public function show($id)
    {
        $kindOfNewsList = KindOfNews::find($id);
        return new KindOfNewsResource($kindOfNewsList);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}