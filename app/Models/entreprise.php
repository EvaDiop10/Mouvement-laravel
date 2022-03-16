<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entreprise extends Model
{
    use HasFactory;

    protected $casts = [
        'cotisationSocial' => 'boolean',
        'organigramme' => 'boolean',
         'contratFormel' => 'boolean',
    ];
    protected $guarded = ['id'];

    public function quartier(){
        return $this->belongsTo(Quartier::Class);
    }
}
