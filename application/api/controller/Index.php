<?php
namespace app\api\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {

         $data = [
            'id' =>(string) 1,
            'nickname'=> 'ff',
             'avatar' => 'dfdffdf',
        ];
         echo '<pre />';
         var_dump($this->output(200, '', $data)) ;
    }



    public function output($code, $message, $data = []) {
        return json_encode([
            'code' => $code,
            'message' => $message,
            'data' =>$data
        ]);
    }
}
