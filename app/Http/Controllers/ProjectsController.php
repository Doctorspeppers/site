<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlterCurriculumEntity;
use App\Http\Requests\AlterProjectEntity;
use App\Http\Requests\StoreProjectRequest;
use App\Models\Curriculum;
use App\Models\Project;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(Request $request, Curriculum|null $curriculum = null)
    {
        if ($curriculum) {
            return view('project.index', ['projects' => $curriculum->projects()->paginate(15)]);
        }
        return view('project.index',['projects' => auth()->user()->projects()->paginate(15)]);
    }

    public function show(Request $request, User $user)
    {
        return view('project.show', ['projects' => $user->projects]);
    }

    public function edit(Request $request, Project|null $project = null)
    {
        return view('project.edit', ['project' => $project]);
    }

    public function attach(AlterProjectEntity $request, Project $project){
        if(auth()->user()->is_admin){
            $curriculums = Curriculum::all();
            return view('project.attach', ['project' => $project, 'curriculums' => $curriculums]);
        }

        $curriculums = Curriculum::where('created_by', auth()->user()->id)->get();
        return view('project.attach', ['project' => $project, 'curriculums' => $curriculums]);
    }

    public function store(StoreProjectRequest $request, Project|null $project = null)
    {
        if ($project) {
            $project->update($request->all());
            return response()->json(
                [
                    'message'=>'Projeto alterado com sucesso',
                    'Projeto'=> $project,
                    'intended' => route('projects.index')
                ], 200);
        }
        $newProject = Project::create($request->all());

        return response()->json(
            [
                'message'=>'Projeto criado com sucesso',
                'project'=> $newProject,
                'intended' => route('projects.index')
            ], 200);
    }


    public function delete(AlterProjectEntity $request, Project $project)
    {
        $project->delete();
        if($request->ajax()){
            return response()->json([], 200);
        }

        return back();
    }
}
