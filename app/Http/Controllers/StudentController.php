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
    { $p=DB::table('publishedexams')->get();
        
        return view('StudentViews.sExams')->with('d',$p);
    }
    public function ssexams()
    {  $p=DB::table('publishedexams')->get();
        return view('StudentViews.sSingleExam')->with('d',$p);
    }
    public function waiting()
    {
        return view('StudentViews.waiting');
    }
}
