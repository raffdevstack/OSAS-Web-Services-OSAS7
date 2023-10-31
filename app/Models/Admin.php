<?php



// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Notifications\Notifiable;
// use Laravel\Sanctum\HasApiTokens;

// class User extends Authenticatable

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Admin extends Authenticatable
{
    use HasFactory;
    // use AuthenticatableTrait;

    protected $table = 'admins';

    protected $primaryKey = 'admin_id';

    protected $fillable = [
        'admin_lname',
        'admin_fname',
        'admin_mi',
        'employee_id',
        'admin_contact',
        'email',
        'admin_image',
        'admin_sign',
        'admintype_id',
        'office_id',
        'position_id',
        'password',
        'google_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function adminType() {
        return $this->belongsTo(AdminType::class, 'admintype_id');
    }

    public function office() {
        return $this->belongsTo(Office::class, 'office_id');
    }
}
