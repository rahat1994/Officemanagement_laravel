<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\project as project;

class ProjectController extends Controller
{
    //

    public function index(Request $request){

    	return view('project_views/create_project');
    }

    public function create(Request $request){

    	$payload = $request->all();
    	///dd($payload);
    	$project = project::create($payload);
    	return view('project_views/create_project');
    }
}
