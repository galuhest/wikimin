<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

use App\Award;
use App\Person;
class AwardController extends Controller
{
    //
    public function index($id) {
      $awards = Person::find($id)->awards;
      $person_id = $id;
      return view('award.index',compact('awards', 'person_id'));
    }

    public function create($id)  {
      return view('award.create',compact('id'));
    }

    public function store(Request $request)  {
      $id = Input::get('id');
      $year_given = Input::get('year_given');
      $awards = Input::get('award');
      $institution = Input::get('institution');
      $sources = Input::get('source');
      $source_link = Input::get('source_link');

      for($i = 0; $i < count($awards); $i++)  {
        $award = new Award();
        $award->person_id = $id;
        $award->award = $awards[$i];
        $award->institution = $institution[$i];
        $award->year_given = $year_given[$i];
        $award->source = $sources[$i];
        $award->source_link = $source_link[$i];
        $award->save();
      }
      return redirect("/award/$id");
    }

    public function edit($id)  {
      $award = Award::find($id);
      return view('award.edit',compact('award'));
    }

    public function update(Request $request, $id) {

    }

    public function delete($id) {
      $award = Award::find($id);
      $award->delete();

      return back();
    }
}
