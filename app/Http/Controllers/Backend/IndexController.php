<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackendController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends BackendController
{

    public function index(){

        return view('components.backend.dashboard.index');
    }
}
