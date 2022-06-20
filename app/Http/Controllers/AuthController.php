<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function userLogin (Request $request){
        $username = $request->username;
        $password = $request->password;
        $user = User::where('username',$username)->first();

        if ($user != null){
            if(hash_equals($user->password, hash("sha256",$password))){
                $request->session()->put("username",$username);
                $request->session()->put("isLogged",True);
                $request->session()->put("AuthLvl",$user->isAdmin);
                $request->session()->put("UserId",$user->id);

                Auth::login($user);
                return redirect("/profile");
            }
            else{
                return redirect("/login");
            }
        }
        else{
            return redirect("/login");
        }
    }
}
