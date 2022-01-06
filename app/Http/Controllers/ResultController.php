<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Question;
use App\Models\Result;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::id());
        // ddd($user);
    //   $exam=Exam::find($user);
    //   ddd($exam);
        $results = $user->result;
        // ddd($results);
        return view('results', compact('results','user'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $user = User::find(Auth::id());
        // $results = $user->result->last();
        // return view('results', compact('results'));
    }
    
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request ,Exam $exam)
    {
        $correct=0;
        $wrong=0;
        $exam = $request->exam_id;
        $questions = Exam::find($exam)->question;
        $qCounter=count($questions);
        for($i=0; $i<$qCounter ;$i++){
            $questionNum = ($questions[$i]->id);
    
                $this->validate($request, [
                    'answer'. $questionNum => 'required',
                    
                ]);
                if($request['answer'. $questionNum] === $request['correct'. $questionNum] ){

                    $correct = $correct + 1;
                    
                }else{
                   
                    $wrong= $wrong + 1;
        
                }
            }
            if($correct > $wrong){
                $status = 'Passed';
            }else {
                $status = 'Failed';
            }
            $user_id= Auth::id();
            $exam_id= $request->exam_id;
            $examName = Exam::find($exam_id);
            $exam_name = $examName->exam_name;
            // ddd($exam_name);
            // dd($status);
            $markNum = ($correct * 10)/$qCounter;
            $mark = round($markNum , 2);
            $correct_ans= $correct;
            $wrong_ans= $wrong;
            
            Result::create([
                'user_id' =>$user_id , 'exam_id' => $exam_id , 'mark' =>$mark    , 'exam_name' => $exam_name ,
                'correct_answer'=>$correct_ans , 'wrong_answer' => $wrong_ans , 'status'=>$status
        ]);
        return redirect()->route('result.index');
       
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
    public function edit($id)
    {
        //
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
    }
}
