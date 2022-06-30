<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = ['id'];
    protected $table = 'users';
    public $timestamps = false;

    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }

    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }

    public function salary()
    {
        return $this->hasMany(Salary::class);
    }
}
