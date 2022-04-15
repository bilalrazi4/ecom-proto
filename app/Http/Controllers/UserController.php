<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\account;
class UserController extends Controller
{
    function getData(Request $req){

       $acc = new account;
       $acc->username=$req->username;
       $acc->password=$req->password;
       $acc->save();

       return redirect('login')->with('created','Account Creation Successfull!');
    }
}
