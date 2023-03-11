<?php

namespace App\Models\Portfolio;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EducationInfo extends Model
{

    protected $table ='portfolio.education_info';
    const CREATED_AT = 'cd';
    const UPDATED_AT = 'ud';
}
