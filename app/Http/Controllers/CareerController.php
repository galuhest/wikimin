<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

use App\Career;
use App\Person;
class CareerController extends Controller
{
    //
    public function index($id) {
      $careers = Person::find($id)->careers;
      return view('career.index',compact('careers'));
    }

    public function create($id)  {
      return view('career.create',compact('id'));
    }

    public function store(Request $request)  {
      $id = Input::get('id');
      $institution = Input::get('institution');
      $year_start = Input::get('year_start');
      $year_end = Input::get('year_end');
      $position = Input::get('position');
      $sources = Input::get('source');

      for($i = 0; $i < count($institution); $i++)  {
        $career = new Career();
        $career->person_id = $id;
        $career->institution = $institution[$i];
        $career->position = (isset($position[$i])? $position[$i]:null);
        $career->year_start = $year_start[$i];
        $career->year_end = (isset($year_end[$i])? $year_end[$i]:null);
        $career->source = $sources[$i];
        $career->save();
      }
      return redirect("/career/$id");
    }

    public function edit($id)  {
      $career = Career::find($id);
      return view('career.edit',compact('career'));
    }

    public function update(Request $request, $id) {

    }

    public function delete($id) {
      $career = Career::find($id);
      $career->delete();

      return back();
    }
}
