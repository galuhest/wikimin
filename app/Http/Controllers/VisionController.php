<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

use App\Vision;
use App\Candidate;
class VisionController extends Controller
{
    //
    public function index($id) {
      $visions = Candidate::find($id)->visions;
      return view('vision.index',compact('visions'));
    }

    public function create($id)  {
      return view('vision.create',compact('id'));
    }

    public function store(Request $request)  {
      $id = Input::get('id');
      $visions = Input::get('visi');
      $sources = Input::get('source');
      $sources_links = Input::get('source_link');

      for($i = 0; $i < count($visions); $i++)  {
        $visi = new Vision();
        $visi->candidate_id = $id;
        $visi->value = $visions[$i];
        $visi->source = $sources[$i];
        $visi->source_link = $sources_links[$i];
        $visi->save();
      }

      return redirect("/vision/$id");
    }

    public function edit($id)  {
      $vision = Vision::find($id);
      return view('vision.edit',compact('vision'));
    }

    public function update(Request $request, $id) {

    }

    public function delete($id) {
      $vision = Vision::find($id);
      $vision->delete();

      return back();
    }
}
