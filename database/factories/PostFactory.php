<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Post;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'titulo'=>$this ->faker->sentence(6),
            'descripcion'=>$this ->faker->sentence(20),
            'imagen' =>$this ->faker->uuid() . 'png',
            'user_id'=> $this ->faker->randomElement(38,39,40,41)


        ];
    }
}
