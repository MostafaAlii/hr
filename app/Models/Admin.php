<?php
declare(strict_types=1);
namespace App\Models;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Admin extends Authenticatable {
    use HasFactory, Notifiable, HasApiTokens;
    protected $table = 'admins';
    protected $guard = 'admin';
    protected $fillable = ['name','email','password','status',];
    protected $hidden = ['password','remember_token',];
    protected $casts = ['email_verified_at' => 'datetime',];
}