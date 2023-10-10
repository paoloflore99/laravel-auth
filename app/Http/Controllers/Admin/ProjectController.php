<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Composer;

class ProjectController extends Controller
{

    

    
    public function index(){

        //mostrera tutti i progetti
        $projects = Project::all();
        return view("admin.projects.index" , compact("projects"));
    }

    

    //mostrera i detagli di ogni progetto 
    // public function show($id){
    //     return view("admin.projects.show" , compact("projects"));
    // }
    public function show($id){
        $project = Project::find($id);
        return view("admin.projects.show" , compact("projects"));
    }
    




    //mostrera il form per la creazioni di nuovi progetti 
    public function create(){
        return view("admin.projects.create");
    }





    //permettera di salvare i progetti del create
    public function store(Request $request){
        $data = $request->validate([

                'title'=> 'required|max:255',
                'img'=> 'required|image|max:5120',
                'description'=> 'required|max:255',
                'dete'=> 'date'
        ]);
        
        //il creare esegue il fill e il save 
        $project = Project::create($data);
        return redirect()->route('admin.projects.show', $project->id);

    }


    //edit
    public function edit(){
        return view('admin.projects.edit' ,);
    }
}
