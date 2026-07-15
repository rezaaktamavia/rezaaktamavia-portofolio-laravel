<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'path_trailer',
        'about',
        'thumbnail',
        'teacher_id',
        'category_id',
    ];

    // Relasi ke Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relasi ke Teacher
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    // Relasi ke CourseVideo
    public function courseVideos()
    {
        return $this->hasMany(CourseVideo::class);
    }

    // Relasi ke SubscribeTransaction
    public function subscribeTransactions()
    {
        return $this->hasMany(SubscribeTransaction::class);
    }

    // Untuk Route Model Binding pakai slug
    public function getRouteKeyName()
    {
        return 'slug';
    }
}