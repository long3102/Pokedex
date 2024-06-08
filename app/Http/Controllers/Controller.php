<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public static function returnResult($data = [])
    {
        return Response()->json([
            'status'  => true,
            'code'    => 200,
            'data'    => !empty($data) ? $data : new \stdClass(),
            'message' => '',
        ]);
    }



    public static function throwError($errors = 'error', $code = 400)
    {
        header('Content-type: application/json');
        echo json_encode([
            'status' => false,
            'code'   => $code,
            'data'   =>  new \stdClass(),
            'message'  => $errors
        ]);
        exit;
    }
}
