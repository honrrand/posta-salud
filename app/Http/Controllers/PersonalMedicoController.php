<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonalMedicoRequest;
use App\Http\Requests\UpdatePersonalMedicoRequest;
use App\Models\PersonalMedico;
use Illuminate\Http\Request;

class PersonalMedicoController extends Controller
{
    public function index(Request $request)
    {
        $buscar       = trim($request->input('buscar', ''));
        $especialidad = $request->input('especialidad');
        $estado       = $request->input('estado', 'activos');

        $personal = PersonalMedico::query()
            ->deEspecialidad($especialidad)
            ->when($estado === 'activos', fn ($q) => $q->activos())
            ->when($estado === 'inactivos', fn ($q) => $q->where('activo', false))
            ->when($buscar, function ($q, $buscar) {
                $q->where(function ($q) use ($buscar) {
                    $q->where('apellidos', 'ilike', "%$buscar%")
                      ->orWhere('dni', 'like', "$buscar%")
                      ->orWhere('colegiatura', 'like', "$buscar%");
                });
            })
            ->withCount('citas')
            ->orderBy('apellidos')
            ->paginate(10)
            ->withQueryString();

        return view('personal-medico.index',
            compact('personal', 'buscar', 'especialidad', 'estado'));
    }

    public function create()
    {
        //
    }

    public function store(StorePersonalMedicoRequest $request)
    {
        //
    }

    public function show(PersonalMedico $personalMedico)
    {
        //
    }

    public function edit(PersonalMedico $personalMedico)
    {
        //
    }

    public function update(UpdatePersonalMedicoRequest $request, PersonalMedico $personalMedico)
    {
        //
    }
}