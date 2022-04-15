<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\account;
use Illuminate\Support\Facades\DB;

class MyController extends Controller
{
    function readData(Request $req)
    {
       if(DB::table('accounts')->where('username','=',$req->username)->where('password','=',$req->password)->exists())
       {
           return redirect("welcome")->with('msg',$req->username);
       }
       else{
            return redirect()->back()->with('msg', 'Invalid! Information');
       }
       
    }
}
