<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Symfony\Component\Clock\now;

class UserController extends Controller
{
    // get all data
    function show_user(){
        $user = DB::table('users')->orderBy('name')->paginate(5);
        return view('welcome',['data'=> $user]);
    }

    // get single data
    function single_user_data(string $id){
        $single_user = DB::table('users')->where('id',$id)->first();
        return view('single_user',['singleData'=> $single_user]);

    }

    function add_data(Request $req){
       $add_data =  DB::table('users')
       ->insert([
            'name' => $req->name,
            'email' => $req->email,
            'age' => $req->age,
            'city' => $req->city,
            'created_at' => now(),
            'updated_at' => now()

       ]);

       if($add_data){
            return redirect()->route('home');
       }
    }

    // update data

    function update_data(string $id,Request $req){
        $update_data = DB::table('users')
        ->where('id',$id)
        ->update([
            'name' => $req->name,
            'email' => $req->email,
            'age' => $req->age,
            'city' => $req->city,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        if($update_data){
            return redirect()->route('home');
        }

    }

    // fetch single data

    function user_info_fetch(string $id){
        $single_data =  DB::table('users')->where('id',$id)->first();
        return view('updateuser',['data'=>$single_data]);

    }

    // Delete Data

    function delete_data(string $id){
        $dlt_data = DB::table('users')
        ->where('id',$id)
        ->delete();

        if($dlt_data){
            return redirect()->route('home');
        }

    }


}
