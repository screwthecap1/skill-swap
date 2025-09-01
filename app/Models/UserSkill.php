<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\SkillLevel;

class UserSkill extends Model
{
    protected $table = 'skill_user';
    protected $casts = ['laravel' => SkillLevel::class];
}
