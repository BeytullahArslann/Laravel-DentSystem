<?php

namespace App\Http\Controllers;

use App\Exceptions\TakenUsernameException;
use App\Models\User;
use Illuminate\Http\Request;
use PDOException;

class UserController extends Controller
{
    public function create(Request $request)
    {
        $request -> validate([
            "username" => "required | unique:users,username",
            "password" => "required | alpha_dash | confirmed",
            "password_confirmation" => "required | alpha_dash"
        ]);
        try{
            $user = new User;
            $user -> username = $request->username;
            $user -> password = hash("sha256",$request->password);
            $user -> save();
            $request->session()->put("regSuccess","Registration Successied!");
            return redirect("/login");
        }
        catch (PDOException $e){
            if($e->getCode() == 23000){
                throw new TakenUsernameException($request);
            }
        }
    }
}
