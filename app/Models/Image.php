<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static latest()
 * @method static create(string[] $array)
 */
class Image extends Model
{
    use HasFactory;
    protected $guarded = [];
}
