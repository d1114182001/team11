<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash; // Import the Hash class

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
                // \App\Models\User::factory(10)->create();
                $user = new User();
                $user->password = Hash::make('1234');
                $user->email = 'appleA@gmail.com';
                $user->name = 'Admin';
                $user->role = User::ROLE_ADMIN; // Add the role
                $user->save();
        
                $user = new User();
                $user->password = Hash::make('1234');
                $user->email = 'appleM@gmail.com';
                $user->role = User::ROLE_MANAGER; // Add the role
                $user->name = 'Manager';
                $user->save();
        
                $user = new User();
                $user->password = Hash::make('1234');
                $user->email = 'appleU@gmail.com';
                $user->role = User::ROLE_USER; // Add the role
                $user->name = 'User';
                $user->save();
        
                $this->call(EducationTableSeeder::class);

    }
}
