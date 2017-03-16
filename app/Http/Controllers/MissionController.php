<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

use App\Mission;
use App\Candidate;
class MissionController extends Controller
{
    //
    public function index($id) {
      $missions = Candidate::find($id)->missions;
      return view('mission.index',compact('missions'));
    }

    public function create($id)  {
      return view('mission.create',compact('id'));
    }

    public function store(Request $request)  {
      $id = Input::get('id');
      $missions = Input::get('misi');
      $sources = Input::get('source');

      for($i = 0; $i < count($missions); $i++)  {
        $mission = new Mission();
        $mission->candidate_id = $id;
        $mission->value = $missions[$i];
        $mission->source = $sources[$i];
        $mission->save();
      }
      return redirect("/mission/$id");
    }

    public function edit($id)  {
      $mission = Mission::find($id);
      return view('mission.edit',compact('mission'));
    }

    public function update(Request $request, $id) {

    }

    public function delete($id) {
      $mission = Mission::find($id);
      $mission->delete();

      return back();
    }
}
