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
        return view('create_taches' , compact('data','id'));
    }



    public function addtaches(Request $request){
        $addtache = new taches();
        $addtache->title = $request->title;
        $addtache->startdate = $request->startdate;
        $addtache->enddate = $request->enddate;
        $addtache->description = $request->description;
        $addtache->brief()->associate($request->id_brief);
        $addtache->save();
        return redirect('create_taches/'.$request->id_brief);
    }
    
}
