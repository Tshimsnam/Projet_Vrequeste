<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\Course;

class Chauffeur extends Vehicule
{
    use HasFactory;

    protected $fillable = [
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function courses(){
        return $this->hasMany(Course::class, 'chauffeur_id');
    }
}