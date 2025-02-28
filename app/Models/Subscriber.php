<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;

    // Specify the table name if it's different from the model name
    protected $table = 'subscribers';

    // Specify the primary key if it's different from 'id'
    protected $primaryKey = 'id';

    // Define fillable fields to allow mass assignment
    protected $fillable = [
        'name',
        'email',
        'phone',
        'verified',
        'verification_token',
    ];

    // Define hidden fields (optional)
    protected $hidden = [
        'verification_token',
    ];

    // Define casts for fields (optional)
    protected $casts = [
        'verified' => 'boolean',
    ];
}