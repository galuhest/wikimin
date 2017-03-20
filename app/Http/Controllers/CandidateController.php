<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

use App\Candidate;
use App\Person;
use App\Program;
use App\Vision;
use App\Mission;
use App\Testimony;
use App\Education;
use App\Career;
use App\Award;

class CandidateController extends Controller
{
    public function welcome()
    {
        //constructing candidates array
        $ahokdjarotq = Candidate::where('id', '=', '1')->first();
            $ahokdjarot['programs'] = Program::where('candidate_id','=',$ahokdjarotq->id)->get();
            $ahokdjarot['visions'] = Vision::where('candidate_id','=',$ahokdjarotq->id)->get();
            $ahokdjarot['missions'] = Mission::where('candidate_id','=',$ahokdjarotq->id)->get();

        $aniessandiq = Candidate::where('id', '=', '2')->first();
            $aniessandi['programs'] = Program::where('candidate_id','=',$aniessandiq->id)->get();
            $aniessandi['visions'] = Vision::where('candidate_id','=',$aniessandiq->id)->get();
            $aniessandi['missions'] = Mission::where('candidate_id','=',$aniessandiq->id)->get();

        $candidates = array($ahokdjarot, $aniessandi);

        //constructing persons array
        $djarotq = Person::where('name', '=', 'Djarot')->first();
            $djarot["name"] = $djarotq->name;
            $djarot["id"] = $djarotq->id;
            $djarot["testimonies"] = Testimony::where('person_id','=',$djarotq->id)->get();
            $djarot["educations"] = Education::where('person_id','=',$djarotq->id)->get();
            $djarot["careers"] = Career::where('person_id','=',$djarotq->id)->get();
            $djarot["awards"] = Award::where('person_id','=',$djarotq->id)->get();
        $ahokq = Person::where('name', '=', 'Ahok')->first();
            $ahok["name"] = $ahokq->name;
            $ahok["id"] = $ahokq->id;
            $ahok["testimonies"] = Testimony::where('person_id','=',$ahokq->id)->get();
            $ahok["educations"] = Education::where('person_id','=',$ahokq->id)->get();
            $ahok["careers"] = Career::where('person_id','=',$ahokq->id)->get();
            $ahok["awards"] = Award::where('person_id','=',$ahokq->id)->get();
        $aniesq = Person::where('name', '=', 'Anies')->first();
            $anies["name"] = $aniesq->name;
            $anies["id"] = $aniesq->id;
            $anies["testimonies"] = Testimony::where('person_id','=',$aniesq->id)->get();
            $anies["educations"] = Education::where('person_id','=',$aniesq->id)->get();
            $anies["careers"] = Career::where('person_id','=',$aniesq->id)->get();
            $anies["awards"] = Award::where('person_id','=',$aniesq->id)->get();
        $sandiq = Person::where('name', '=', 'Sandi')->first();
            $sandi["name"] = $sandiq->name;
            $sandi["id"] = $sandiq->id;
            $sandi["testimonies"] = Testimony::where('person_id','=',$sandiq->id)->get();
            $sandi["educations"] = Education::where('person_id','=',$sandiq->id)->get();
            $sandi["careers"] = Career::where('person_id','=',$sandiq->id)->get();
            $sandi["awards"] = Award::where('person_id','=',$sandiq->id)->get();

        $persons = array($djarot, $ahok, $anies, $sandi);

        return view('welcome', compact('candidates', 'persons'));
    }

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
            /*'photo-head' => 'required|mimes:jpeg,png,bmp,jpg',
            'photo-vice' => 'required|mimes:jpeg,png,bmp,jpg'*/
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
