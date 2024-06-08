<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Files;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    //

    public function uploadImage(Request $request)
    {
        if ($request->hasFile('file')) {
            $files = $request->file('file');
            $filename = uniqid();
            $sub_dir = date('Y/m/d');



            $ext = $files->extension();

            $origin_file_name = $filename . '.' . $ext;

            $file_path = $sub_dir . '/' . $origin_file_name;

            $origin_file_path = $sub_dir . '/' . $origin_file_name;
            $file = $request->file('file')->move('storage/uploads/'.$sub_dir, $origin_file_path);



            $params['file_path'] =$origin_file_path;
            $params['type'] =1;
            $file = Files::create($params);


            return response()->json([
                'success' => true,
                'file_path' => $file->file_path,
                'file' => asset("storage/uploads/{$origin_file_path}"),
                'id' => $file->id,
            ]);
        } else {
            return response()->json([
                'success' => false
            ]);
        }
    }
}
