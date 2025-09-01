<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = ['name', 'slug', 'description'];

    public function users()
    {
        return $this->belongsToMany(User::class)
            ->using(UserSkill::class)
            ->withPivot(['level', 'exp_months'])
            ->withTimestamps();
    }
}
