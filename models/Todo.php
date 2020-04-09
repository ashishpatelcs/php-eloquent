<?php

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [
        'todo', 'category', 'description'
    ];
}
