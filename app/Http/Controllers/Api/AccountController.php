<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    use \App\Http\Controllers\ApiControllerTrait;
    protected $model;
    protected $relation = ['bank'];

        public function __construct(\App\Account $model){
                $this->model = $model; 
            }
        
}
