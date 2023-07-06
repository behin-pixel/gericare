<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class MediaRelease extends Model implements Auditable
{
    use HasFactory, SoftDeletes;
    use \OwenIt\Auditing\Auditable;

   protected $fillable = [
        'title',
        'date',
        'source',
        'featured_image',
        'gallery_image',
        'reference_link',
        'status',
        'pdf'
    ];
}
