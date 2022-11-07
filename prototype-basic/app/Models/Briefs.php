<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Briefs extends Model
{
    use HasFactory;
    public function task(){
        return $this->hasMany(taches::class,'id_brief','id');
    }
}
