<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Testimonial extends Model implements Auditable
{
    use HasFactory, SoftDeletes;
    use \OwenIt\Auditing\Auditable;
   protected $fillable = [
        'title',
        'date',
        'description',
        'designation',
        'photo',
        'given_by',
        'status',
        'type',
        'video_link'
    ];
}
