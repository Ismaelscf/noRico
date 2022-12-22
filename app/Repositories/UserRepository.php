<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function create($dados){
        
        $dados = json_decode (json_encode ($dados), FALSE);

        $user = new User();
        $user->name = $dados->name;
        $user->cpf = $dados->cpf;
        $user->password = $dados->password;
        $user->email = $dados->email;
        $user->phone = $dados->phone;
        $user->photo = $dados->photo;
        $user->save();
        // $user->active = $dados->active;        
        dd('rep', $user);
    }
}