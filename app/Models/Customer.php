<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use HasFactory;
    protected $guard = 'customer';
    protected $table = "customers";
    protected $fillable = [
      "user_name",
      "password",
      "first_name",
      "last_name",
      "gender",
      "birth_date",
      "address",
      "email",
      "phone_number",
      "register"
    ];
    protected $hidden = [
        'password',
        'api_token',
    ];
}
