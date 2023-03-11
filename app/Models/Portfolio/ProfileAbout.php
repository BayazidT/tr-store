<?php

namespace App\Models\Portfolio;

use Illuminate\Database\Eloquent\Model;

class ProfileAbout extends Model
{
    protected $table = 'portfolio.profile_about';
    const CREATED_AT = 'cd';
    const UPDATED_AT = 'ud';
}
