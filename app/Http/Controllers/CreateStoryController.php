<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CreateStory;

class CreateStoryController extends Controller
{
    public function index(){
        $getStory = CreateStory::all();
        return response()->json($getStory);
    }

    public function show(Request $request, $story){
        $storyById = CreateStory::find($story);
        return response()->json($storyById);
    }

    public function store(Request $request){
        $story = CreateStory::create([
            'title'=>$request->input('title'),
            'genre'=>$request->input('genre'),
            'story-flow'=> $request->input('story')
        ]);
        return response()->json($story);
    }

    public function update(Request $request, CreateStory $story){
        $story->update([ 
          'title'=>$request->title,
          'genre'=>$request->genre,
          'story-flow'=>$request->story
        ]);
      return response()->json('Successfully updated');
    }


    public function destroy(Request $request, CreateStory $story){
        $story->delete();
        return response()->json('Deleted successfully!');
    }

    public function updateSpecific(Request $request, CreateStory $title){
        $updateSpecific = $title->update([
            'title'=>$request->title
        ]);
        return response()->json($updateSpecific);
    }

}
