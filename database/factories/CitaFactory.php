<?php

namespace Database\Factories;

use App\Models\Paciente;
use App\Models\PersonalMedico;
use Illuminate\Database\Eloquent\Factories\Factory;

class CitaFactory extends Factory
{
    public function definition(): array
    {
        $inicio = fake()->dateTimeBetween('+1 day', '+10 days');

        return [
            'paciente_id'        => Paciente::factory(),
            'personal_medico_id' => PersonalMedico::factory(),
            'fecha_hora'         => $inicio,
            'fecha_hora_fin'     => (clone $inicio)->modify('+30 minutes'),
            'motivo'             => fake()->randomElement([
                'Consulta general', 'Control prenatal', 'Fiebre y tos', 'Dolor abdominal',
            ]),
            'estado'             => 'pendiente',
        ];
    }
}