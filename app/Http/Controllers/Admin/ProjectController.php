<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Composer;

class ProjectController extends Controller
{

    
    public function index(){

        $projects = Project::all();
        return view("admin.projects.index" , compact("projects"));
    }



    public function show($id){
        return view("admin.projects.show" , compact("projects"));
    }




    public function create(){
        return view("admin.projects.create");
    }



    public function store(Request $request){
        $data = $request->validate([

                'title'=> 'required',
                'img'=> 'required',
                'description'=> 'required',
        ]);

        $project = Project::create($data);
        return redirect()->route("admin.projects.index")->with("creazione" , "creazione completata");
    }
}
