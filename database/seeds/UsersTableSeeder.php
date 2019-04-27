<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
                'name' => 'Magnu Windell',
                'email' => 'magnuwindell@gmail.com',
                'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Outro Usuario',
            'email' => 'outro@gmail.com',
            'password' => bcrypt('12345')
    ]);
    }
}
