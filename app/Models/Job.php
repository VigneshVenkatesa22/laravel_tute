<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Arr;

class Job extends Model
{
       use HasFactory;
       protected $table = "job_listings";
       protected $fillable = ['title', 'salary'];

       public function employer()
       {
              return $this->belongsTo(Employer::class);
       }
       // \App\Models\User::factory()->count(10)->create();
       // App\Models\Job::all()
       public function tags()
       {
              return $this->belongsToMany(Tag::class, 'job_tag', 'job_listing_id', 'tag_id');
       }
}
