<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        User::truncate();

        User::create([
            'name' => 'Brayan Rincon',
            'email' => 'brayan262@mail.com',
            'tdni' => 'cid',
            'dni' => '12345678',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'), // password
            'remember_token' => Str::random(10),
        ]);

        // Ten users without associated offers.
        User::factory(10)->create();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
