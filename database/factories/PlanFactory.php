<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        /* 
          $table->string('nombre')->nullable();
            $table->string('descripcion')->nullable();
            $table->double('precio',2)->nullable();
            $table->integer('duracion')->nullable();
        */
        return [
            'nombre' => $this->faker->name,
            'descripcion' => $this->faker->text,
            'precio' => $this->faker->randomFloat(2,0,100),
            'duracion' => $this->faker->numberBetween(1,10),
    
        ];
    }
}
