<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Activite extends Model

{
    protected $fillable = ['titre', 'description','club_id'];
    
    // Relation avec le club
    public function club()
    {
        return $this->belongsTo(Club::class);
    }
}