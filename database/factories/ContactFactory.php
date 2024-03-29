<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => 'hsmusayev@gmail.com',
            'name'  => 'Hasan',
            'host'  => 'smtp.gmail.com',
            'encryption' => 'tls',
            'port'       => '587',
            'username'   => 'hsmusayev@gmail.com',
            'password'   => '',
        ];
    }
}
