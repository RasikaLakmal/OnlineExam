<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function eresults()
    {
        return view('StudentViews.ExamResults');
    }
    public function sexams()
    { $p=DB::table('sexams')->get();
        
        return view('StudentViews.sExams')->with('d',$p);
    }
    public function ssexams($exam_id)
    
    {  $Y=DB::table('publishedexams')->where('exam_id',$exam_id)->get();
        return view('StudentViews.sSingleExam')->with('Xt',$Y)->with('Xtt',$exam_id);
    }
    public function waiting()
    {
        return view('StudentViews.waiting');
    }

    public function answeringed(Request $request){
        //DB::table('exam')->where('id',$id)->update(['status' => "published",]);
        //$X =DB::table('exams')->where('exam_id',$exam_id)->value('exam_id');
         
        $questions=DB::table('publishedexams')->where('exam_id',$request)->get();
        //$del=DB::table('draftedexams')->where('exam_id',$id ) ->delete();
       // $email=   Auth::user()->email ;
       // $id=DB::table('students')->where('EmailID',$email)->value('StudentID');
        $w= request()->post();






      for($i=1; $i<=$request->qcount; $i++){ 
          echo $w['q'.$i];
         //return print_r($request->qs[$i]);
          DB::table('answeringexams')->insert([
            'exam_id' => $request->examid, 'qid' => 'q'.$i,'question' =>$request->question,'selected_answer' =>$w['q'.$i]
          ]);
      }
        //
     //print_r($q) ;
    //  }
     // $questions=DB::table('publishedexams')->where('exam_id',$id)->get();
     // foreach($questions as $q){
    //DB::table('answeringexams')->where('exam_id',$id)->update([
    //    'exam_id' => $id,'status' => "attended",
    //]);}
    DB::table('sexams')->update([
        'exam_id' => $request->examid,'status' => "attended"]);
        
$p=DB::table('sexams')->get();
return redirect('/sexams')->with('sexamt',$p);
        }
}
