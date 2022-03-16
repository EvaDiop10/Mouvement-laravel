<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quartier extends Model
{
    use HasFactory;
    protected $fillable = ['nom','commune_id'];

    public function entreprises (){
        return $this->hasMany(Entreprise::class);
    }
}
