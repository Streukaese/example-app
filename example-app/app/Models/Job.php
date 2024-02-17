<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = ['title', 'description', 'location', 'salary', 'companyId'];

    public function company() 
    {
        return $this -> belongsTo(Company::class);
    }

    use HasFactory;
}
