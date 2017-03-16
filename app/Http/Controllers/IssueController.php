<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

use App\Issue;
use App\Person;
class IssueController extends Controller
{
    //
    public function index($id) {
      $issues = Person::find($id)->issues;
      $person_id = $id;
      return view('issue.index',compact('issues', 'person_id'));
    }

    public function create($id)  {
      return view('issue.create',compact('id'));
    }

    public function store(Request $request)  {
      $id = Input::get('id');
      $topic = Input::get('topic');
      $value = Input::get('value');
      $sources = Input::get('source');
      $source_links = Input::get('source_link');

      for($i = 0; $i < count($value); $i++)  {
        $issue = new Issue();
        $issue->person_id = $id;
        $issue->topic_id = $topic[$i];
        $issue->value = $value[$i];
        $issue->source = $sources[$i];
        $issue->source_link = $source_links[$i];
        $issue->save();
      }
      return redirect("/issue/$id");
    }

    public function edit($id)  {
      $issue = Issue::find($id);
      return view('issue.edit',compact('issue'));
    }

    public function update(Request $request, $id) {

    }

    public function delete($id) {
      $issue = Issue::find($id);
      $issue->delete();

      return back();
    }
}
