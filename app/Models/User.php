<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Foundation\Auth\User as AuthenticatableUser;

class User extends Model implements Authenticatable
{
    use AuthenticableTrait;

    protected $table = 'USER'; //define nome da tabel
    protected $primaryKey = 'user_id'; //define chave primária
    protected $fillabel = ['nome','email','senha']; //Quais campos podem ser preenchidos em massa
}
