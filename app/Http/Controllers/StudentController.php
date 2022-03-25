<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function answeringed($id){
        //DB::table('exam')->where('id',$id)->update(['status' => "published",]);
        //$X =DB::table('exams')->where('exam_id',$exam_id)->value('exam_id');
         
        $questions=DB::table('publishedexams')->where('exam_id',$id)->get();
        //$del=DB::table('draftedexams')->where('exam_id',$id ) ->delete();
      foreach($questions as $q){
        DB::table('answeringexams')->insert([
            'exam_id' => $q->exam_id,'question' => $q->question,'answer1' => $q->answer1,'answer2' => $q->answer2,'answer3' => $q->answer3,'answer4' => $q->answer4,'correct_answer' => $q->correct_answer
    ]);
      }

    DB::table('sexams')->where('exam_id',$id)->update([
        'exam_id' => $id,'status' => "attended",
    ]);
        //DB::table('sexams')->where('exam_id',$id)->insert([
       //     'exam_id' => $id,'status' => "pending",
//]);

//'starting_time' => $examid,'duration' => $examid,
$p=DB::table('sexams')->get();
return view('/TeacherViews.sExams')->with('sexamt',$p);
        }
}
