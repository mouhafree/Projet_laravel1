<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function home(){
        $posts =[
            
                'titleMon premier article',
                'mfjjfedddddddddddddddddddd'
            
    
        ];
        return view('home', ['posts'=>$posts]);
        // return view('home',['articles'=>Post::all()]);
    }


    public function show($id)
    {
       $posts=[ 
        1=>'Mon titre numer 1',
                
        2=>"mon second titre"
    ];
        $post= $posts[$id] ??"pas de titre";

        return view('article',[]);
    }

    public function contact()
    {
        return view('contact');
    }
 
}
