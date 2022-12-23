<?php

namespace App\Controllers;

class Api extends BaseController
{


    public function index()
    {
        echo "api version 0.0.1";
    }

    public function getHomes()
    {
        return json_encode([
            [
                'name'  =>  'home 1',
                'price' =>  '500'
            ],
            [
                'name'  =>  'home 2',
                'price' =>  '321312'
            ]
        ]);
    }
}
