<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mail extends Controller
{

    function send(Request $request){
        $data =[
            'name' =>$request->input('name'),
            'email' => $request->input('from') ,
            'msg' =>$request->input('message')
        ];

        \Mail::send('mail',$data,function($msg) use ($request,$data){
 
            $msg->to('rdgp99@gmail.com', 'Ruben Garcia')
                    ->subject($request->input('name').' is requesting your job.')
                    ->from('cinemundo.org@gmail.com','Request for Job');
        });
 
        if (\Mail::failures()) {
           return response()->json(['Sorry! Please try again latter'],401);
         }else{
           return response()->json(['Ok'],200);
         }
    }
}
