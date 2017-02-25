<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Vision;
use App\Candidate;
class VisionController extends Controller
{
    //
    public function index($id) {
      $vision = Candidate::find($id)->visions();
      return view('vision.index',compact('vision'));
    }

    public function $create($id)  {
      return view('vision.create',compact('id'));
    }

    public function store(Request $request)  {

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
