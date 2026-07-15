<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubscribeTransaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'total_amount',
        'is_paid',
        'user_id',
        'course_id',       // Tambahkan ini
        'proof',
        'subscription_start_date',
    ];

    // Cast agar is_paid otomatis jadi boolean
    protected $casts = [
        'is_paid' => 'boolean',
        'subscription_start_date' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Tambahkan relasi ke Course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}