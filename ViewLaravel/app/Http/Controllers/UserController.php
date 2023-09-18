<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $title = 'Đây là nội dung ban đầu của tôi';
        $content = 'Đây là nội dung phần thân của tôi';
        $data = [
            'title' => $title,
            'content' => $content
        ];
        return view('user.index',compact(['title','content']));
    }
}
