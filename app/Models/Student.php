<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Student extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    use HasFactory;

    protected $table = 'students';

    protected $primaryKey = 'student_osasid';

    protected $fillable = [
        'student_lname',
        'student_fname',
        'student_mi',
        'student_picture',
        'email',
        'google_id',
    ];

    protected $hidden = [
        'password',
    ];
}
