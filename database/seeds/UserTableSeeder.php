<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() == 0) {
            User::create([
                'name'     => 'Admin',
                'email'    => 'admin@czo.dev',
                'password' => '$2a$10$hSQukn3uquuvsYDEpGtRGOGcY81xD27Iwuo92lY6B7ODmlK3Kl5Zy',
            ]);
        }
    }
}
