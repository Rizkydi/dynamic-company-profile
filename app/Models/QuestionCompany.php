<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class QuestionCompany extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'body', 'phone_number', 'email', 'status'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(user::class);
    }
}
