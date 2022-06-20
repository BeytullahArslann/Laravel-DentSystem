<?php

namespace App\Http\Controllers;

use App\Models\Sub_Work;
use App\Models\Work;
use Illuminate\Http\Request;

class Sub_WorkController extends Controller
{
    public function getAll(){
        return Sub_Work::all();
    }

}
