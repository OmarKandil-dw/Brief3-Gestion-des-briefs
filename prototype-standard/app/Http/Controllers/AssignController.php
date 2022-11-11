<?php

namespace App\Http\Controllers;

use App\Models\Apprenants;
use App\Models\promotion;
use Illuminate\Http\Request;

class AssignController extends Controller
{
    //
    public  function index($id){
        $apprenants = Apprenants::all();
        return view('briefsassignement', compact('apprenants','id'));
    }
    
    public function AssignBrief($id,$id_apprenant){
        $apprennants = Apprenants::where('id',$id_apprenant)->first();
        $apprennants->brief()->attach($id);
        return redirect('/assigner/'. $id);
    }

    public function DesAssignBrief($id,$id_apprenant){
        $desassigner = Apprenants::where('id',$id_apprenant)->first();
        $desassigner->brief()->detach($id);
        return redirect('/assigner/'. $id);
    }

}
