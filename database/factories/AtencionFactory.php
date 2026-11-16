<?php

namespace Database\Factories;

use App\Models\Cita;
use Illuminate\Database\Eloquent\Factories\Factory;

class AtencionFactory extends Factory
{
    public function definition(): array
    {
        return [
            'cita_id'       => Cita::factory(),
            'diagnostico'   => fake()->randomElement([
                'Infección respiratoria aguda', 'Control prenatal normal', 'Gastritis',
                'Hipertensión arterial controlada', 'Caries dental',
                'Crecimiento y desarrollo normal',
            ]),
            'tratamiento'   => fake()->randomElement([
                'Paracetamol 500 mg cada 8 horas por 3 días', 'Reposo e hidratación',
                'Omeprazol 20 mg en ayunas por 14 días', 'Control en 30 días',
            ]),
            'observaciones' => fake()->optional()->sentence(),
        ];
    }
}