<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

 // ...
    public function notifications()
    {		
    	//dd('loll');
        return auth()->user()->unreadNotifications()->limit(5)->get()->toArray();
    }

}
