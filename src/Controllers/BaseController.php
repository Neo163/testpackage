<?php

namespace Neo163\Testpackage\Controllers;

class BaseController
{
    /**
     * @description: 输出给前端显示的格式
     * @Creator: Neo
     * @param {int} $code
     * @param {string} $status
     * @param {string} $message
     * @param {*} $data
     * @return {*}
     */
    static function output(int $code, string $status, string $message = '', $data = [])
    {
        if (gettype($data) != 'array' && gettype($data) != 'object') {
            return response()->json([
                'code' => '40002',
                'status' =>  'error',
                'message' => 'data需要是array或者object格式',
                'data' => $data,
            ]);
        }
        return response()->json([
            'code' => $code,
            'status' =>  $status,
            'message' => $message,
            'data' => $data,
        ]);
    }
}
