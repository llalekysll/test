<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'role_current_id',
        'role_request_id',
        'category_current',
        'expired_at',
        'order_info',
        'order_date',
        'experience_total',
        'experience_role',
        'experience_org',
        'category_request',
        'agreement_procedure',
        'agreement_personal_data',
        'given_at',
        'error',
        'accepted_at',
        'uploaded_at',
    ];
}
