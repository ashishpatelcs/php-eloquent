<?php

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name', 'email', 'password', 'userimage'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];

    public function todos()
    {
        return $this->hasMany('Todo');
    }
}
