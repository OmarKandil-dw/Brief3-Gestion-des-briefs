<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Briefs;
class taches extends Model
{
    use HasFactory;
    public function brief(){
        return $this->belongsTo(Briefs::class, 'id_brief', 'id');
    }
}
