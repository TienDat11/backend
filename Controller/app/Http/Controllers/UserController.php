<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $title = "CGC3 Laravel";
        $content = "Content";
        $data = [
            'titleData' => $title,
            'contentData' => $content
        ];
        // return view('user.index', $data);
        // $content = view('user.index',$data)->render();
        // dd($content);
        // return $content;

        //c3:
        // return view('user.index',compact(['title','content']));

    }
}
