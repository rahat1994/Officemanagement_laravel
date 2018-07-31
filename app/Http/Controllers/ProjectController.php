<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\project as project;
use App\User as User;
use App\projectinfo as Projectinfo;
use App\file as file;
use App\Notifications\ProjectAssigned as ProjectAssigned;
use App\Notifications\includedinproject as includedinproject;
use TCG\Voyager\Facades\Voyager as Voyager;

class ProjectController extends Controller
{
    //

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request,User $user){

        $isadmin = Voyager::can('browse_admin');

        if ($isadmin) {
            $managers = User::managerlist($user);

            $data = array('managers' =>$managers);        
            return view('project_views.create_project',compact('data'));
        }else{

            return redirect()->back()->with(['message' => "You dont have access to this section", 'alert-type' => 'warning']);
        }
         
        
    }

    public function create(Request $request, User $user){

    	$payload = $request->all();
    	$project = project::create($payload);
        $user = User::find($request->project_manager);


        $user->notify(new ProjectAssigned($project));
        return redirect()->route('voyager.dashboard');
    	
    }

    public function project_intiation(Request $request, User $user){
        if($request->has('read')) {
            dd('loll');
            $notification = $request->user()->notifications()->where('id', $request->read)->first();
            if($notification) {
                $notification->markAsRead();
            }
        }

        $employees = User::where('role_id',4)->get();
        $data = array('employees'=>$employees );

        return view('project_views.project_ini',compact('data'));
    }

    public function project_intiation_create(Request $request, User $user){

        dd($request->all());
        $projectinfo = new Projectinfo;


        $project_members = $request->project_members;

        $project_id = $request->project_id;
        $project_files = $request->project_files;
        //dd($project_files);
        $project_motto = $request->project_motto;
        $project_guidelines = $request->project_guidelines;
        $Email = $request->project_email;

        $project_members_string = implode(',', $project_members);
        
        $projectinfo->project_id = $project_id;
        $projectinfo->project_motto = $project_motto;
        $projectinfo->project_guidelines = $project_guidelines;
        $projectinfo->project_email = $Email;
        $projectinfo->project_members = $project_members_string;

        $projectinfo->save();

        //$file = new file; 
        $project_members = $request->project_members;

        foreach ($project_members as $key => $value) {
            
            $user = User::find($value);
            $project = project::find($project_id);
            $user->notify(new includedinproject($project));
        }

        foreach ($request->project_files as $singlefile) {
                      //dd($file); 

            $filename = $singlefile->store('project_files');
            
            $file = new file; 
            $file->project_id = $project_id;
            $file->filename = $filename;

             $file->save();
        }

        

        dd($projectinfo);
    }

    public function projectlist(){
        $project_list = project::all();
        $data = array('project_list' =>$project_list);

        return view('project_views.project_list',compact('data'));
    }

     public function projectdetail(){

        return view('project_views.project_detailed');
    }
    
}
