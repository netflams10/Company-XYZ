<?php

namespace App\Services;

use App\Repository\Repository;

class CitizenService extends Repository
{
    public function show ($id)
    {
        return $this->citizen()->show($id);
    }

    public function store ($request)
    {
        return $this->citizen()->store($request);
    }

    public function search ($search)
    {
        return $this->citizen()->search($search);
    }
}
