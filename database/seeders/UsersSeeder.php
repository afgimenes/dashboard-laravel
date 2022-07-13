<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Anderson Fagundes Gimenes',
            'email' => 'anderson.gimenes@selecty.com.br',
            'password' => bcrypt('12345678'),
        ]);
    }
}
