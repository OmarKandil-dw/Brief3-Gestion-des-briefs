<?php

namespace App\Http\Controllers;
use App\Models\Briefs;
use App\Models\taches;
use Illuminate\Http\Request;

class tachesController extends Controller



    {
    //
    public  function create_taches($id){
        $brief = Briefs::where('id', $id )->first();
        $data = $brief->task;
        return view('taches' , compact('data','id'));
    }



    public function addtaches(Request $request){
        $addtache = new taches();
        $addtache->title = $request->title;
        $addtache->startdate = $request->startdate;
        $addtache->enddate = $request->enddate;
        $addtache->description = $request->description;
        $addtache->brief()->associate($request->id_brief);
        $addtache->save();
        return redirect('taches/'.$request->id_brief);
    }
    

    public function delete($id,$id_task){
        $query = Briefs::where("id",$id)->get() ;
        taches::where('id',$id_task)->delete();
        return redirect('taches/'.$query[0]->id);
    }

    
    public function update_taches($id){
        $edit = new taches();
        $taches = $edit::where('id',$id)->get();
        return view('update_taches', compact('taches'));
    }

    public  function edit_tache($id,$id_task,Request $request){
        $query = Briefs::where("id",$id)->first();
        $edittaches = taches::where('id',$id_task)->first();
        $edittaches->title = $request->title;
        $edittaches->description = $request->description;
        $edittaches->startdate = $request->startdate;
        $edittaches->enddate = $request->enddate;
        $edittaches->save();
        return redirect('taches/' .$query->id);
    }
}
