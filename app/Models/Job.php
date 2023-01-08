<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['description', 'requirement'];
    public function company(){
        return $this->belongsTo(Company::class);
    }
    public function type(){
        return $this->belongsTo(JobType::class);
    }
}
