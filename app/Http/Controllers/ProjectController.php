<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\project as project;
use App\User as User;
use App\Notifications\ProjectAssigned as ProjectAssigned;
class ProjectController extends Controller
{
    //



    public function index(Request $request){

        $managers = User::where('role_id',3)->get();
        $data = array('managers' =>$managers);        
    	return view('project_views.create_project',compact('data'));
    }

    public function create(Request $request, User $user){

    	$payload = $request->all();
    	//dd($request->project_manager);
    	$project = project::create($payload);
        $user = User::find($request->project_manager);


        $user->notify(new ProjectAssigned($project));

    	dd('saved');
    }

    public function project_intiation(Request $request, User $user){

        return view('project_views.project_ini');
    }
    
}
