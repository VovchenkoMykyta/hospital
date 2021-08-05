<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    protected $fillable = ['name', 'password', 'email'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
