<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\File>
 */
class FileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

                'filename' => '300l file',
                'user_id' => 1,
                'faculty' => "science",
                'course' =>'physics',
                'level' =>'300l',
                'poster' =>'posters/default.png',
                'file' =>fake()->sentence(), // password
                'description' =>fake()->sentence(100),

        ];
    }
}