<?php

namespace App\Models;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;


// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Job 
{
    public $title;
    public $description;
    public $location;
    public $salary;
    public $companyId;
    public $slug;
    public function __construct($title, $description, $location, $salary, $companyId, $slug)
     {
        $this->title = $title;
        $this->description = $description;
        $this->location = $location;
        $this->salary = $salary;
        $this->companyId = $companyId;
        $this->slug = $slug;
    }

    public static function all() 
    {
        return collect(File::files(resource_path("jobs")))
            ->map(fn($file) => YamlFrontMatter::parseFile($file))
            ->map(fn($documents) => new Job(
            $documents->title,
            $documents->description,
            $documents->location,
            $documents->salary,
            $documents->companyId,
            $documents->slug
    ));
    }

    public static function find($slug) 
    {
        return static::all()->firstWhere('slug', $slug);
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
