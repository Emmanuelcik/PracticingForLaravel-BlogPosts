<?php
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Emmanuel",
            "email" => "correo@correo.com",
            "password" => bcrypt("12345678"),
        ]);
    }
}
