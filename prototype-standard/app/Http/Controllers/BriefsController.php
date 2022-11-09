<?php

namespace App\Http\Controllers;

use App\Models\Briefs;
use Illuminate\Http\Request;

class BriefsController extends Controller
{
    //

  
    public function index(){
        $data = Briefs::all();
        return view ('briefs', compact("data"));

    }

    public function add(){
        return view('addbrief');
    }

    public function insert(Request $request){
        $addbrief = new Briefs();
        $addbrief->name = $request->name;
        $addbrief->description = $request->description;
        $addbrief->date_de_livraison = $request->date_de_livraison;
        $addbrief->date_de_récuperation = $request->date_de_récuperation;
        $addbrief->save();
        return redirect('briefs');
    }

    public function update_brief($id){
        $edit = new Briefs();
        $briefs = $edit::where('id',$id)->get();
        return view('update_brief', compact('briefs'));

    }

    public function edit_brief($id,Request $request){

        $editbrief = Briefs::where('id',$id)->first();
        $editbrief->name = $request->name;
        $editbrief->description = $request->description;
        $editbrief->date_de_livraison = $request->date_de_livraison;
        $editbrief->date_de_récuperation = $request->date_de_récuperation;
        $editbrief->save();
        return redirect('briefs');

    }

    public function delete(Request $request){
         Briefs::where('id',$request->id)->delete();
         return  redirect('briefs'); 
     }
 
   

    
 

   

}
