<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
    protected $fillable = ['nom', 'email', 'club_id'];
    
    // Relation avec le club
    public function club()
    {
        return $this->belongsTo(Club::class);
    }
}
