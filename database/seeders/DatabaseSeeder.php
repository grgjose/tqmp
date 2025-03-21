<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductImage;
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

        /**
         * Sample Product Categories
         */

        //

            ProductCategory::factory()->create([
                'category' => 'Door Closers and Floor Hinges',
                'description' => 'Door closers and floor hinges are hardware that is used for all doors with a self-closing feature.'
            ]);

            ProductCategory::factory()->create([
                'category' => 'Patch Fittings',
                'description' => 'Patch Fittings is a accessories to make a frameless door that is usually seen at all facilities like malls.'
            ]);
            
            ProductCategory::factory()->create([
                'category' => 'Handles',
                'description' => 'Glass doors with a specific handle to a specific door to be using.'
            ]);
            
            ProductCategory::factory()->create([
                'category' => 'Shower Hinges',
                'description' => 'Shower hinges is usually applied at shower enclosure can be swing push and pull in 90 degree.'
            ]);

            ProductCategory::factory()->create([
                'category' => 'Shower Glass Clips',
                'description' => 'Shower glass clips usually used in fix panel for a shower enclosure but most of the installer and fabricator use it in other applications such as railings with a support of stainless tube.'
            ]);

            ProductCategory::factory()->create([
                'category' => 'Sliding Shower Enclosure',
                'description' => 'Shower enclosure usually seen in swing, we also have sliding function to space value to a minimal places.'
            ]);

            ProductCategory::factory()->create([
                'category' => 'Ladder',
                'description' => 'Ladder safety begins with the selection of the proper ladder for the job includes inspection, setup, proper climbing and standing, proper use, care and storage.'
            ]);

            ProductCategory::factory()->create([
                'category' => 'Jalouplus',
                'description' => 'Jalouplus offers style and functionality. Water penetration resistance, can be used in air conditioned area. Provides the benefits of a glass louver window but now with impenetrable security.'
            ]);

        //

        /**
         * Sample Products
         */

        //

            Product::factory()->create([
                'name' => 'GSM-0060',
                'display_name' => 'Thore Door Closer Model GSM-0060',
                'description' => 'Thore Door Closer Model GSM-0060',
                'category_id' => 1,
                'brand' => 'Thore',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 1,
                'filename' => 'gsm-0060.jpg',
            ]);

            Product::factory()->create([
                'name' => 'GSM-0052',
                'display_name' => 'Thore Door Closer Model GSM-0052',
                'description' => 'Thore Door Closer Model GSM-0052',
                'category_id' => 1,
                'brand' => 'Thore',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            Product::factory()->create([
                'name' => 'GSM-0038',
                'display_name' => 'Thore Door Closer Model GSM-0038',
                'description' => 'Thore Door Closer Model GSM-0038',
                'category_id' => 1,
                'brand' => 'Thore',
                'status' => 'active',
                'price' => '1500.00',
            ]);

        //


    }
}
