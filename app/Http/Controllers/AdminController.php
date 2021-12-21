<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\teachertask;
use DataTables;

class AdminController extends Controller
{//########################################################
public function DisplayTeachersList()
{
    $teacher=Teacher::all();
    $tasklist=teachertask::all();

    
    return view('/allotedtasktoteacher',['teacher'=>$teacher,'tasklist'=>$tasklist]);
}
//###########################################################


function AddTeacherTask(Request $req)
   {
        $s = new teachertask;
        $s->name=$req->name;
        $s->standard=$req->standard;
        $s->subject=$req->subject;
        $s->course=$req->course;
        $s->alloted_hours=$req->alloted_hours;
        $s->balance_hours=$req->alloted_hours;
        $s->save();
        return redirect('/teachertasks')->with('success','Task Alloted successfully.');
   }
//********************************************/
// public function index(Request $request)
// {
//     if ($request->ajax()) {
//         $data = teachertask::latest()->get();
//         return Datatables::of($data)
//             ->addIndexColumn()
//             ->addColumn('action', function($row){
//                 $btn = '<a href="javascript:void(0)" class="edit btn btn-primary">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger">Delete</a>';
//                 return $btn;
//             })
//             ->rawColumns(['action'])
//             ->make(true);
//     }
  
//     return view('allotedtasktoteacher');
// }
 }
