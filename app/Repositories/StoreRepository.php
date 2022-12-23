<?php

namespace App\Repositories;

use App\Models\Store;
use App\Repositories\Request;

class StoreRepository
{
    protected $store;

    public function __construct(Store $store)
    {
        $this->store = $store;
    }

    public function getAll(){
        return $this->store::All();
    }

    public function create(object $storeCreate){
        // dd($storeCreate, 'Repository');

    }

    public function searchStore($value, $field){
        return $this->store->where($value, '=', $field)->get();
    }
}