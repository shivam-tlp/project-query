<?php

namespace App\Http\Controllers;

// use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showusers()
    {

        // $name = "shivammandal";
        $user = DB::table('users')
        // ->where('city','pune')
        ->orderBy('id')
        ->cursorPaginate(4);
        // $user = DB::table('users')->find(4);
        // return $user;
        // dd($user);

        return view('allusers', ['data' => $user]);


        // foreach($user as  $users){
        // echo $user;
        // }
    }

    public function singleUser(string $id)
    {
        $user = DB::table('users')->where('id', $id)->get();
        return view('user', ['data' => $user]);
        // return $user;
    }

    public function adduser(Request $req){

        // return $req;
        $user = DB::table('users')->insert(
            
            [
                'name' => $req->username,
                'age' => $req->userage,
                'email' => $req->useremail,
                'city' => $req->usercity
                ]
                
            );
        if($user){
            return redirect()->route('home');
            // echo "<h1>Data has been inserted </h1>";
        }
        else{
            echo "<h1>Data has not been inserted </h1>";
        }
        
    }
    
    
    public function updatepage(string $id){
        // $user = DB::table('users')->where('id',$id)->get();
        $user = DB::table('users')->find($id);   //short form for data getting
        return view('updateuser',['data'=>$user]);
    }
    
    public function update(Request $req, $id ){
        $user = DB::table('users')->where('id', $id)
        ->update([
            'name' => $req->username,
            'age' => $req->userage,
            'email' => $req->useremail,
            'city' => $req->usercity
        ]);
        
        if($user){
            // echo "<h1> user updated successful";
            return redirect()->route('home');
                   }
                   else{
                    echo "data not updated";
                   }

    }

    public function deleteUser(string $id){
        $user = DB::table('users')
        ->where('id',$id)
        ->delete();
        
        if($user){
            return redirect()->route('home');
        }
       }

     
       

}
