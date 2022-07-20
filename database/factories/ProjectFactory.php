<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    protected $model = \App\Models\Project::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'project_name'=> fake()->address(),
            'price'=> fake()->numberBetween(int1:1000000000,int2:90000000000),
            'source'=> fake()->imageUrl(category:'building'),
            'creator'=> fake()->numberBetween(int1:1,int2:3),
            'project_description'=> fake()->text(maxNbChars:200),
        ];
    }
}
