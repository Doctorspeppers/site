<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlterCurriculumEntity;
use App\Http\Requests\StoreTopicRequest;
use App\Models\Curriculum;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\Topic;

class TopicController extends Controller
{
    public function index(Request $request, Curriculum $curriculum)
    {
        return view('topic.index');
    }

    public function edit(Request $request, Curriculum $curriculum, Topic|null $project = null)
    {
        return view('topic.edit');
    }

    public function store(StoreTopicRequest $request, Curriculum $curriculum,Topic|null $topic = null)
    {
        if ($topic) {
            $topic->update($request->all());
            return response()->json($topic, 200);
        }

        $newTopic = Topic::create($request->all());
        $curriculum->attach($newTopic);
        $newTopic->save();

        return response()->json($newTopic, 200);
    }

    public function delete(AlterCurriculumEntity $request, Curriculum $curriculum,Topic $topic)
    {
        $curriculum->topics()->detach($topic);
        return response()->json($curriculum->topics()->get(), 200);
    }

    public function attachProject(AlterCurriculumEntity $request, Curriculum $curriculum, Topic $topic, Project $project)
    {
        $curriculum->topics()->find($topic->id)->attach($project);
        return response()->json($curriculum->topics()->get(), 200);
    }

    public function detachProject(AlterCurriculumEntity $request, Curriculum $curriculum, Topic $topic, Project $project)
    {
        $curriculum->topics()->find($topic->id)->detach($project);
        return response()->json($curriculum->topics()->get(), 200);
    }
}
