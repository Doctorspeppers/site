<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurriCulumRequest;
use Illuminate\Http\Request;

class CurriculumController extends Controller
{
    public function index(Request $request)
    {
        return view('curriculum');
    }

    public function edit(Request $request, Curriculum $curriculum){
        return view('curriculum.edit');
    }

    public function store(StoreCurriCulumRequest $request, Curriculum $curriculum){

        if($curriculum->exists) {
            $curriculum->update($request->all());
            return response()->json($curriculum, 200);
        }

        $curriculum->create($request->all());
        $curriculum->save();
        return response()->json($curriculum, 200);
    }

    public function delete(AlterCurriculumEntity $request, Curriculum $curriculum){

        $curriculum->delete();
        return response()->json([], 200);
    }

    public function download(Request $request, Curriculum $curriculum){
    {
        return ;
    }
}
