<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\City;
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
        // $users = DB::table('users')
        // ->join('cities','users.c_id','=','cities.city_id')
        // ->get();
        // ->orderBy('name')
        // ->Paginate(5);
        // dd($user);
        // dd($users);



        // using Eluqent ORM


        // $users = User::paginate(5);
        // $users=User::find(7);
        // $users = User::with('city')->get();
        // return $users;
        // return view('user', ['users' => $users]);
    }
    public function showuser(string $id)
    {
        // $singleUser=DB::table('users')->where('id',$id)->get();
        $singleUser = User::findorfail($id);
        // return $singleUser;
        return view('showuser', ['singleUser' => $singleUser]);
    }
    public function adduser(Request $req)
    {
        // return $req->all();
        // dd($req);
        User::create([
            'name'=>$req->name,
            'email'=>$req->email,
            'c_id'=>$req->city,
        ]);
    }
    public function updatepage(string $id)
    {
        $user = DB::table('users')
            ->where('id', $id)->get();
        return view('updateuser', ['updata' => $user]);
    }
    public function updateuser(Request $req, string $id)
    {
        $users = User::findorfail($id)
            ->update([
                'name' => $req->name,
                'email' => $req->email,
                'c_id' => $req->city,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        return redirect()->route('Allusers');
    }
    public function deleteuser($id)
    {
    //     $user = User::find($id)
            // ->delete();
            $user = User::destroy($id);
        return redirect()->route('Allusers');
    }
}
