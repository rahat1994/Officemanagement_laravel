<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\project as project;
use App\User as User;
class ProjectController extends Controller
{
    //

    public function index(Request $request){

        $managers = User::where('role_id',2)->get();

        $data = array('managers' =>$managers);
        
    	return view('project_views.create_project',compact('data'));
    }

    public function create(Request $request){

    	$payload = $request->all();
    	///dd($payload);
    	$project = project::create($payload);
    	return view('project_views/create_project');
    }
}
