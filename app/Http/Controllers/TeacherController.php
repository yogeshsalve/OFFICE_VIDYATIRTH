<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teachertask;
use DB;

class TeacherController extends Controller
{
    public function DisplayTaskData()
    {
       $taskdata=DB::table('teachertasks')
       ->where('name',"teacher")
       ->where('standard',"XI")
       ->where('subject',"Physics") 
       ->where('course',"Board")->first() ;
       return view('/teacher',['taskdata'=>$taskdata]);
    }
}
