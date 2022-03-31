<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
   
    public function sexams()
    { $p=DB::table('sexams')->get();
        
        return view('StudentViews.sExams')->with('d',$p);
    }
    public function eresults($exam_id)
    {$p=DB::table('results')->where('exam_id',$exam_id)->get();
        $q=DB::table('examresults')->where('exam_id',$exam_id)->value('marks');
        
        return view('StudentViews.ExamResults')->with('cd',$q)->with('ab',$p)->with('ex',$exam_id);
    }

    public function ssexams($exam_id)
    
    {  $Y=DB::table('publishedexams')->where('exam_id',$exam_id)->get();
        $Z=DB::table('sexams')->where('exam_id',$exam_id)->get();
        return view('StudentViews.sSingleExam')->with('Xt',$Y)->with('Zt',$Z)->with('Xtt',$exam_id);
    }
    public function waiting()
    {
        return view('StudentViews.waiting');
    }

    public function answeringed(Request $request){
        //DB::table('exam')->where('id',$id)->update(['status' => "published",]);
        //$X =DB::table('exams')->where('exam_id',$exam_id)->value('exam_id');
         
       // $questions=DB::table('publishedexams')->where('exam_id',$request)->get();
        //$del=DB::table('draftedexams')->where('exam_id',$id ) ->delete();
       // $email=   Auth::user()->email ;
       // $id=DB::table('students')->where('EmailID',$email)->value('StudentID');
        $w= request()->post();






      for($i=1; $i<=$request->qcount; $i++){ 
         // echo $w['q'.$i];
          $questions=DB::table('publishedexams')->where('exam_id',$request->examid)->where('qid','q'.$i)->value('correct_answer');
          $questionxy=DB::table('publishedexams')->where('exam_id',$request->examid)->where('qid','q'.$i)->value('question');
          if($w['q'.$i]==$questions){

          DB::table('results')->insert([
            'exam_id' => $request->examid, 'correct_answer'=>$questions,'question'=>$questionxy,'c_or_w'=>"correct",'marks'=>"1",'qid' => 'q'.$i,'selected_answer' =>$w['q'.$i]
          ]);

        }
        else{

            DB::table('results')->insert([
              'exam_id' => $request->examid, 'correct_answer'=>$questions,'c_or_w'=>"wrong",'marks'=>"0",'qid' => 'q'.$i,'selected_answer' =>$w['q'.$i]
            ]);
  
          }
        }

          $totalx=0;
          for($i=1; $i<=$request->qcount; $i++){ 
            $marksx=DB::table('results')->where('exam_id',$request->examid)->where('qid','q'.$i)->value('marks');
            
            $totalx=$totalx+$marksx;
            
          }

          $yu=($totalx/(1*$request->qcount))*100;
          DB::table('examresults')->insert([
            'exam_id' => $request->examid,'marks'=>$yu
          ]);

          
      
     
     

    

    
        //
     //print_r($q) ;
    //  }
     // $questions=DB::table('publishedexams')->where('exam_id',$id)->get();
     // foreach($questions as $q){
    //DB::table('answeringexams')->where('exam_id',$id)->update([
    //    'exam_id' => $id,'status' => "attended",
    //]);}
   
   
   
   DB::table('sexams')->where('exam_id',$request->examid)->update([
        'status' => "attended"]);
        
$p=DB::table('results')->where('exam_id',$request->examid)->get();
$q=DB::table('examresults')->where('exam_id',$request->examid)->value('marks');
return view('StudentViews.ExamResults')->with('cd',$q)->with('ab',$p)->with('ex',$request->examid);
        
    }
}
