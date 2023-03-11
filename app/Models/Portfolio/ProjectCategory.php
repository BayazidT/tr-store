<?php

namespace App\Models\Portfolio;

use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    protected $table = 'portfolio.project_category';
    const CREATED_AT = 'cd';
    const UPDATED_AT = 'ud';
}
