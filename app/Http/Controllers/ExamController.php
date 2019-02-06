<?php

namespace App\Http\Controllers;

use App\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index(){

        $exams = Exam::orderBy('exam_name')->get();  //fetches all exams from the table
        return view ('develop.list-exams', compact('exams'));
    }

    public function updation(){

        $exams = Exam::where('next_check','<=', date("Y-m-d"))
        ->WhereNull('completed_on')
        ->orderBy('exam_name')
        ->get();
        return view ('develop.list-exams', compact('exams'));
    }

    public function edit($id){

        $exam =  Exam::findOrFail($id); //fetches exams that needs updation from the table
        return view ('develop.edit', compact('exam'));
    }

    public function update($id)
    {
        $exam = Exam::findOrFail($id);

        $exam->exam_name = request('exam_name');
        $exam->exam_link = request('exam_link');
        $exam->dept = request('dept');
        $exam->next_check = request('next_check');
        $exam->status = request('status');
        $exam->completed_on = request('completed_on');
        $exam->updated_at = now();
        $exam->save();

        echo "<h4><b>Exam Modified Successfully</b></h4>";

        echo "<a href=\"/list-exams\">List Exam Homepage</a>";
        echo "<br>";
        echo "<a href=\"/today-updation\">Today Updation</a>";

        return dd($_REQUEST);
    }
}