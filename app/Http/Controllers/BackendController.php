<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    //
    public function __construct()
    {
        $this->_ref = Request()->get('_ref', null);

    }
}
