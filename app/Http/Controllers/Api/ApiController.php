<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Dog;

class ApiController extends Controller
{
    public function getFirstDog(){
        $firstDog = Dog::orderBy('id', 'asc')->first();
        return response()->json($firstDog);
    }

}
