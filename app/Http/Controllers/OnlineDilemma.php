<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Http\Requests;

class OnlineDilemma extends Controller
{

    public function getDilemma($question_key){

      $question = Question::where('key','=',$question_key)->first();

      $question_options = $question->options;

        return view('public.question')
            ->with(compact('question'))
            ->with(compact('question_options'));
    }

    public function getPreview($question_key){

      $question = Question::where('key','=',$question_key)->first();

      $question_options = $question->options;

        return view('public.questionPreview')
            ->with(compact('question'))
            ->with(compact('question_options'));
    }

}
