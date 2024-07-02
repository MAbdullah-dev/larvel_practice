<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function showhome()
    {
        return view('wellcome');
    }
    public function userpage()
    {
        $users = DB::table('users')->get();
        // dd($user);
        return view('user',['users'=>$users]);
    }
    public function showuser(string $id)
    {
        $singleUser=DB::table('users')->where('id',$id)->get();
        return view('showuser',['singleUser'=>$singleUser]);
    }
    public function adduser(Request $req)
    {
        $user=DB::table('users')
        ->insert([
            'name'=>$req->name,
            'email'=>$req->email,
            'c_id'=>$req->city,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
    public function updateuser()
    {
        $users=DB::table('users')
        ->where('id',2)
        ->update([
            'name'=>'bilal',
            'email'=>'bilal@gmail.com'
        ]);
    }
    public function deleteuser($id)
    {
        $user=DB::table('users')
        ->where('id',$id)
        ->delete();
        return redirect()->route('Allusers');
    }
}
