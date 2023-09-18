<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class UsersController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "laravel";
        // $user = DB::select('SELECT * from new_table');

        // return view('user.index',compact('title','user'));
        $user = new Users();
        $user_list =  $user->getAllUser();
        return view('user.index', compact('title', 'user_list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    public function add()
    {
        // dd('Đã vào');
        $title = 'Thêm danh sách';
        return view('user.add', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function PostAdd(Request $request)
    {
        $dataInsert = [
            $request->fullname,
            $request->email
        ];
        $users = new Users();
        $users->addUser($dataInsert);
        return redirect()->route('user.index')->with("msg", "Them nguoi dung thanh cong");
    }

    public function edit($id)
    {
        $user = Users::find($id);
        // dd($user['fullname']);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $data = [
            'fullname' => $request->fullname,
            'email' => $request->email
        ];
        $user = new Users();
        $user->updateUser($id, $data);
        // dd($user->updateUser($id,$data));
        return redirect()->route('user.index')->with('msg', 'Chúc mừng bạn cập nhật thông tin thành công');
    }
    public function view($id){
        $user = Users::find($id);
        return view('user.delete',compact('user'));
    }
    public function delete($id)
    {
        $user = new Users();
        $user->deleteUser($id);
        return redirect()->route('user.index')->with('msg', 'Cảm ơn bạn đã xoá thông tin này');
    }
}
