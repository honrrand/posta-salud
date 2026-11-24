<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonalMedicoRequest;
use App\Http\Requests\UpdatePersonalMedicoRequest;
use App\Models\PersonalMedico;
use Illuminate\Http\Request;

class PersonalMedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePersonalMedicoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PersonalMedico $personalMedico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PersonalMedico $personalMedico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePersonalMedicoRequest $request, PersonalMedico $personalMedico)
    {
        //
    }
}