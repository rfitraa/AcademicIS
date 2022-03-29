<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';
    protected $primaryKey = 'id_student';
    use HasFactory;
    protected $fillable = [
        'Nim',
        'Name',
        'Class',
        'Major',
    ];
}
