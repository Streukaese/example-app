<?php

namespace App\Models;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;


// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Job {
    public static function all() 
    {
        $files =  File::files(resource_path("jobs/"));
        
        return array_map(fn($file) => $file->getContents(), $files);
    }

    public static function find($slug) 
    {
        if(! file_exists($path = resource_path("jobs/{$slug}.html"))) {
            throw new ModelNotFoundException();
        }

        return cache()->remember("jobs.{$slug}", 1200, fn () => file_get_contents($path));
    }
}

// class Job extends Model
// {
    // protected $fillable = ['title', 'description', 'location', 'salary', 'companyId'];

    // public function company() 
    // {
        // return $this -> belongsTo(Company::class);
    // }

    // use HasFactory;
// }
