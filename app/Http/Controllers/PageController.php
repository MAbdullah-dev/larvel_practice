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
        $users = DB::table('users')
        ->join('cities','users.c_id','=','cities.city_id')
        // ->get();
        // ->orderBy('name')
        ->Paginate(5);
        // dd($user);
        // dd($users);
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
        return redirect()->route('Allusers');

    }
    public function updatepage(string $id)
    {
       $user=DB::table('users')
       ->where('id',$id)->get();
       return view('updateuser',['updata'=>$user]);
    }
    public function updateuser(Request $req,string $id)
    {
        $users=DB::table('users')
        ->where('id',$id)
        ->update([
            'name'=>$req->name,
            'email'=>$req->email,
            'c_id'=>$req->city,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        return redirect()->route('Allusers');
    }
    public function deleteuser($id)
    {
        $user=DB::table('users')
        ->where('id',$id)
        ->delete();
        return redirect()->route('Allusers');
    }

}
