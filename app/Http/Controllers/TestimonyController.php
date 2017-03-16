<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

use App\Testimony;
use App\Person;
class TestimonyController extends Controller
{
    //
    public function index($id) {
      $testimonys = Person::find($id)->testimonies;
      return view('testimony.index',compact('testimonys'));
    }

    public function create($id)  {
      return view('testimony.create',compact('id'));
    }

    public function store(Request $request)  {
      $id = Input::get('id');
      $year_given = Input::get('year_given');
      $voucher = Input::get('voucher');
      $value = Input::get('testimony');
      $sources = Input::get('source');

      for($i = 0; $i < count($value); $i++)  {
        $testimony = new Testimony();
        $testimony->person_id = $id;
        $testimony->voucher = $voucher[$i];
        $testimony->year_given = $year_given[$i];
        $testimony->testimony = $value[$i];
        $testimony->source = $sources[$i];
        $testimony->save();
      }
      return redirect("/testimony/$id");
    }

    public function edit($id)  {
      $testimony = Testimony::find($id);
      return view('testimony.edit',compact('testimony'));
    }

    public function update(Request $request, $id) {

    }

    public function delete($id) {
      $testimony = Testimony::find($id);
      $testimony->delete();

      return back();
    }
}
