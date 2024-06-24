<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurriCulumRequest;
use App\Models\Curriculum;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

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
        return view('curriculum.edit');
    }

    public function store(StoreCurriCulumRequest $request, Curriculum $curriculum)
    {

        if($curriculum->exists) {
            $curriculum->update($request->all());
            return response()->json($curriculum, 200);
        }
        $curriculum = $curriculum->create($request->all());

        $curriculum->save();
        return response()->json(
            [
                'message'=>'Curriculum criado com sucesso',
                'curriculum'=>$curriculum->toArray(),
                'intended' => route('curriculums.index')
            ], 200);
    }

    public function delete(AlterCurriculumEntity $request, Curriculum $curriculum)
    {
        $curriculum->delete();
        return response()->json([], 200);
    }

    public function download(Request $request, Curriculum $curriculum)
    {
        return ;
    }

}
