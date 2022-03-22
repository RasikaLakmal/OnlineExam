<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function dashboard()
    {
        return view('TeacherViews.Dashboard');
    }
    public function mse()
    {$p=DB::table('publishedexams')->get();
        return view('TeacherViews.MonitorStartedExams')->with('mset',$p);
    }
    public function texams()
    {$p=DB::table('exams')->get();
        return view('TeacherViews.tExams')->with('examt',$p);
    }
    public function tsexams()
    {
       /* DB::table('exams')->where('exam_id',$exam_id)->update(['status' => "draft",]);
        $X =DB::table('exams')->where('exam_id',$exam_id)->value('exam_id');*/
        $Y =DB::table('draftedexams')->get();
        return view('TeacherViews.tSingleExam')->with('Xt',$Y);
    }
    public function publishexam($exam_id){
        DB::table('exam')->where('id',$exam_id)->update(['status' => "published",]);
        $X =DB::table('exams')->where('exam_id',$exam_id)->value('exam_id');
        $qn=DB::table('publishedexams')->where('exam_id',$exam_id)->value('question');
        DB::table('publishedexams')->where('exam_id',$exam_id)->update(['question' => $qn,]);
        return redirect()->back();
        }
    public function examt(){
        
        
        
        return view('TeacherViews.tExams');      
    }

    public function addq(Request $request){

        DB::table('draftedexams')->where('id',$request->id)->update([
            'exam_id' => $request->examid,'question' => $request->question,'answer1' => $request->answer1,'answer2' => $request->answer2,'answer3' => $request->answer3,'answer4' => $request->answer4,'correct_answer' => $request->canswer
                                                                        ]);
        return redirect()->back()->with('msg',"Question Saved");
    
}

}
