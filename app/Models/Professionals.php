<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Professionals extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $fillable = ['name', 'email', 'password', 'resume_path'];
    protected $hidden = ['password', 'remember_token'];
}
