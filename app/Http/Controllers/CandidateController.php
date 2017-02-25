<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

use App\Candidate;
use App\Person;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $candidates = Candidate::get();
        return view('candidate.index', compact('candidates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('candidate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $rules = array(
            'head' => 'required',
            'vice' => 'required',
            'photo-head' => 'required|mimes:jpeg,png,bmp,jpg',
            'photo-vice' => 'required|mimes:jpeg,png,bmp,jpg'
        );
        $validator = Validator::make(Input::all(), $rules);
        // process the login
        if ($validator->fails()) {
            return back()
                ->withErrors($validator);
        }

        $head = Input::get('head');
        $vice = Input::get('vice');

        $headObject = new Person();
        $headObject->name = $head;
        $headObject->save();

        $viceObject = new Person();
        $viceObject->name = $vice;
        $viceObject->save();

        $candidate = new Candidate;
        $candidate->head_id = Person::where('name','like',$head)->first()->id;
        $candidate->vice_id = Person::where('name','like',$vice)->first()->id;
        $candidate->save();

        $file = $request->file('photo-head');
        $name = $file->getClientOriginalName();
        $path = $file->storeAs("photo", $head);

        $file = $request->file('photo-vice');
        $name = $file->getClientOriginalName();
        $path = $file->storeAs("photo", $vice);

        return redirect('/candidate');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $candidate = Candidate::find($id);
        return view('candidate.show',compact('candidate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $candidate = Candidate::find($id);
        return view('candidate.edit', compact('candidate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $head = Input::get('head');
        $vice = Input::get('vice');

        $candidate = Candidate::find($id);

        $headObject = Person::where('id','=',$candidate->head_id)->first();
        $headObject->name = $head;
        $headObject->save();

        $viceObject = Person::where('id','=',$candidate->vice_id)->first();
        $viceObject->name = $vice;
        $viceObject->save();

        // Storage::move("photo/$candidate->name_head", "photo/$head");
        // Storage::move("photo/$candidate->vice", "photo/$vice");
        return redirect('/candidate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $candidate = Candidate::find($id);
        $candidate->delete();

        return redirect('/candidate');
    }
}
