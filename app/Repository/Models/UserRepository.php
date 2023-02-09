<?php

namespace App\Repository\Models;

class UserRepository
{
    public function __construct ()
    {
        $this->model = new \App\Models\User;
    }
}
