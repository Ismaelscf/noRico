<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\StoreService;

class StoreController extends Controller
{

    protected $storeService;

    public function __construct(StoreService $storeService)
    {
        $this->storeService = $storeService;
    }

    public function index(){
        $lojas = $this->storeService->getAll();
        return view('stores.index', ['lojas', $lojas]);
    }

    public function create(){
        return view('stores.create');
    }
}
