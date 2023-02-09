<?php

namespace App\Repository;

abstract class Repository
{
    public function citizen ()
    {
        return new \App\Repository\Models\CitizenRepository;
    }

    public function lga ()
    {
        return new \App\Repository\Models\LGARepository;
    }

    public function state ()
    {
        return new \App\Repository\Models\StateRepository;
    }

    public function user ()
    {
        return new \App\Repository\Models\UserRepository;
    }

    public function ward ()
    {
        return new \App\Repository\Models\Ward;
    }
}
