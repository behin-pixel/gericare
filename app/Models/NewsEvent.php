<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsEvent extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'slug',
        'description',
        'image',
        'posted_by',
        'date',
        'gallery_image',
        'referral_link',
        'video_link'
    ];
    public function getCreatedAtAttribute($value) {
        return Carbon::parse($value)->format('d M Y');
    }
}
