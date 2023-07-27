<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $fillable = ['nom', 'description'];
    
    // Relation avec les membres
    public function membre()
    {
        return $this->hasMany(Membre::class);
    }

    // Relation avec les activités
    public function activite()
    {
        return $this->hasMany(Activite::class);
    }
}
