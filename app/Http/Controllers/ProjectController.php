<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //

    public function index(Request $request){

    	return view('project_views/create_project');
    }
}
