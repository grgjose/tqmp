<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Usertype;
use Database\Factories\UsertypeFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /**
         * User Creation
         */

        //

            //Admins

            User::factory()->create([
                'usertype' => 1,
                'fname' => 'George Louis',
                'mname' => 'Martinez',
                'lname' => 'Jose',
                'ext' => '',
                'email' => 'georgelouisjose@gmail.com',
                'user_pic' => '2x2.jpg',
                'status' => 'active',
                'password' => Hash::make('password')
            ]);

            User::factory()->create([
                'usertype' => 1,
                'fname' => 'Geneva May',
                'mname' => '',
                'lname' => 'Garcia',
                'ext' => '',
                'email' => 'genevagarcia0704@gmail.com',
                'user_pic' => 'default.png',
                'status' => 'active',
                'password' => Hash::make('password')
            ]);

            // Sales Rep

            User::factory()->create([
                'usertype' => 2,
                'fname' => 'John',
                'mname' => 'Richard',
                'lname' => 'Lopez',
                'ext' => '',
                'email' => 'johnrichardlopez@gmail.com',
                'user_pic' => 'default.png',
                'status' => 'active',
                'password' => Hash::make('password')
            ]);

            // Customers

            User::factory()->create([
                'usertype' => 3,
                'fname' => 'John',
                'mname' => '',
                'lname' => 'Doe',
                'ext' => '',
                'email' => 'johndoe@gmail.com',
                'user_pic' => 'default.png',
                'status' => 'active',
                'password' => Hash::make('password')
            ]);

            User::factory()->create([
                'usertype' => 3,
                'fname' => 'Sam',
                'mname' => '',
                'lname' => 'Pah',
                'ext' => '',
                'email' => 'sampah@gmail.com',
                'user_pic' => 'default.png',
                'status' => 'registered',
                'password' => Hash::make('password')
            ]);


        //

        /**
         * User Types
         */

        //

            Usertype::factory()->create([
                'title' => 'Admin',
                'access' => '0xFFFF',
            ]);

            Usertype::factory()->create([
                'title' => 'Sales',
                'access' => '0xFFFF',
            ]);

            Usertype::factory()->create([
                'title' => 'Client',
                'access' => '0xFFFF',
            ]);

        //

    }
}
