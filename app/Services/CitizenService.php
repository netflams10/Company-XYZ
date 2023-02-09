<?php

namespace App\Services;

use App\Repository\Repository;

class CitizenService extends Repository
{
    public function store ($request)
    {
        return $this->citizen()->store($request);
    }
}
