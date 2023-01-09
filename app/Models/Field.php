<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status'
    ];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function packageQuestion()
    {
        return $this->hasMany(PackageQuestion::class);
    }
}
