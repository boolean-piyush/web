<?php

namespace App\Http\Controllers;

use App\Exam;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class RouteController extends Controller
{
    public function exam_router(Request $request){
        $str = explode('/',$request->path());
        $examName = $str[count($str)-1];
        if (View::exists('exams.'.$examName)) {
            return view('exams.'.$examName);
        }
        else return abort(404);
    }

    public function dept_router(Request $request){
        $str = explode('/',$request->path());
        $deptName = $str[count($str)-1];
        $exams = Exam::where('dept',$deptName)->get();
        if($exams->count()==0){
                return abort(404);
        }
        DB::disconnect('test');
        $deptName = ucfirst($deptName);
        return view('dept-handle', compact('exams','deptName'));
    }
}