<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'a',
        'b',
        'c',
        'd',
        'answer',
        'field_id',
        'status'
    ];

    public function field()
    {
        return $this->belongsTo(Field::class);
    }

    public function packageQuestion()
    {
        return $this->hasMany(PackageQuestion::class);
    }
}
