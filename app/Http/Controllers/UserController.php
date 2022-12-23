<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
use Exception;


class UserController extends Controller
{
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    
    public function index()
    {   
        return view('user.index');
    }

    public function create(Request $request)
    {
        // $dados = $this->validation($request->all());
        try {

            $dados = $request->validate(
                //rules
                [
                    'name' => 'required',
                    'cpf' => 'unique:users',
                    'password' => 'required',
                    'email' => 'unique:users',
                    'phone' => 'required',
                    'photo' => '',
                    'active' =>'',

                    'state' =>'',
                    'city' =>'',
                    'district' =>'',
                    'zip_code' =>'',
                    'number' =>'',
                    'complement' =>'',

                ],
                [
                    'cpf.unique' => 'Cpf já cadastrado em nossa base.'
                ]
            );

            $msg = $this->userService->create($dados);

        } catch (Exception $exception) {
            // dd('contro');
            return view('user.index', [
                'msg' =>$exception->getMessage()
            ]);
        }

        return view('user.index', compact('msg'));
        // return redirect()->route('newUser');
    }

}
