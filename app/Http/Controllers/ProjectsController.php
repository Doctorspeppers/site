<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlterCurriculumEntity;
use App\Http\Requests\StoreProjectRequest;
use App\Models\Curriculum;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(Request $request, $topicId)
    {
        return view('project.index');
    }

    public function show(Request $request, $topicId)
    {
        return view('project.index');
    }

    public function edit(Request $request, Project|null $project = null)
    {
        return view('project.edit');
    }

    public function store(StoreProjectRequest $request, Project|null $project = null)
    {
        if ($project) {
            $project->update($request->all());
            return response()->json($project, 200);
        }

        $newProject = Project::create($request->all());

        return response()->json($newProject, 200);
    }

    public function delete(AlterCurriculumEntity $request, Project $project)
    {
        $user = $project->createdBy;
        $project->delete();
        return response()->json($user->projects->get(), 200);
    }
}
