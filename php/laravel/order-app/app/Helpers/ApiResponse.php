<?php

namespace App\Helpers;


class ApiResponse{

    public static function success($data, $message = null , $code = 200){

        return response()->json([
            'status' => true,
            'message' => $message,
            'data' => $data
        ], $code);
        
    }

    public static function error($error = null, $message = null, $code = 400){
        return response()->json([
            'status' => false,
            'message' => $message,
            'errors' => $error
        ], $code);
        
    }

}