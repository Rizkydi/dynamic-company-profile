<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyFaq extends Model
{
    protected $table = 'company_faqs';
    protected $fillable = ['question', 'answer'];
    
}
