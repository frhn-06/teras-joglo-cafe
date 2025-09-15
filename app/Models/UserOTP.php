<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;

class UserOTP extends Model
{
    protected $fillable = [
        'user_id',
        'otp_code',
        'expired_at'
    ];

    // untuk mengubah lazi loading menjadi eger loading karena akan ada relasi 
    protected $with = ['user'];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
