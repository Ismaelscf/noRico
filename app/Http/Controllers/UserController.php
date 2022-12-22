<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;


class UserController extends Controller
{
    public function __construct(UserService $service)
    {
        $this->service = $service;
    }
    
    public function index()
    {
        return view('user.index');
    }

    public function create(Request $request)
    {
        $dados = $request->all();
        $this->service->create($dados);
    }
}
