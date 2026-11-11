<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable('title', 'description', 'github_url', 'image_path', 'live_url')]
class Project extends Model
{
    //
}
