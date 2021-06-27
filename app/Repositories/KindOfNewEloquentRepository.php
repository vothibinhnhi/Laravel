<?php
namespace App\Repositories;

use App\Repositories\EloquentRepository;
use App\Repositories\Interfaces\KindOfNewsRepositoryInterface;

class KindOfNewsEloquentRepository extends EloquentRepository implements KindOfNewsRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\KindOfNews::class;
    }
}

