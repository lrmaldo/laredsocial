<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PortadaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        /*  $table->string('titulo')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('imagen')->nullable(); */
        return [
            'titulo' => $this->faker->sentence,
            'descripcion' => $this->faker->sentence,
            'imagen' => $this->faker->imageUrl(1900, 1080),
        ];
           
       
        
    }
}
