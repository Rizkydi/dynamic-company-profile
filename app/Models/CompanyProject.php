<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyProject extends Model
{
    protected $table = 'company_projects';
    protected $fillable = [
        'client_name', 'project_name', 'image_url', 'description'
    ];
}
