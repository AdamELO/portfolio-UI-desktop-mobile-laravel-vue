<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $with = ["frameworks"];
    public function frameworks()
    {
        return $this->belongsToMany(Framework::class, 'frameworks_projects');
    }
}
