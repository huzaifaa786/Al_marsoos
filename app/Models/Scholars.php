<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholars extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'email',
        'mobileno',
        'qualification',
        'experience',
        'description',
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
