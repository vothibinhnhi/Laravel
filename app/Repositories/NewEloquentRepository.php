<?php
namespace App\Repositories;

use App\Repositories\EloquentRepository;
use App\Repositories\Interfaces\NewsRepositoryInterface;

class NewsEloquentRepository extends EloquentRepository implements NewsRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\News::class;
    }
}

