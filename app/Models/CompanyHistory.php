<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyHistory extends Model
{
    protected $table = 'company_histories';
    protected $fillable = [
        'year', 'title', 'description', 'image_url'
    ];
}
