<?php

namespace App\Repositories;

use App\Models\Address;

class AddressRepository
{
    protected $address;

    public function __construct(Address $address)
    {
        $this->address = $address;
    }

    public function create($dados, $id){
        
        $dados = json_decode (json_encode ($dados), FALSE);

        // dd($dados);

        $address = new Address();

        if($dados->type == 'comercial'){
            $address->user_id = $id;
        }
        else{
            $address->user_id = $id;
        }
        
        $address->type = $dados->type;
        $address->state = $dados->state;
        $address->district = $dados->district;
        $address->district = $dados->district;
        $address->number = $dados->number;
        $address->complement = $dados->complement;

        // dd($address);
        $address->save();

    }
}