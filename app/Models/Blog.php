<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    
    // Disable automatic timestamps
    public $timestamps = false;
    
    protected $fillable = ['title', 'image', 'link', 'published_date'];
}