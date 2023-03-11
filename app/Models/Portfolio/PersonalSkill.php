<?php

namespace App\Models\Portfolio;

use Illuminate\Database\Eloquent\Model;

class PersonalSkill extends Model
{
    protected $table = 'portfolio.personal_skill';
    const CREATED_AT = 'cd';
    const UPDATED_AT = 'ud';
}
