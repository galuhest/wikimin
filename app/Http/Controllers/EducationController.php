<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

use App\Education;
use App\Person;
class EducationController extends Controller
{
    //
    public function index($id) {
      $educations = Person::find($id)->educations;
      return view('education.index',compact('educations'));
    }

    public function create($id)  {
      return view('education.create',compact('id'));
    }

    public function store(Request $request)  {
      $id = Input::get('id');
      $institution = Input::get('institution');
      $year_start = Input::get('year_start');
      $year_end = Input::get('year_end');
      $degree = Input::get('degree');
      $sources = Input::get('source');

      for($i = 0; $i < count($institution); $i++)  {
        $education = new Education();
        $education->person_id = $id;
        $education->institution = $institution[$i];
        $education->degree = (isset($degree[$i])? $degree[$i]:null);
        $education->year_start = $year_start[$i];
        $education->year_end = (isset($year_end[$i])? $year_end[$i]:null);
        $education->source = $sources[$i];
        $education->source_link = $source_links[$i];
        $education->save();
      }
      return redirect("/education/$id");
    }

    public function edit($id)  {
      $education = Education::find($id);
      return view('education.edit',compact('education'));
    }

    public function update(Request $request, $id) {

    }

    public function delete($id) {
      $education = Education::find($id);
      $education->delete();

      return back();
    }
}
