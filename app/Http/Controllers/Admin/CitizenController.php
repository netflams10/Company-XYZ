<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CitizenController extends Controller
{
    private $service;

    public function __construct ()
    {
        $this->service = new \App\Services\CitizenService;
    }

    public function show ($id)
    {
        return response()->json($this->service->show($id));
    }

    public function store (\App\Http\Requests\Admin\CitizenRequest $request)
    {
        if ($this->service->store($request)) {
            return response()->json(['message' => 'Citizen Added.'], 201);
        }
        return response()->json(['message' => 'Citizen Added.'], 200);
    }

    public function search ($search)
    {
        return response()->json($this->service->search($search));
    }
}
