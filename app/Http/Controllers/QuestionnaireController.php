<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Questionnaire;

class QuestionnaireController extends Controller
{
    //
    function create(){
        return view('questionnaire.create');
    }
    function store(){
        $data = request()->validate([
            'title' => 'required',
            'purpose' => 'required'
        ]);
        $data['user_id'] = auth()->user()->id;

        $questionnaire = \App\Questionnaire::create($data);
        return redirect('/questionnaires'.$questionnaire->id);
    }
    function show(\App\Questionnaire $questionnaire){
           return view('questionnaire.show',compact('questionnaire'));
    }
}
