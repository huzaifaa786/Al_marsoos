<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'duration',
        'description',
        'image',
        'start_time',
        'end_time',
    ];
    public function setImageAttribute($value)
    {
        $this->attributes['image'] = ImageHelper::saveImage($value, 'image');
    }
    public function getImageAttribute($value)
    {
       return asset($value);
    }
}
