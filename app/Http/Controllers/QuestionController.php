<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Question;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $questions= Question::all();
       
        return view('admin.questionCrud',compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Exam $exam)
    {
        $ex= Exam::find($exam->id);
        $relatedExams= Exam::all();
        return view('admin.addQuestion',compact('relatedExams','ex'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'question_titel' => 'required',
            'answer_one' => 'required',
            'answer_two' => 'required',
            'answer_three' => 'required',
            'answer_four' => 'required',
            'correct_answer' => 'required',
            'exam_id' => 'required',
        ]);

     $input = $request->all();
     
        Question::create($input);

        return redirect()->route('question.index');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        return view('admin.editQuestion',compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        $request->validate([
        "question_titel"=>'required',
        "answer_one"=>'required',
        "answer_two"=>'required',
        "answer_three"=>'required',
        "answer_four"=>'required',
        "correct_answer"=>'required',
        ]);
     $input = $request->all();
    
     $question->update($input);
     return redirect()->route('question.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->delete();
        return back();
    }
}
