<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mail extends Controller
{

    function send(Request $request){
        /*
      $email = new \SendGrid\Mail\Mail(); 
      $email->setFrom("cinemundo.org@gmail.com", $request->input('name'));
      $email->setSubject($request->input('name').' is requesting your job.');
      $email->addTo('rdgp99@gmail.com', 'Ruben Garcia');
      $email->addContent(
          "text/html", '<!DOCTYPE html>
                          <html lang="en">
                          <head>
                              <meta charset="UTF-8">
                              <meta name="viewport" content="width=device-width, initial-scale=1.0">
                              <meta http-equiv="X-UA-Compatible" content="ie=edge">
                              <link rel="stylesheet" href="css/mail.css">
                          </head>
                          <body>
                              
                                  <div class="card__overflowed">
                                          <div class="card__container">
                                                  <div class="card__image">
                                                    <img src="https://libreshot.com/wp-content/uploads/2015/05/coffee-and-laptop.jpg" alt="">
                                                  </div>
                                                  
                                                  <div class="card__body">
                                  
                                                    <h3 class="card__body__heading">
                                                        My message to you:'.$request->input('message').'</h3>
                                                </div>
                                                <div class="card__footer">
                                                    <h3 class="card__body__heading">Contact me:'.$request->input('from').'</h3>
                                             </div>
                                        </div>
                                  </div>
                          </body>
                          </html>' );
      $sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
      try {
          $response = $sendgrid->send($email);
          print $response->statusCode() . "\n";
          print_r($response->headers());
          print $response->body() . "\n";
      } catch (Exception $e) {
          echo 'Caught exception: '. $e->getMessage() ."\n";
      }*/
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
