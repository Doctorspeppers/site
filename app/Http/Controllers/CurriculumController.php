<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlterCurriculumEntity;
use App\Http\Requests\StoreCurriCulumRequest;
use App\Models\Curriculum;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Michelf\Markdown;

class CurriculumController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('admin') && Auth::user()->is_admin) {
            return view('curriculum.index', ['curriculums' => Curriculum::with('users')->paginate(15)]);
        }
        return view('curriculum.index', ['curriculums' => Auth::user()->curriculums()->paginate(15)]);
    }

    public function show(Request $request, Curriculum $curriculum)
    {
        return view('curriculum.show', ['curriculum' => $curriculum]);
    }

    public function edit(Request $request, Curriculum|null $curriculum = null)
    {
        return view('curriculum.edit', ['curriculum' => $curriculum]);
    }

    public function store(StoreCurriCulumRequest $request, Curriculum $curriculum)
    {

        if($curriculum->exists) {
            $curriculum->update($request->all());
            return response()->json(
                [
                    'message'=>'Curriculum alterado com sucesso',
                    'curriculum'=>$curriculum,
                    'intended' => route('curriculums.index')
                ], 200);
        }
        $curriculum = $curriculum->create($request->all());

        $curriculum->save();
        return response()->json(
            [
                'message'=>'Curriculum criado com sucesso',
                'curriculum'=>$curriculum,
                'intended' => route('curriculums.index')
            ], 200);
    }

    public function delete(AlterCurriculumEntity $request, Curriculum $curriculum)
    {
        $curriculum->delete();
        if($request->ajax()){
            return response()->json([], 200);
        }

        return back();
    }

    public function projects(Request $request, Curriculum $curriculum)
    {
        return view('project.index', ['projects' => $curriculum->topics()->with('projects')->paginate(15)]);
    }

    public function download(Request $request, Curriculum $curriculum)
    {
        return ;
    }

}
