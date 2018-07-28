<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\project as project;
use App\User as User;
use App\projectinfo as Projectinfo;
use App\file as file;
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
        $employees = User::where('role_id',4)->get();
        $data = array('employees'=>$employees );

        return view('project_views.project_ini',compact('data'));
    }

    public function project_intiation_create(Request $request, User $user){

        $projectinfo = new Projectinfo;


        $project_members_string = $request->project_members;
        $project_id = $request->project_id;
        $project_files = $request->project_files;
        //dd($project_files);
        $project_motto = $request->project_motto;
        $project_guidelines = $request->project_guidelines;
        $Email = $request->project_email;

        $project_members_string = implode(',', $project_members_string);
        
        $projectinfo->project_id = $project_id;
        $projectinfo->project_motto = $project_motto;
        $projectinfo->project_guidelines = $project_guidelines;
        $projectinfo->project_email = $Email;
        $projectinfo->project_members = $project_members_string;

        $projectinfo->save();

        //$file = new file; 
        foreach ($request->project_files as $singlefile) {
                      //dd($file); 

            $filename = $singlefile->store('project_files');
            
            $file = new file; 
            $file->project_id = $project_id;
            $file->filename = $filename;

             $file->save();
        }

        dd('this is your');

        return view('project_views.project_ini');
    }
    
}
