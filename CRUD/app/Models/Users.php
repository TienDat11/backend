<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Users extends Model
{
    use HasFactory;
    protected $table = 'new_table';

    public function getAllUser(){
        
        $user = DB::select('SELECT * from new_table');
        // dd($user);
        return $user;
        
    }

    public function addUser($data){
       $user = DB::insert('INSERT into new_table (fullname, email) values (?, ?)', $data);
       return $user;
    }

    public function updateUser($id,$data){
        DB::table($this->table)->where('id',$id)->update($data);
        
    }
    public function deleteUser($id){
        DB::table($this->table)->where('id',$id)->delete();
    }


}
