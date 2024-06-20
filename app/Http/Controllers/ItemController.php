<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlterCurriculumEntity;
use Illuminate\Http\Request;
use App\Http\Requests\StoreItemRequest;
use App\Models\Curriculum;
use App\Models\Item;
use App\Models\Topic;

class ItemController extends Controller
{
    public function index(Request $request, Curriculum $curriculum,Topic $topic)
    {
        return view('pages.item.index');
    }

    public function edit(Request $request, Curriculum $curriculum,Topic $topic, Item|null $item = null)
    {
        return view('pages.item.edit');
    }

    public function store(StoreItemRequest $request, Curriculum $curriculum, Topic $topic, Item|null $item = null)
    {
        if ($item) {
            $item->update($request->all());
            return response()->json($item, 200);
        }
        $newItem = new Item($request->all());
        $newItem->save();
        $curriculum->topics()->find($topic->id)->attach($newItem);

        return response()->json(
            $curriculum
                ->topics()->find($topic->id)
                ->items()
                    ->get()
            , 200);
    }

    public function delete(AlterCurriculumEntity $request, Curriculum $curriculum, Topic $topic, Item $item)
    {
        return $curriculum->topics()
            ->find($topic->id)
            ->items()->detach($item);
    }
}
