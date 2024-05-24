<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    public function cliente(){
        return $this->belongsToMany("App\Models\Cliente");
    }

    public function proveedor(){
        return $this->belongsTo("App\Models\proveedor");
    }
}
