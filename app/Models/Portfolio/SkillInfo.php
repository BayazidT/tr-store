<?php

namespace App\Models\Portfolio;

use Illuminate\Database\Eloquent\Model;

class SkillInfo extends Model
{
    protected $table = 'portfolio.skill_info';
    const CREATED_AT = 'cd';
    const UPDATED_AT = 'ud';
}
