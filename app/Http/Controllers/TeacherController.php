<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class TeacherController extends Controller
{
    public function dashboard()
    {// $email=   Auth::user()->email ;
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
    public function tsexams($exam_id)
    {
       
        
        $Y =DB::table('draftedexams')->where('exam_id',$exam_id)->get();
        
        return view('TeacherViews.tSingleExam')->with('Xt',$Y)->with('Xtt',$exam_id);
    }
//return $exam_id;
    public function ntsexams($exam_id)
    {
       
        
        $Y =DB::table('draftedexams')->where('exam_id',$exam_id)->get();
        
        return view('TeacherViews.ntSingleExam')->with('Xt',$Y);
    }
    /* DB::table('exams')->where('exam_id',$exam_id)->update(['status' => "draft",]);
        $X =DB::table('exams')->where('exam_id',$exam_id)->value('exam_id');*/
        //$z =DB::table('publishedexams')->where('exam_id',$p)->first();
    public function publishexam($id){
        //DB::table('exam')->where('id',$id)->update(['status' => "published",]);
        //$X =DB::table('exams')->where('exam_id',$exam_id)->value('exam_id');
         
        $questions=DB::table('draftedexams')->where('exam_id',$id)->get();
        $del=DB::table('draftedexams')->where('exam_id',$id ) ->delete();
      foreach($questions as $q){
        DB::table('publishedexams')->insert([
            'exam_id' => $q->exam_id,'question' => $q->question,'answer1' => $q->answer1,'answer2' => $q->answer2,'answer3' => $q->answer3,'answer4' => $q->answer4,'correct_answer' => $q->correct_answer
    ]);
      }
      
      $ti=Carbon::now()->toDateTimeString();


    DB::table('exams')->where('exam_id',$id)->update([
        'exam_id' => $id,'updated_at'=>$ti,'status' => "published",
    ]);
        DB::table('sexams')->where('exam_id',$id)->insert([
            'exam_id' => $id,'status' => "pending",
]);

//'starting_time' => $examid,'duration' => $examid,
$p=DB::table('exams')->get();
return redirect('/texams')->with('examt',$p)->with('msg',"Exam Published");
        }

        public function answeringe($id){
            //DB::table('exam')->where('id',$id)->update(['status' => "published",]);
            //$X =DB::table('exams')->where('exam_id',$exam_id)->value('exam_id');
            $exam_id=DB::table('publishedexams')->where('id',$id)->value('exam_id');
            $student_id=DB::table('publishedexams')->where('id',$id)->value('student_id');
            $question=DB::table('publishedexams')->where('id',$id)->value('question');
            //$answer2=DB::table('publishedexams')->where('id',$id)->value('answer2');
            $exam_starttime=DB::table('publishedexams')->where('id',$id)->value('exam_starttime');
            $exam_endtime=DB::table('publishedexams')->where('id',$id)->value('exam_endtime');
            $duration=DB::table('publishedexams')->where('id',$id)->value('duration');
    
            
    
            DB::table('answeringexams')->where('id',$id)->update([
                'exam_id' => $exam_id,'question' => $question,'student_id' => $student_id,'exam_starttime' => $exam_starttime,'exam_endtime' => $exam_endtime,'duration' => $duration
        ]); 
        return redirect()->back();
            }
            //'completed_orn' => "completed",
    public function examt(){
        
        
        
        return view('TeacherViews.tExams');      
    }

    public function addq(Request $request){

        DB::table('draftedexams')->insert([
            'exam_id' => $request->examid,'question' => $request->question,'answer1' => $request->answer1,'answer2' => $request->answer2,'answer3' => $request->answer3,'answer4' => $request->answer4,'correct_answer' => $request->canswer
                                                                        ]);
        return redirect()->back()->with('msg',"Question Saved");
    
}

/*public function addqn(Request $request){

    DB::table('draftedexams')->insert([
        'exam_id' => $request->examid,'question' => $request->question,'answer1' => $request->answer1,'answer2' => $request->answer2,'answer3' => $request->answer3,'answer4' => $request->answer4,'correct_answer' => $request->canswer
                                                                    ]);
                                                                    $p=DB::table('exams')->where('exam_id',$exam_id)->value('exam_id');
                                                                    $Y =DB::table('draftedexams')->where('exam_id',$p)->get();
                                                                    
                                                                    return view('TeacherViews.tSingleExam')->with('Xt',$Y);

}*/

   public function publishex(request $request){
    DB::table('draftedexams')->get();
    DB::table('publishedexams')->insert([
        'exam_id' => $request->examid,'question' => $request->question,'answer1' => $request->answer1,'answer2' => $request->answer2,'answer3' => $request->answer3,'answer4' => $request->answer4,'correct_answer' => $request->canswer
]);
$Y =DB::table('draftedexams')->where('exam_id',$request->exam_id)->get();
return view('TeacherViews.tSingleExam')->with('Xt',$Y)->with('Xtt',$request->exam_id);
   }
   public function newexamcd(Request $request){
    $ti=Carbon::now()->toDateTimeString();
    DB::table('exams')->insert([
        'exam_id' => $request->examid,'updated_at'=>$ti,'status' => "drafted"]);
        $p=DB::table('exams')->get();
        return redirect('/texams')->with('examt',$p)->with('msg',"Exam Added.");
   }
   public function newexamc(){
   
    return view('TeacherViews.ntSingleExam');
   }

}
