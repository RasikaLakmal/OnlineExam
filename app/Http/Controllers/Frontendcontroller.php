<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Frontendcontroller extends Controller
{

      public function profile(){
        $email=   Auth::user()->email ;
        $role= Auth::user()->role ;
        
  
                
          if($role=="student"){
              $c=DB::table('students')->where('semail',$email)->first();
              $d=DB::table('sexams')->get();
              return view('StudentViews.sExams')->with('c',$c)->with('d',$d);
          }
          elseif($role=="teacher"){
              $c=DB::table('teachers')->where('temail',$email)->first();
              return view('TeacherViews.Dashboard')->with('c',$c);
          }
          
          
      }
    }

