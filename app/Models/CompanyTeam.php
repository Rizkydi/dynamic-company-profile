<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyTeam extends Model
{
    protected $table = 'company_teams';
    protected $fillable = [
        'name', 'image_url'
    ];
}
