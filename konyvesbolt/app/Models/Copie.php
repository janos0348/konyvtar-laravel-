<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copie extends Model
{    
    use HasFactory;
    
    protected $primaryKey = 'copy_id';
    protected $fillable = [
    'user_id',
    'book_id',
];
    
}
