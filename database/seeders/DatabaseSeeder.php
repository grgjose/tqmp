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

            ProductImage::factory()->create([
                'product_id' => 2,
                'filename' => 'gsm-0052.jpg',
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

            ProductImage::factory()->create([
                'product_id' => 3,
                'filename' => 'gsm-0038.jpg',
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

            ProductImage::factory()->create([
                'product_id' => 3,
                'filename' => 'gsm-0038.jpg',
            ]);

            Product::factory()->create([
                'name' => 'ABLOY-DC420',
                'display_name' => 'Abloy Door Closer Model DC420',
                'description' => 'Abloy Door Closer Model DC420',
                'category_id' => 1,
                'brand' => 'Abloy',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 4,
                'filename' => 'abloy dc420.jpg',
            ]);

            Product::factory()->create([
                'name' => 'ABLOY-DC477',
                'display_name' => 'Abloy Door Closer Model DC477',
                'description' => 'Abloy Door Closer Model DC477',
                'category_id' => 1,
                'brand' => 'Abloy',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 5,
                'filename' => 'abloy dc477.jpg',
            ]);

            
            Product::factory()->create([
                'name' => 'YFS-923',
                'display_name' => 'Yale Door Closer Model YFS-923',
                'description' => 'Yale Door Closer Model YFS-923',
                'category_id' => 1,
                'brand' => 'Yale',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 6,
                'filename' => 'yfs923.jpg',
            ]);

            Product::factory()->create([
                'name' => 'YFS-9334',
                'display_name' => 'Yale Door Closer Model YFS-9334',
                'description' => 'Yale Door Closer Model YFS-9334',
                'category_id' => 1,
                'brand' => 'Yale',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 7,
                'filename' => 'yfs9334.jpg',
            ]);

            Product::factory()->create([
                'name' => 'YFS-9003',
                'display_name' => 'Yale Door Closer Model YFS-9003',
                'description' => 'Yale Door Closer Model YFS-9003',
                'category_id' => 1,
                'brand' => 'Yale',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 8,
                'filename' => 'yfs9003.jpg',
            ]);

            Product::factory()->create([
                'name' => 'YTDC854',
                'display_name' => 'Yale Door Closer Model YTDC854',
                'description' => 'Yale Door Closer Model YTDC854',
                'category_id' => 1,
                'brand' => 'Yale',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 9,
                'filename' => 'ytdc854.jpg',
            ]);

            Product::factory()->create([
                'name' => 'GSM-0039',
                'display_name' => 'Thore Patch Fitting Model GSM-0039',
                'description' => 'Thore Patch Fitting Model GSM-0039',
                'category_id' => 2,
                'brand' => 'Thore',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 10,
                'filename' => 'gsm-0039.jpg',
            ]);

            Product::factory()->create([
                'name' => 'GSM-0050',
                'display_name' => 'Thore Patch Fitting Model GSM-0050',
                'description' => 'Thore Patch Fitting Model GSM-0050',
                'category_id' => 2,
                'brand' => 'Thore',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 11,
                'filename' => 'gsm-0050.jpg',
            ]);

            Product::factory()->create([
                'name' => 'GSM-0054',
                'display_name' => 'Thore Patch Fitting Model GSM-0054',
                'description' => 'Thore Patch Fitting Model GSM-0054',
                'category_id' => 2,
                'brand' => 'Thore',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 12,
                'filename' => 'gsm-0054.jpg',
            ]);

            Product::factory()->create([
                'name' => 'GSM-0055',
                'display_name' => 'Thore Patch Fitting Model GSM-0055',
                'description' => 'Thore Patch Fitting Model GSM-0055',
                'category_id' => 2,
                'brand' => 'Thore',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 13,
                'filename' => 'gsm-0055.jpg',
            ]);

            Product::factory()->create([
                'name' => 'GSM-0056',
                'display_name' => 'Thore Patch Fitting Model GSM-0056',
                'description' => 'Thore Patch Fitting Model GSM-0056',
                'category_id' => 2,
                'brand' => 'Thore',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 14,
                'filename' => 'gsm-0056.jpg',
            ]);

            Product::factory()->create([
                'name' => 'GSM-0057',
                'display_name' => 'Thore Patch Fitting Model GSM-0057',
                'description' => 'Thore Patch Fitting Model GSM-0057',
                'category_id' => 2,
                'brand' => 'Thore',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 15,
                'filename' => 'gsm-0057.jpg',
            ]);

            Product::factory()->create([
                'name' => 'GSM-0058',
                'display_name' => 'Thore Patch Fitting Model GSM-0058',
                'description' => 'Thore Patch Fitting Model GSM-0058',
                'category_id' => 2,
                'brand' => 'Thore',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 16,
                'filename' => 'gsm-0058.jpg',
            ]);

            Product::factory()->create([
                'name' => 'GSM-0059',
                'display_name' => 'Thore Patch Fitting Model GSM-0059',
                'description' => 'Thore Patch Fitting Model GSM-0059',
                'category_id' => 2,
                'brand' => 'Thore',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 17,
                'filename' => 'gsm-0059.jpg',
            ]);

            Product::factory()->create([
                'name' => 'Abloy-985-35',
                'display_name' => 'Abloy Patch Fitting Model 985-35',
                'description' => 'Abloy Patch Fitting Model 985-35',
                'category_id' => 2,
                'brand' => 'Abloy',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 18,
                'filename' => 'abloy-985-35.jpg',
            ]);

            Product::factory()->create([
                'name' => 'Abloy-ABP010',
                'display_name' => 'Abloy Patch Fitting Model ABP010',
                'description' => 'Abloy Patch Fitting Model ABP010',
                'category_id' => 2,
                'brand' => 'Abloy',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 19,
                'filename' => 'abloy-abp010.jpg',
            ]);

            Product::factory()->create([
                'name' => 'Abloy-ACL010',
                'display_name' => 'Abloy Patch Fitting Model ACL010',
                'description' => 'Abloy Patch Fitting Model ACL010',
                'category_id' => 2,
                'brand' => 'Abloy',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 20,
                'filename' => 'abloy-acl010.jpg',
            ]);

            Product::factory()->create([
                'name' => 'Abloy-ACL020',
                'display_name' => 'Abloy Patch Fitting Model ACL020',
                'description' => 'Abloy Patch Fitting Model ACL020',
                'category_id' => 2,
                'brand' => 'Abloy',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 21,
                'filename' => 'abloy-acl020.jpg',
            ]);

            Product::factory()->create([
                'name' => 'Abloy-ADCS020',
                'display_name' => 'Abloy Patch Fitting Model ADCS020',
                'description' => 'Abloy Patch Fitting Model ADCS020',
                'category_id' => 2,
                'brand' => 'Abloy',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 22,
                'filename' => 'abloy-adcs020.jpg',
            ]);

            Product::factory()->create([
                'name' => 'Abloy-ADCS040',
                'display_name' => 'Abloy Patch Fitting Model ADCS040',
                'description' => 'Abloy Patch Fitting Model ADCS040',
                'category_id' => 2,
                'brand' => 'Abloy',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 23,
                'filename' => 'abloy-adcs040.jpg',
            ]);

            Product::factory()->create([
                'name' => 'Abloy-AOPS041L-R',
                'display_name' => 'Abloy Patch Fitting Model AOPS041L-R',
                'description' => 'Abloy Patch Fitting Model AOPS041L-R',
                'category_id' => 2,
                'brand' => 'Abloy',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 24,
                'filename' => 'abloy-aops041l-r.jpg',
            ]);

            Product::factory()->create([
                'name' => 'Abloy-ASCS030',
                'display_name' => 'Abloy Patch Fitting Model ASCS030',
                'description' => 'Abloy Patch Fitting Model ASCS030',
                'category_id' => 2,
                'brand' => 'Abloy',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 25,
                'filename' => 'abloy-ascs030.jpg',
            ]);

            Product::factory()->create([
                'name' => 'Abloy-ATLG502-15',
                'display_name' => 'Abloy Patch Fitting Model ATLG502-15',
                'description' => 'Abloy Patch Fitting Model ATLG502-15',
                'category_id' => 2,
                'brand' => 'Abloy',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 26,
                'filename' => 'abloy-atlg502-15.jpg',
            ]);

            Product::factory()->create([
                'name' => 'Abloy-ATP020',
                'display_name' => 'Abloy Patch Fitting Model ATP020',
                'description' => 'Abloy Patch Fitting Model ATP020',
                'category_id' => 2,
                'brand' => 'Abloy',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 27,
                'filename' => 'abloy-atp020.jpg',
            ]);

            Product::factory()->create([
                'name' => 'Abloy-ATPO030',
                'display_name' => 'Abloy Patch Fitting Model ATPO030',
                'description' => 'Abloy Patch Fitting Model ATPO030',
                'category_id' => 2,
                'brand' => 'Abloy',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 28,
                'filename' => 'abloy-atpo030.jpg',
            ]);

            Product::factory()->create([
                'name' => 'Abloy-ATPS035',
                'display_name' => 'Abloy Patch Fitting Model ATPS035',
                'description' => 'Abloy Patch Fitting Model ATPS035',
                'category_id' => 2,
                'brand' => 'Abloy',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 29,
                'filename' => 'abloy-atpo035.jpg',
            ]);

            Product::factory()->create([
                'name' => 'Abloy-ATPS040',
                'display_name' => 'Abloy Patch Fitting Model ATPS040',
                'description' => 'Abloy Patch Fitting Model ATPS040',
                'category_id' => 2,
                'brand' => 'Abloy',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 30,
                'filename' => 'abloy-ATPS040.jpg',
            ]);

            Product::factory()->create([
                'name' => 'THORE C-TYPE HANDLE',
                'display_name' => 'THORE C-TYPE HANDLE',
                'description' => 'THORE C-TYPE HANDLE',
                'category_id' => 3,
                'brand' => 'Thore',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 31,
                'filename' => 'THORE C-TYPE HANDLE.jpg',
            ]);

            Product::factory()->create([
                'name' => 'THORE H-TYPE HANDLE',
                'display_name' => 'THORE H-TYPE HANDLE',
                'description' => 'THORE H-TYPE HANDLE',
                'category_id' => 3,
                'brand' => 'Thore',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 32,
                'filename' => 'THORE H-TYPE HANDLE.jpg',
            ]);

            Product::factory()->create([
                'name' => 'THORE TOWEL BAR HANDLE',
                'display_name' => 'THORE TOWEL BAR HANDLE',
                'description' => 'THORE TOWEL BAR HANDLE',
                'category_id' => 3,
                'brand' => 'Thore',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 33,
                'filename' => 'THORE TOWEL BAR HANDLE.jpg',
            ]);

            Product::factory()->create([
                'name' => 'GSM0011',
                'display_name' => 'THORE GSM0011',
                'description' => 'THORE GSM0011',
                'category_id' => 4,
                'brand' => 'Thore',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 34,
                'filename' => 'thore gsm0011.jpg',
            ]);

            Product::factory()->create([
                'name' => 'GSM0012',
                'display_name' => 'THORE GSM0012',
                'description' => 'THORE GSM0012',
                'category_id' => 4,
                'brand' => 'Thore',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 35,
                'filename' => 'thore gsm0012.jpg',
            ]);

            Product::factory()->create([
                'name' => 'GSM0013',
                'display_name' => 'THORE GSM0013',
                'description' => 'THORE GSM0013',
                'category_id' => 4,
                'brand' => 'Thore',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 36,
                'filename' => 'thore gsm0013.jpg',
            ]);

            Product::factory()->create([
                'name' => 'GSM0014',
                'display_name' => 'THORE GSM0014',
                'description' => 'THORE GSM0014',
                'category_id' => 4,
                'brand' => 'Thore',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 37,
                'filename' => 'thore gsm0014.jpg',
            ]);

            Product::factory()->create([
                'name' => 'GSM0001',
                'display_name' => 'THORE GSM0001',
                'description' => 'THORE GSM0001',
                'category_id' => 5,
                'brand' => 'Thore',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 38,
                'filename' => 'thore gsm0001.jpg',
            ]);

            Product::factory()->create([
                'name' => 'GSM0002',
                'display_name' => 'THORE GSM0002',
                'description' => 'THORE GSM0002',
                'category_id' => 5,
                'brand' => 'Thore',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 39,
                'filename' => 'thore gsm0002.jpg',
            ]);

            Product::factory()->create([
                'name' => 'GSM0003',
                'display_name' => 'THORE GSM0003',
                'description' => 'THORE GSM0003',
                'category_id' => 5,
                'brand' => 'Thore',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 40,
                'filename' => 'thore gsm0003.jpg',
            ]);

            Product::factory()->create([
                'name' => 'GSM0004',
                'display_name' => 'THORE GSM0004',
                'description' => 'THORE GSM0004',
                'category_id' => 5,
                'brand' => 'Thore',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 41,
                'filename' => 'thore gsm0004.jpg',
            ]);

            Product::factory()->create([
                'name' => 'GSM-0102',
                'display_name' => 'THORE GSM-0102',
                'description' => 'THORE GSM-0102',
                'category_id' => 6,
                'brand' => 'Thore',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 42,
                'filename' => 'GSM-0102.jpg',
            ]);

            Product::factory()->create([
                'name' => 'GSM-0103',
                'display_name' => 'THORE GSM-0103',
                'description' => 'THORE GSM-0103',
                'category_id' => 6,
                'brand' => 'Thore',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 43,
                'filename' => 'GSM-0103.jpg',
            ]);

            Product::factory()->create([
                'name' => 'A - Type Ladder',
                'display_name' => 'A - Type Ladder',
                'description' => 'A - Type Ladder',
                'category_id' => 7,
                'brand' => 'Generic',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 44,
                'filename' => 'ladder.jpg',
            ]);

            Product::factory()->create([
                'name' => 'Jalouplus',
                'display_name' => 'Jalouplus',
                'description' => 'Jalouplus',
                'category_id' => 8,
                'brand' => 'Generic',
                'status' => 'active',
                'price' => '1500.00',
            ]);

            ProductImage::factory()->create([
                'product_id' => 45,
                'filename' => 'jalouplus.jpg',
            ]);

        //


    }
}
