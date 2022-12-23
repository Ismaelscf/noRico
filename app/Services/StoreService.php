<?php

namespace App\Services;

use App\Repositories\StoreRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class StoreService
{
    protected $storeRepository;

    public function __construct(StoreRepository $storeRepository)
    {
        $this->storeRepository = $storeRepository;
    }

    public function getAll(){
        $this->storeRepository->getAll();
    }

    public function create(object $request){

        // dd($request, 'Service');

        try {
            $store['name'] = $request->name;
            $store['cnpj'] = $request->cnpj;
            $store['email'] = $request->email;
            $store['phone'] = $request->phone;
            $store['full_discount'] = $request->full_discount;
            $store['percentage_discount'] = $request->percentage_discount;
            $store['discount'] = false;
            $store['sort'] = false;
            $store['active'] = true;

            if($request->discount){
                $store['discount'] = true;
            }

            if($request->sort){
                $store['sort'] = true;
            }

            $store = (object) $store;

            $this->storeRepository->create($store);

            return $this->storeRepository->searchStore($store->cnpj, 'cnpj');
        } catch (Exception $e) {
            echo 'Exceção capturada: ',  $e->getMessage(), "\n";
        }
    }
}