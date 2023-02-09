<?php

namespace App\Repository\Models;

class CitizenRepository
{
    public function __construct ()
    {
        $this->model = new \App\Models\Citizen;
    }

    public function store ($request)
    {
        return $this->model->create([
            'full_name' => $request->full_name,
            'gender' => $request->gender,
            'address' => $request->address,
            'phone'   => $request->phone,
            'ward_id' => $request->ward_id,
        ]);
    }

}
