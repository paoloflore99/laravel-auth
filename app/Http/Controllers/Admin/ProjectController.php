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
    public function show($id){
        $project = Project::where('id', $id)->first();
        // dd($project);
        return view("admin.projects.show" , compact("project"));
    }
    

    


    //mostrera il form per la creazioni di nuovi progetti 
    public function create(){
        return view("admin.projects.create");
    }





    //permettera di salvare i progetti del create
    public function store(Request $request){
        //validated ritorna i dati gia  validati del storeprojectcontroller.php
        //la validazione la fa da Request 
        //non va il         validated()           e lo storeProjectRequest.php 
        $data = $request->validate([
            'title'=> 'required|max:255',
            'img'=>'required|active_url|max:5120',
            'description'=> 'required|max:255',
            'dete'=> 'date',
            'programming_languages' => 'required|max:255'
        ]);

        // dd($data);
        //il creare esegue il fill e il save 
        $project = Project::create($data);
        return redirect()->route('admin.projects.show', $project->id);
    }


    //edit
    public function edit($id){

        $project = Project::where("id", $id)->firstOrFail();
        return view('admin.projects.edit' , compact("project"));
    }


    public function update(Request $request, $id) {

        $data = $request->validate([
            'title'=> 'required|max:255',
            'img'=>'required|active_url|max:5120',
            'description'=> 'required|max:255',
            'dete'=> 'date',
            'programming_languages' => 'required|max:255'
        ]);
        
        $project = Project::where("id", $id)->firstOrFail();
        $project->update($data);
        return redirect()->route("admin.projects.show" , $project->id);
    }

}