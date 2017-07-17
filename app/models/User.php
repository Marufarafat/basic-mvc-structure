<?php

use Illuminate\Database\Eloquent\Model as Eloquent;



class User extends Eloquent{
    
    public $name;
    
    protected $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    
    protected $fillable = ['username', 'email', 'password'];
}