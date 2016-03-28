<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Question;
use App\QuestionOption;
use Carbon\Carbon;
use Hash;

class QuestionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        return view('questions.index')->with(compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('questions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $question = new Question([
            'theme'=>$request->get('theme'),
            'question'=>$request->get('question'),
            'release_date' => $request->get('release_date')
          ]);

          $question->is_open = $request->get('is_open')? $request->get('is_open') : 0;

          // this sets a allways new string
          $question->key = Hash::make(Carbon::Now()->toRfc2822String());

          $question->key = str_replace('/', '', $question->key );

          // this automatically applies the user id for
          //the relations ship
          $question->save();

          return redirect('questions/'.$question->id.'/edit');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($question)
    {
          $question_options = $question->options;

          return view('questions.edit')
                  ->with(compact('question'))
                  ->with(compact('question_options'));
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
        $question = Question::findOrFail($id);

        $question->update([
                'theme'=>$request->get('theme'),
                'question'=>$request->get('question'),
                'release_date' => $request->get('release_date'),
                'is_open' => $request->get('is_open')
            ]);

        return redirect('questions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($question)
    {
          $question->delete();

          $questions = Question::all();

          $page = view('questions._table')
                    ->with(compact('questions'))
                    ->render();

          // to return the view to refresh the list
          return $page;
    }

    public function saveQuestionOption(Request $request, $question_option){

          $question_option->option_text =$request->get('option_text');

          $question_option->save();

          return response()->json(['status' => '200', 'code' => 'OK']);
    }

    public function addOption($question){
        $option = new QuestionOption();

        $option->question_id = $question->id;

        $option->save();

        $question_options = $question->options;

        $page = view('questions.questionoptions')
                  ->with(compact('question_options'))
                  ->with('question_id', $question->id)->render();

        // to return the view to refresh the list
        return $page;
    }

    public function removeOption($question_option){

        $question = Question::findOrFail($question_option->question_id);

        $question_option->delete();

        $question_options = $question->options;

        $page = view('questions.questionoptions')
                  ->with(compact('question_options'))
                  ->with('question_id', $question->id)->render();

        // to return the view to refresh the list
        return $page;
    }
}
