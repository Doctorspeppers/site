<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlterCurriculumEntity;
use App\Http\Requests\AlterProjectEntity;
use App\Http\Requests\StoreProjectRequest;
use App\Models\Curriculum;
use App\Models\Project;
use App\Models\Topic;
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

    public function show(Request $request, Project $project)
    {
        return view('project.show');
    }

    public function edit(Request $request, Project|null $project = null)
    {
        return view('project.edit', ['project' => $project]);
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
