<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
   $data = [
       'title'=> 'Hi friend!',
        'content'=>'This is my first automated email. Hope you enjoy it.',
        ];

   Mail::send('emails.test',$data, function($message){

       $message->to('robbertoutenaar@gmail.com','Robbert')->subject('hello there, how are you?');


   });





});
