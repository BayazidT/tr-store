<?php

namespace App\Models\Portfolio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienceInfo extends Model
{
    use HasFactory;
    protected $table = 'portfolio.experience_info';
    const CREATED_AT = 'cd';
    const UPDATED_AT = 'ud';
}
