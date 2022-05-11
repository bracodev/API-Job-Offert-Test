<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Joboffert;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobOffertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        Joboffert::truncate();

        // Five offers with 5 users assigning each one
        Joboffert::factory(5)
            ->create()
            ->each(function ($jobOffert) {
                // Create five user
                $user = User::factory(5)->create();

                // Associate the users to the new offer
                $jobOffert->users()->saveMany($user);
            });

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
