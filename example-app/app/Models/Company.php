<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'location', 'foundetAt'];

    // Beziehung zu den Jobs der Firma
    public function jobs() 
    {
        return $this->hasMany(Job::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
