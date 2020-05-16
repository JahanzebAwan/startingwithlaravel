<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User; 

class UserController extends Controller
{
    public function index(){
        // $user = new User();
        // $user->name = 'Sara';
        // $user->email = 'sara1@gmail.com';
        // $user->password = bcrypt('123');
        // $user->save();
        // User::where('id',4)->delete();
        // User::where('id',1)->update(['name'=>'Jahanzeb']);
        // $data = [
        //     'name'=> 'Hassan',
        //     'email'=> 'Hassan@gmail.com',
        //     'password'=>'1221',
        // ];
        // User::create($data);
        $user = User::all();

        return $user;
    }
}
