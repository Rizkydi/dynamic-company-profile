<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyExcellence extends Model
{
    protected $table = 'company_excellences';
    protected $fillable = [
        'title', 'description', 'image_url'
    ];
}
