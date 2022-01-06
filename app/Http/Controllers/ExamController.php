<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Exams;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exams = Exam::all();
        return view('admin.examCrud',compact('exams'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addExam');
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
            'exam_name' => 'required',
            'exam_desc' => 'required',
            'image' => 'required',
        ]);

     $input = $request->all();
     if($request->file("image")) {
        $newImageName = time() . '-' . $request->image->getClientOriginalName();
        $request->image->move(public_path('images'), $newImageName);
        $input['image'] = $newImageName;
     }
        Exam::create($input);

        return redirect()->route('exam.index');
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
    public function edit(Exam $exam)
    {
        return view('admin.editExam',compact('exam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , Exam $exam )
    {
        $request->validate([
            'exam_name' => 'required',
            'exam_desc' => 'required',
        ]);
     $input = $request->all();
     if($request->file("image")) {
        $newImageName = time() . '-' . $request->image->getClientOriginalName();
        $request->image->move(public_path('images'), $newImageName);
        $input['image'] = $newImageName;
     }
     $exam->update($input);
     return redirect()->route('exam.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exam $exam)
    {
        $exam->delete();
        return back();
    }
}
