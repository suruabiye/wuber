<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Driver extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
//    protected $table = 'drivers';
    protected $fillable = [
        'country_id','first_name','last_name','phone_number','phone_with_code','email',
        'password','gender','licence_number','date_of_birth','currency','status'
    ];
}
