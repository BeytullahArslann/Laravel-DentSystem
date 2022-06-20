<?php

namespace App\Exceptions;

use Exception;

class TakenUsernameException extends Exception
{
    public function report(){

    }
    public function render($req){
        $req->session()->put("regError","Username Already Taken, Try Another Username.");
        return redirect("/register");
    }
}
