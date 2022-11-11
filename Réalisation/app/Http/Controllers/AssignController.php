<?php

namespace App\Http\Controllers;

use App\Models\Apprenants;
use App\Models\Brief;
use App\Models\Briefs;
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
        $brief = Briefs::where('id', $id)->first();
        $apprennants = Apprenants::where('id',$id_apprenant)->first();
        
        if ($apprennants->brief()->exists()){
            $apprennants->brief()->detach($id);
            $apprennants->brief()->save($brief);
            return redirect('/assigner/'. $id);
        } else {
            $apprennants->brief()->attach($id);
            return redirect('/assigner/'. $id);
        }


    }

    public function DesAssignBrief($id,$id_apprenant){
        $desassigner = Apprenants::where('id',$id_apprenant)->first();
        $desassigner->brief()->detach($id);
        return redirect('/assigner/'. $id);
    }

    public function assignCLass($id)
    {
        $apprenants = Apprenants::all();
        foreach ($apprenants as $row) {
            if ($row->brief()->exists()) {
                $row->brief()->detach($id);
            }
            $row->brief()->attach($id);
        }
        return redirect('/assigner/' . $id);
    }

}
