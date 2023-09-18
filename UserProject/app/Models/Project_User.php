<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Project_User extends Model
{
    use HasFactory;
    protected $list = [
        'first_name','last_name','email','image','address'
    ];
    protected $table = 'project_user';

    public function update1($value,$id){
        DB::table($this->table)->where('id',$id)->update($value);
    }
    public function insert1($value){
        DB::table($this->table)->insert($value);
    }
    public function deleteUser($id){
        DB::table($this->table)->where('id',$id)->delete();
    }
}
