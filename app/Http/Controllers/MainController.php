<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class MainController extends Controller
{
    public function main (){
        $news = News::latest()
        ->get();
    return view ('pages.main', compact('news'));    
    }
    public function footerform(Request $request)
      {
        
        $data= array(
        'email' => request('email'),
        'name123' => request('name123'),
        'mantext' => request('mantext')

      );
       \Mail::send('email.mail1', $data, function($message1) use ($data)
    {
        $mail_admin = env('MAIL_ADMIN');
        $message1->from($data['email'], $data['name123'], $data['mantext']);
        $message1->to($mail_admin, 'For Admin')->subject('Message from site');
     });
     return redirect('/');
    }
    public function new_solo(News $solo)
    {
      return view('pages.newsolo', compact('solo'));
    }
    public function omsk (){

    return view ('pages.omsk');    

    }
    public function tomsk (){

    return view ('pages.tomsk');    
  
    }
}
