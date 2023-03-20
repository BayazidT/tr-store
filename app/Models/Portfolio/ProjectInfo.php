<?php

namespace App\Models\Portfolio;

use Illuminate\Database\Eloquent\Model;

class ProjectInfo extends Model
{
    protected $table = 'portfolio.project_info';
    const CREATED_AT = 'cd';
    const UPDATED_AT = 'ud';
}
