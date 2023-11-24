<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emails_newsletter extends Model
{
    use HasFactory;
    protected $fillable =[
        'email',
    ];
}
