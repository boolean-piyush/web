<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Data;
use App\Exam;


class SearchController extends Controller
{
    public function liveSearch(Request $request)
    { 
        $search = $request->term;
        if (is_null($search))
        {
           return view('live_search');		   
        }
        
        else
        {
            $search = str_replace(' ','-',$search);

            $posts = Exam::where('exam_name','LIKE',"%$search%")
                            ->orWhere('status','LIKE',"%$search%")
                            ->get();
                            
            $results = array();
            foreach ($posts as $post) {
                $results[]=['value' =>$post->exam_name];
            }
            if(count($results)==0){
                $results[]=['value' => "Sorry! Found Nothing"];
            }
            return response()->json($results);

                // $results = $this->database($search, 1);
                // return response()->json($results);


        }
    }

    public function filter(Request $request){
        $dept = explode(',',$request->dept[0]);
        $qualification = $request->qualification;

        if(!(is_null($request->dept[0]))){
            $exams = DB::table('exams')
            ->where('qualification', $qualification)
            ->whereIn('dept', $dept)
            ->get();
        }
        else{
            $exams = DB::table('exams')
                    ->where('qualification', $qualification)
                    ->get();
        }

        return dd($exams);
    }

    public function get_depts(){
        
        $result = Exam::pluck('dept')->unique();      

        $depts = array();
        foreach ($result as $dept) {
            array_push($depts, $dept);
        }
        return response()->json($depts);
    }

    // public function database($search, $index){
    //     $exams = [
    //         ["hello", "piyush"],
    //         ["hello1", "piyush1"],
    //         ["hello2", "piyush2"]
    //     ];

    //     $results=[];

    //     foreach ($exams as $exam) {
    //         if(preg_match("%$search%", $exam[$index])){
    //             $results[]=['value' =>$exam[0]];
    //         }
    //       }
    //     return $results;
    // }

    public function get_todos(){
        $result = DB::table('todo')->get();
        $todos = array();
        foreach ($result as $item) {
            array_push($todos, [$item->Work, $item->Priority]);
        }
        return response()->json($todos);
    }

}