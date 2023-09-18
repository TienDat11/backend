<?php

namespace App\Http\Controllers;

use App\Models\Project_User;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Project_User::all();
        return view('user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'first_name' => 'required|min:5|max:255',
            'last_name' => 'required|min:5|max:255',
            'email'  => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'address' => 'required|min:30|max:300',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif'
        ],
        [
            'first_name.required' || 'last_name.required' || 'address.required' || 'email.required' => 'Không được bỏ trống dữ liệu này',
            'first_name.min'  || 'last_name.min' => 'Phải ít nhất 5 ký tự',
            'first_name.max' || 'last_name.max' => 'Phải nhiều nhất 255 ký tự',
            'address.min' => 'Phải nhiều nhất 30 ký tự',
            'address.max' => 'Phải nhiều nhất 300 ký tự',
            'email.regex' => 'Không đúng định dạng',
            'image.image' || 'image.mimes' => ' Không đúng định dạng'
        ]
    ); 
        if($image = $request->file('image')){
            $path = '/image';
            $profileImage = date('YdmHis') . ".".$image->getClientOriginalExtension();
            $image->move($path,$profileImage);
            $input['image'] = $profileImage;
        }
        Project_User::create($input);
        return redirect()->route('user.index')->with('msg','User created success');
    }



    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $user = Project_User::findOrFail($id);
        return view('user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $user = Project_User::findOrFail($id);
        return view('user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $input = $request->validate([
            'first name' => 'required|min:5|max:255',
            'last name' => 'required|min:5|max:255',
            'email'  => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'address' => 'required|min:30|max:300',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif'
        ],
        [
            'first name.required' || 'last name.required' || 'address.required' || 'email.required' => 'Không được bỏ trống dữ liệu này',
            'first name.min'  || 'last name.min' => 'Phải ít nhất 5 ký tự',
            'first name.max' || 'last name.max' => 'Phải nhiều nhất 255 ký tự',
            'address.min' => 'Phải nhiều nhất 30 ký tự',
            'address.max' => 'Phải nhiều nhất 300 ký tự',
            'email.regex' => 'Không đúng định dạng',
            'image.image' || 'image.mimes' => ' Không đúng định dạng'
        ]
    ); 
        if($image = $request->file('image')){
            $path = '/image';
            $profileImage = date('YdmHis') . ".".$image->getClientOriginalExtension();
            $image->move($path,$profileImage);
            $input['image'] = $profileImage;
        }
        $user = Project_User::findOrFail($id);
        $user->update($input);
        return redirect()->route('user.index')->with('msg','User update success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Project_User::findOrFail($id);
        return redirect()->route('user.index')->with('msg','User delete success');
    }
}
