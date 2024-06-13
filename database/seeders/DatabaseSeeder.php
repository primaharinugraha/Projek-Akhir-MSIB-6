<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Finance;
use App\Models\Profile;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        $admin = User::create([
            'email' => 'admin@example.com',
            'password' => '123',
            'role' => 'admin',
        ]);

        $premium = User::create([
            'email' => 'premium@example.com',
            'password' => '123',
            'role' => 'member',
        ]);

        $non_premium = User::create([
            'email' => 'nonpremium@example.com',
            'password' => '123',
            'role' => 'member',
        ]);

        $users = User::all();
        foreach($users as $user){
            $user->profile()->save(Profile::factory()->make());
        }

        $users = User::all();
        foreach($users as $user){
            $user->finances()->saveMany(Finance::factory(random_int(50,100))->make());
        }

        $premium->profile()->update(['premium' => true]);

        $non_premium->profile()->update(['premium' => false]);
    }
}
