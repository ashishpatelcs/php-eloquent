<?php

require "bootstrap.php";

$user = User::Create([
    'name' => "Ashish Patel",
    'email' => "ashish.tripleclicks@gmail.com",
    'password' => password_hash("1234", PASSWORD_BCRYPT)
]);

$todos = $user->todos()->create([
    'todo' => "Working with Eloquent With PHP",
    'category' => "eloquent",
    'description' => "Testing the work using eloquent"
]);

print_r($todos);