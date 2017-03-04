<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

use App\Topic;
class TopicController extends Controller
{
    //
    public function index() {
      $topics = Topic::get();
      return view('topic.index',compact('topics'));
    }

    public function create()  {
      return view('topic.create');
    }

    public function store(Request $request)  {
      $topics = Input::get('topic');
      for($i = 0; $i < count($topics); $i++)  {
        $topic = new Topic();
        $topic->topic = $topics[$i];
        $topic->save();
      }
      return redirect("/topic");
    }

    public function edit($id)  {
      $topic = Topic::find($id);
      return view('topic.edit',compact('topic'));
    }

    public function update(Request $request, $id) {

    }

    public function delete($id) {
      $topic = Topic::find($id);
      $topic->delete();

      return back();
    }
}
