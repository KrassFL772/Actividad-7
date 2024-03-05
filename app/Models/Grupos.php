<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupos extends Model
{
    use HasFactory;

    public function usuario(){
        return $this->belongsTo(Usuarios::class);
    }
    
    public function cursos(){
        return $this->hasMany(Cursos::class);
    }
    
}