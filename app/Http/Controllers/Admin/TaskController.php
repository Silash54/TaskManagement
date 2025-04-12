<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index($data)
    {
        $name="silas rai";
        return view('Home',['data'=>$name , 'id'=>$data]);
    }
}
