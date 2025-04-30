<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductSubCategory;
use App\Models\ProductImage;
use App\Models\ProductVariant;
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
                'category' => 'Bullet Proofing',
                'description' => ''
            ]);

            ProductCategory::factory()->create([
                'category' => 'Glass Manufacturing',
                'description' => ''
            ]);

            ProductCategory::factory()->create([
                'category' => 'Aluminum Manufacturing',
                'description' => ''
            ]);

            ProductCategory::factory()->create([
                'category' => 'Glass Processing',
                'description' => ''
            ]);

            ProductCategory::factory()->create([
                'category' => 'Other Products',
                'description' => ''
            ]);

            ProductSubCategory::factory()->create([
                'category_id' => 5,
                'category' => 'Door Closers and Floor Hinges',
                'description' => 'Door closers and floor hinges are hardware that is used for all doors with a self-closing feature.'
            ]);

            ProductSubCategory::factory()->create([
                'category_id' => 5,
                'category' => 'Patch Fittings',
                'description' => 'Patch Fittings is a accessories to make a frameless door that is usually seen at all facilities like malls.'
            ]);
            
            ProductSubCategory::factory()->create([
                'category_id' => 5,
                'category' => 'Handles',
                'description' => 'Glass doors with a specific handle to a specific door to be using.'
            ]);
            
            ProductSubCategory::factory()->create([
                'category_id' => 5,
                'category' => 'Shower Hinges',
                'description' => 'Shower hinges is usually applied at shower enclosure can be swing push and pull in 90 degree.'
            ]);

            ProductSubCategory::factory()->create([
                'category_id' => 5,
                'category' => 'Shower Glass Clips',
                'description' => 'Shower glass clips usually used in fix panel for a shower enclosure but most of the installer and fabricator use it in other applications such as railings with a support of stainless tube.'
            ]);

            ProductSubCategory::factory()->create([
                'category_id' => 5,
                'category' => 'Sliding Shower Enclosure',
                'description' => 'Shower enclosure usually seen in swing, we also have sliding function to space value to a minimal places.'
            ]);

            ProductSubCategory::factory()->create([
                'category_id' => 5,
                'category' => 'Ladder',
                'description' => 'Ladder safety begins with the selection of the proper ladder for the job includes inspection, setup, proper climbing and standing, proper use, care and storage.'
            ]);

            ProductSubCategory::factory()->create([
                'category_id' => 5,
                'category' => 'Jalouplus',
                'description' => 'Jalouplus offers style and functionality. Water penetration resistance, can be used in air conditioned area. Provides the benefits of a glass louver window but now with impenetrable security.'
            ]);

        //

        /**
         * Sample Products
         */

        //

            // Bullet Proofing Services (1-9)

                Product::factory()->create([
                    'name' => 'ARMOR-CAR',
                    'display_name' => 'Armoured Car',
                    'description' => 'Explore the key attributes that redefine what it means to travel securely without compromising on luxury, featuring our armoured Toyota Land Cruiser Series 300',
                    'category_id' => 1,
                    'brand' => 'MASTER',
                    'status' => 'active',
                    'price' => '120000',
                ]);

                ProductImage::factory()->create([
                    'product_id' => '1',
                    'filename' => 'ARMOR-CAR.jpg',
                    'isDeleted' => false,
                ]);

                Product::factory()->create([
                    'name' => 'RADIATOR-GRILL',
                    'display_name' => 'Radiator Grill',
                    'description' => "An armored vehicle's radiator grill is protected by a bumper or guard, reinforcing edges, safeguarding the radiator, and clearing debris or road-blocking vehicles.",
                    'category_id' => 1,
                    'brand' => 'MASTER',
                    'status' => 'active',
                    'price' => '60000',
                ]);

                ProductImage::factory()->create([
                    'product_id' => '2',
                    'filename' => 'RADIATOR-GRILL.png',
                    'isDeleted' => false,
                ]);

                Product::factory()->create([
                    'name' => 'GAS-TANK-COVER',
                    'display_name' => 'Gas Tank Cover',
                    'description' => "A thick gas tank cover is applied to ensure protection, preventing direct penetration of fragments and enhancing the safety and durability of the vehicle.",
                    'category_id' => 1,
                    'brand' => 'MASTER',
                    'status' => 'active',
                    'price' => '60000',
                ]);

                ProductImage::factory()->create([
                    'product_id' => '3',
                    'filename' => 'GAS-TANK-COVER.png',
                    'isDeleted' => false,
                ]);

                Product::factory()->create([
                    'name' => 'UPGRADED-SUSPENSION',
                    'display_name' => 'Upgraded Suspension',
                    'description' => "Armored vehicles require upgraded suspension and brakes to manage weight, ensuring reliable control, enhanced performance, and safe stopping.",
                    'category_id' => 1,
                    'brand' => 'MASTER',
                    'status' => 'active',
                    'price' => '60000',
                ]);

                ProductImage::factory()->create([
                    'product_id' => '4',
                    'filename' => 'UPGRADED-SUSPENSION.jpg',
                    'isDeleted' => false,
                ]);

                Product::factory()->create([
                    'name' => 'BATTERY-FUSE-BOX-COVER',
                    'display_name' => 'Battery & Fuse Box Cover',
                    'description' => "To ensure added durability, robust covers are available for the battery, fuse box, and gas tank, providing enhanced protection for critical vehicle components.",
                    'category_id' => 1,
                    'brand' => 'MASTER',
                    'status' => 'active',
                    'price' => '28000',
                ]);

                ProductImage::factory()->create([
                    'product_id' => '5',
                    'filename' => 'BATTERY-FUSE-BOX-COVER.jpg',
                    'isDeleted' => false,
                ]);

                Product::factory()->create([
                    'name' => 'RUN-FLAT-INSERT',
                    'display_name' => 'Run Flat Insert',
                    'description' => "Run-flat insert systems ensure mobility and safety in challenging situations, providing uncompromised performance, reliability, and peace of mind.",
                    'category_id' => 1,
                    'brand' => 'MASTER',
                    'status' => 'active',
                    'price' => '46000',
                ]);

                ProductImage::factory()->create([
                    'product_id' => '6',
                    'filename' => 'RUN-FLAT-INSERT.jpg',
                    'isDeleted' => false,
                ]);

                Product::factory()->create([
                    'name' => 'BACK-DOOR-PARTITION',
                    'display_name' => 'Back Door Partition',
                    'description' => "A bulletproof rear door partition provides extra security, reinforcing the back of your vehicle for enhanced defense and ensuring added protection for passengers and cargo.",
                    'category_id' => 1,
                    'brand' => 'MASTER',
                    'status' => 'active',
                    'price' => '28000',
                ]); 

                ProductImage::factory()->create([
                    'product_id' => '7',
                    'filename' => 'BACK-DOOR-PARTITION.jpg',
                    'isDeleted' => false,
                ]);

                Product::factory()->create([
                    'name' => 'BULLET-CATCHER',
                    'display_name' => 'Bullet Catcher',
                    'description' => "Ensures any penetrating fragments are contained, preventing them from passing through and enhancing overall vehicle safety and protection.",
                    'category_id' => 1,
                    'brand' => 'MASTER',
                    'status' => 'active',
                    'price' => '30000',
                ]); 

                ProductImage::factory()->create([
                    'product_id' => '8',
                    'filename' => 'BULLET-CATCHER.jpg',
                    'isDeleted' => false,
                ]);

                Product::factory()->create([
                    'name' => 'PREMIUM-LEATHER-SEATS',
                    'display_name' => 'Premium Leather Seats',
                    'description' => "Offering protection and satisfaction with premium leather seats through exceptional engineering, ensuring comfort inside your vehicle.",
                    'category_id' => 1,
                    'brand' => 'MASTER',
                    'status' => 'active',
                    'price' => '19000',
                ]);

                ProductImage::factory()->create([
                    'product_id' => '9',
                    'filename' => 'PREMIUM-LEATHER-SEATS.png',
                    'isDeleted' => false,
                ]);

            //

            // Glass Manufacturing (10-17)

                Product::factory()->create([
                    'name' => 'CLEAR-FLOAT-GLASS',
                    'display_name' => 'Clear Float Glass',
                    'description' => 'A Colourless and transparent glass that offers a very high level of light transmittance. Its edge displays a slight green tint and is available from 2mm to 19mm thick.',
                    'category_id' => 2,
                    'brand' => 'PIONEER',
                    'status' => 'active',
                    'price' => '121000',
                ]);

                ProductImage::factory()->create([
                    'product_id' => '10',
                    'filename' => 'CLEAR-FLOAT-GLASS.jpg',
                    'isDeleted' => false,
                ]);

                ProductVariant::factory()->create([
                    'product_id' => '10',
                    'key' => 'Size and Thickness',
                    'value' => '2MM (1/16") CLEAR FLOAT 36 X 48',
                    'price' => 200
                ]);

                ProductVariant::factory()->create([
                    'product_id' => '10',
                    'key' => 'Size and Thickness',
                    'value' => '2MM (1/16") CLEAR FLOAT 36 X 48',
                    'price' => 95.52
                ]);

                ProductVariant::factory()->create([
                    'product_id' => '10',
                    'key' => 'Size and Thickness',
                    'value' => '3MM (1/8") CLEAR FLOAT 48 X 72',
                    'price' => 191.04
                ]);

                ProductVariant::factory()->create([
                    'product_id' => '10',
                    'key' => 'Size and Thickness',
                    'value' => '5MM (3/16") CLEAR FLOAT 48 X 72',
                    'price' => 477.84
                ]);

                ProductVariant::factory()->create([
                    'product_id' => '10',
                    'key' => 'Size and Thickness',
                    'value' => '6MM (1/4") CLEAR FLOAT 36 X 84',
                    'price' => 501.9
                ]);

                ProductVariant::factory()->create([
                    'product_id' => '10',
                    'key' => 'Size and Thickness',
                    'value' => '6MM (1/4") CLEAR FLOAT 36 X 96',
                    'price' => 573.6
                ]);

                ProductVariant::factory()->create([
                    'product_id' => '10',
                    'key' => 'Size and Thickness',
                    'value' => '6MM (1/4") CLEAR FLOAT 48 X 72',
                    'price' => 573.6
                ]);

                ProductVariant::factory()->create([
                    'product_id' => '10',
                    'key' => 'Size and Thickness',
                    'value' => '6MM (1/4") CLEAR FLOAT 48 X 84',
                    'price' => 669.2 
                ]);

                ProductVariant::factory()->create([
                    'product_id' => '10',
                    'key' => 'Size and Thickness',
                    'value' => '6MM (1/4") CLEAR FLOAT 48 X 96',
                    'price' => 669.2 
                ]);

                ProductVariant::factory()->create([
                    'product_id' => '10',
                    'key' => 'Size and Thickness',
                    'value' => '6MM (1/4") CLEAR FLOAT 48 X 84',
                    'price' => 764.8 
                ]);

                ProductVariant::factory()->create([
                    'product_id' => '10',
                    'key' => 'Size and Thickness',
                    'value' => '6MM (1/4") CLEAR FLOAT 60 X 84',
                    'price' => 836.5
                ]);

                ProductVariant::factory()->create([
                    'product_id' => '10',
                    'key' => 'Size and Thickness',
                    'value' => '6MM (1/4") CLEAR FLOAT 60 X 96',
                    'price' => 956.0
                ]);

                ProductVariant::factory()->create([
                    'product_id' => '10',
                    'key' => 'Size and Thickness',
                    'value' => '6MM (1/4") CLEAR FLOAT 72 X 84',
                    'price' => 1003.8
                ]);

                ProductVariant::factory()->create([
                    'product_id' => '10',
                    'key' => 'Size and Thickness',
                    'value' => '6MM (1/4") CLEAR FLOAT 72 X 96',
                    'price' => 1147.2
                ]);

                ProductVariant::factory()->create([
                    'product_id' => '10',
                    'key' => 'Size and Thickness',
                    'value' => '6mm (1/4") Cool Silver Clear Float 48 x 72',
                    'price' => 645.6
                ]);

                ProductVariant::factory()->create([
                    'product_id' => '10',
                    'key' => 'Size and Thickness',
                    'value' => '6mm (1/4") Cool Silver Clear Float 48 x 84',
                    'price' => 753.2
                ]);

                Product::factory()->create([
                    'name' => 'TINTED-FLOAT-GLASS',
                    'display_name' => 'Tinted Float Glass',
                    'description' => 'A heat absorbing, transparent glass colored by adding such metals like cobalt, selenium, or iron. It reduces the amount of heat flowing into a room thereby decreasing the cooling load.',
                    'category_id' => 2,
                    'brand' => 'PIONEER',
                    'status' => 'active',
                    'price' => '122000',
                ]);

                ProductImage::factory()->create([
                    'product_id' => '11',
                    'filename' => 'TINTED-FLOAT-GLASS.jpg',
                    'isDeleted' => false,
                ]);

                Product::factory()->create([
                    'name' => 'ULTRA-CLEAR-FLOAT-GLASS',
                    'display_name' => 'Ultra Clear Float Glass',
                    'description' => 'This kind of glass provides extreme clarity for glazing applications requiring minimum impurities in vision, thereby allowing the most natural colors to stand out.',
                    'category_id' => 2,
                    'brand' => 'PIONEER',
                    'status' => 'active',
                    'price' => '122000',
                ]);

                ProductImage::factory()->create([
                    'product_id' => '12',
                    'filename' => 'ULTRA-CLEAR-FLOAT-GLASS.jpg',
                    'isDeleted' => false,
                ]);

                Product::factory()->create([
                    'name' => 'LOW-E-COATED-GLASS',
                    'display_name' => 'Low-E Coated Glass',
                    'description' => 'Low-e glass stands for low emissivity glass. This is a type of insulating glass which increases the energy efficiency of the windows by reducing the transfer of heat or cold through the glass.',
                    'category_id' => 2,
                    'brand' => 'PIONEER',
                    'status' => 'active',
                    'price' => '123000',
                ]);

                ProductImage::factory()->create([
                    'product_id' => '13',
                    'filename' => 'LOW-E-COATED-GLASS.jpg',
                    'isDeleted' => false,
                ]);

                Product::factory()->create([
                    'name' => 'REFLECTIVE-COATED-GLASS',
                    'display_name' => 'Reflective Coated Glass',
                    'description' => 'Reflective glass is essentially an ordinary float glass with a metallic coating that helps a building achieve a high standard of visual appeal besides reflecting a greater amount of heat than normal tinted float glass. It comes in variety of metallic colors such as gold, silver, bronze, blue and green.',
                    'category_id' => 2,
                    'brand' => 'PIONEER',
                    'status' => 'active',
                    'price' => '124000',
                ]);

                ProductImage::factory()->create([
                    'product_id' => '14',
                    'filename' => 'REFLECTIVE-COATED-GLASS.jpg',
                    'isDeleted' => false,
                ]);

                Product::factory()->create([
                    'name' => 'MIRROR',
                    'display_name' => 'Mirror',
                    'description' => 'Mirror are made from top of the line clear or tinted float glass, chemically treated with silver and coated to prevent peeling and corrosion. PFGMI are oven cured to maintain durability through the years.',
                    'category_id' => 2,
                    'brand' => 'PIONEER',
                    'status' => 'active',
                    'price' => '125000',
                ]);

                ProductImage::factory()->create([
                    'product_id' => '15',
                    'filename' => 'MIRROR.jpg',
                    'isDeleted' => false,
                ]);

                Product::factory()->create([
                    'name' => 'PATTERNED-GLASS',
                    'display_name' => 'Patterned Glass',
                    'description' => 'Patterned Glass is a kind of decorative translucent glass with embossed pattern on one surface. It is generally used where privacy or obscurity is desired, but light transmission is still important. This is used in commercial, residential, and specialty applications. The sheer simplicity of patterned glass makes it popular for interior design.',
                    'category_id' => 2,
                    'brand' => 'PIONEER',
                    'status' => 'active',
                    'price' => '126000',
                ]);

                ProductImage::factory()->create([
                    'product_id' => '16',
                    'filename' => 'PATTERNED-GLASS.jpg',
                    'isDeleted' => false,
                ]);

                Product::factory()->create([
                    'name' => 'WIRED-GLASS',
                    'display_name' => 'Wired Glass',
                    'description' => 'Wired glass is a type of glass wherein a wire mesh is inserted during production. It has an impact resistance similar to that of normal glass, but in case of breakage, the mesh retains the pieces of glass. This product is traditionally accepted as low-cost fire-resistant glass.',
                    'category_id' => 2,
                    'brand' => 'PIONEER',
                    'status' => 'active',
                    'price' => '127000',
                ]);

                ProductImage::factory()->create([
                    'product_id' => '17',
                    'filename' => 'WIRED-GLASS.jpg',
                    'isDeleted' => false,
                ]);

            //

            // Aluminum Manufacturing (18-28)

                Product::factory()->create([
                    'name' => 'ANGLE-SECTION',
                    'display_name' => 'Angle Sections',
                    'description' => 'Angle sections are versatile aluminum profiles used in various structural and architectural applications.',
                    'category_id' => 3,
                    'brand' => 'MASTER',
                    'status' => 'active',
                    'price' => '90000',
                ]);

                ProductImage::factory()->create([
                    'product_id' => '18',
                    'filename' => 'ANGLE-SECTOIN-01.jpg',
                    'isDeleted' => false,
                ]);

                Product::factory()->create([
                    'name' => 'STORE-FRONT-COMPONENTS',
                    'display_name' => 'Store Front Components',
                    'description' => 'Angle sections are versatile aluminum profiles used in various structural and architectural applications.',
                    'category_id' => 3,
                    'brand' => 'MASTER',
                    'status' => 'active',
                    'price' => '90000',
                ]);

                ProductImage::factory()->create([
                    'product_id' => '19',
                    'filename' => 'STORE-FRONT-COMPONENTS-01.jpg',
                    'isDeleted' => false,
                ]);

                ProductImage::factory()->create([
                    'product_id' => '19',
                    'filename' => 'STORE-FRONT-COMPONENTS-02.jpg',
                    'isDeleted' => false,
                ]);

                ProductImage::factory()->create([
                    'product_id' => '19',
                    'filename' => 'STORE-FRONT-COMPONENTS-03.jpg',
                    'isDeleted' => false,
                ]);

                ProductImage::factory()->create([
                    'product_id' => '19',
                    'filename' => 'STORE-FRONT-COMPONENTS-04.jpg',
                    'isDeleted' => false,
                ]);

                Product::factory()->create([
                    'name' => 'SLIDING-DOOR-SECTIONS',
                    'display_name' => 'Sliding Door Sections',
                    'description' => 'Sliding door sections are designed for smooth operation and modern aesthetics.',
                    'category_id' => 3,
                    'brand' => 'MASTER',
                    'status' => 'active',
                    'price' => '90000',
                ]);

                ProductImage::factory()->create([
                    'product_id' => '20',
                    'filename' => 'SLIDING-DOOR-SECTIONS-01.jpg',
                    'isDeleted' => false,
                ]);

                ProductImage::factory()->create([
                    'product_id' => '20',
                    'filename' => 'SLIDING-DOOR-SECTIONS-02.jpg',
                    'isDeleted' => false,
                ]);

                ProductImage::factory()->create([
                    'product_id' => '20',
                    'filename' => 'SLIDING-DOOR-SECTIONS-03.jpg',
                    'isDeleted' => false,
                ]);

                ProductImage::factory()->create([
                    'product_id' => '20',
                    'filename' => 'SLIDING-DOOR-SECTIONS-04.jpg',
                    'isDeleted' => false,
                ]);

                Product::factory()->create([
                    'name' => 'MISCELLANEOUS-SECTIONS',
                    'display_name' => 'Miscellaneous Sections',
                    'description' => 'Miscellaneous sections cater to unique and specialized aluminum profile needs.',
                    'category_id' => 3,
                    'brand' => 'MASTER',
                    'status' => 'active',
                    'price' => '90000',
                ]);

                ProductImage::factory()->create([
                    'product_id' => '21',
                    'filename' => 'MISCELLANEOUS-SECTIONS.jpg',
                    'isDeleted' => false,
                ]);

                Product::factory()->create([
                    'name' => 'SWING-DOOR-SECTIONS',
                    'display_name' => 'Swing Door Sections',
                    'description' => 'Swing door sections provide durability and style for residential and commercial spaces.',
                    'category_id' => 3,
                    'brand' => 'MASTER',
                    'status' => 'active',
                    'price' => '90000',
                ]);

                ProductImage::factory()->create([
                    'product_id' => '22',
                    'filename' => 'SWING-DOOR-SECTIONS-01.jpg',
                    'isDeleted' => false,
                ]);

                ProductImage::factory()->create([
                    'product_id' => '22',
                    'filename' => 'SWING-DOOR-SECTIONS-02.jpg',
                    'isDeleted' => false,
                ]);

                Product::factory()->create([
                    'name' => 'COUNTER-TRIM-SECTIONS',
                    'display_name' => 'Counter Trim Sections',
                    'description' => 'Counter trim sections are designed for enhancing the aesthetics and functionality of counters.',
                    'category_id' => 3,
                    'brand' => 'MASTER',
                    'status' => 'active',
                    'price' => '90000',
                ]);

                ProductImage::factory()->create([
                    'product_id' => '23',
                    'filename' => 'COUNTER-TRIM-SECTIONS.jpg',
                    'isDeleted' => false,
                ]);

                Product::factory()->create([
                    'name' => 'YC-SECTIONS',
                    'display_name' => 'YC Sections',
                    'description' => 'YC sections are versatile profiles used in various structural and decorative applications.',
                    'category_id' => 3,
                    'brand' => 'MASTER',
                    'status' => 'active',
                    'price' => '90000',
                ]);

                ProductImage::factory()->create([
                    'product_id' => '24',
                    'filename' => 'YC-SECTIONS.jpg',
                    'isDeleted' => false,
                ]);

                Product::factory()->create([
                    'name' => 'VENT-SECTIONS',
                    'display_name' => 'Vent Sections',
                    'description' => 'Vent sections are designed for efficient airflow and ventilation in various applications.',
                    'category_id' => 3,
                    'brand' => 'MASTER',
                    'status' => 'active',
                    'price' => '90000',
                ]);

                ProductImage::factory()->create([
                    'product_id' => '25',
                    'filename' => 'VENT-SECTIONS.jpg',
                    'isDeleted' => false,
                ]);

                Product::factory()->create([
                    'name' => 'FLAT-BAR-SECTIONS',
                    'display_name' => 'Flat Bar Sections',
                    'description' => 'Flat bar sections are ideal for structural and decorative purposes in various industries.',
                    'category_id' => 3,
                    'brand' => 'MASTER',
                    'status' => 'active',
                    'price' => '90000',
                ]);

                ProductImage::factory()->create([
                    'product_id' => '26',
                    'filename' => 'FLAT-BAR-SECTIONS.jpg',
                    'isDeleted' => false,
                ]);

                Product::factory()->create([
                    'name' => 'COUNTER-NOSING-SECTION',
                    'display_name' => 'Counter Nosing Section',
                    'description' => 'Counter nosing sections provide a sleek finish and durability for counter edges.',
                    'category_id' => 3,
                    'brand' => 'MASTER',
                    'status' => 'active',
                    'price' => '90000',
                ]);

                ProductImage::factory()->create([
                    'product_id' => '27',
                    'filename' => 'COUNTER-NOSING-SECTION.jpg',
                    'isDeleted' => false,
                ]);

                Product::factory()->create([
                    'name' => 'MODEL898',
                    'display_name' => 'Model 898',
                    'description' => 'Angle sections are versatile aluminum profiles used in various structural and architectural applications.',
                    'category_id' => 3,
                    'brand' => 'MASTER',
                    'status' => 'active',
                    'price' => '90000',
                ]);

                ProductImage::factory()->create([
                    'product_id' => '28',
                    'filename' => 'MODEL898.jpg',
                    'isDeleted' => false,
                ]);

            //

            // Glass Processing (29-32)

                Product::factory()->create([
                    'name' => 'TEMPERED-GLASS',
                    'display_name' => 'Tempered Glass',
                    'description' => 'Fully tempered glass is a unique glazing material. It is about 3 to 5 times stronger than an ordinary or annealed glass of the same thickness and configuration.',
                    'category_id' => 4,
                    'brand' => 'PGPsi',
                    'status' => 'active',
                    'price' => '90000',
                ]);

                ProductImage::factory()->create([
                    'product_id' => '29',
                    'filename' => 'TEMPERED-GLASS.png',
                    'isDeleted' => false,
                ]);

                Product::factory()->create([
                    'name' => 'LAMINATED-GLASS',
                    'display_name' => 'Laminated Glass',
                    'description' => 'Laminated glass is a multi-functional glazing material that can be used in a variety of applications. It is manufactured by permanently bonding two or more glass panes with layers of polyvinyl butyral (PVB) interlayer, under heat and pressure to produce a single product.',
                    'category_id' => 4,
                    'brand' => 'PGPsi',
                    'status' => 'active',
                    'price' => '90000',
                ]);

                ProductImage::factory()->create([
                    'product_id' => '30',
                    'filename' => 'LAMINATED-GLASS.png',
                    'isDeleted' => false,
                ]);

                Product::factory()->create([
                    'name' => 'CURVED-TEMPERED-GLASS',
                    'display_name' => 'Curved Tempered Glass',
                    'description' => 'In the same manner with flat tempered glass, curved tempered glass is also resistant to mechanical stresses (bending, impact, etc.) and thermal stresses (temperature difference), without altering the properties of the basic product.',
                    'category_id' => 4,
                    'brand' => 'PGPsi',
                    'status' => 'active',
                    'price' => '90000',
                ]);

                ProductImage::factory()->create([
                    'product_id' => '31',
                    'filename' => 'CURVED-TEMPERED-GLASS.jpg',
                    'isDeleted' => false,
                ]);

                Product::factory()->create([
                    'name' => 'INSULATING-GLASS-UNIT',
                    'display_name' => 'Insulating Glass Unit (IGU)',
                    'description' => 'Insulating glass unit is a set of two or more lites of glass separated by air space and hermetically sealed to form a single unit. Its most important function is to improve the thermal performance of glass when used in architectural applications.',
                    'category_id' => 4,
                    'brand' => 'PGPsi',
                    'status' => 'active',
                    'price' => '90000',
                ]);

                ProductImage::factory()->create([
                    'product_id' => '32',
                    'filename' => 'INSULATING-GLASS-UNIT.png',
                    'isDeleted' => false,
                ]);

            //

            // Other Products - Door Closers and Floor Hinges (33-41)

                Product::factory()->create([
                    'name' => 'GSM-0060',
                    'display_name' => 'Thore Door Closer Model GSM-0060',
                    'description' => 'Thore Door Closer Model GSM-0060',
                    'category_id' => 5,
                    'sub_category_id' => 1,
                    'brand' => 'Thore',
                    'status' => 'active',
                    'price' => '958.00',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 33,
                    'filename' => 'GSM-0060.jpg',
                ]);

                Product::factory()->create([
                    'name' => 'GSM-0052',
                    'display_name' => 'Thore Door Closer Model GSM-0052',
                    'description' => 'Thore Door Closer Model GSM-0052',
                    'category_id' => 5,
                    'sub_category_id' => 1,
                    'brand' => 'Thore',
                    'status' => 'active',
                    'price' => '1210.00',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 34,
                    'filename' => 'GSM-0052.jpg',
                ]);
                
                Product::factory()->create([
                    'name' => 'GSM-0038',
                    'display_name' => 'Thore Door Closer Model GSM-0038',
                    'description' => 'Thore Door Closer Model GSM-0038',
                    'category_id' => 5,
                    'sub_category_id' => 1,
                    'brand' => 'Thore',
                    'status' => 'active',
                    'price' => '1300.00',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 35,
                    'filename' => 'GSM-0038.jpg',
                ]);

                Product::factory()->create([
                    'name' => 'ABLOY-DC420',
                    'display_name' => 'Abloy Door Closer Model DC420',
                    'description' => 'Abloy Door Closer Model DC420',
                    'category_id' => 5,
                    'sub_category_id' => 1,
                    'brand' => 'Abloy',
                    'status' => 'active',
                    'price' => '2111.00',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 36,
                    'filename' => 'ABLOY-DC420.jpg',
                ]);

                Product::factory()->create([
                    'name' => 'ABLOY-DC477',
                    'display_name' => 'Abloy Door Closer Model DC477',
                    'description' => 'Abloy Door Closer Model DC477',
                    'category_id' => 5,
                    'sub_category_id' => 1,
                    'brand' => 'Abloy',
                    'status' => 'active',
                    'price' => '1860.09',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 37,
                    'filename' => 'ABLOY-DC477.jpg',
                ]);

                Product::factory()->create([
                    'name' => 'YFS-923',
                    'display_name' => 'Yale Door Closer Model YFS-923',
                    'description' => 'Yale Door Closer Model YFS-923',
                    'category_id' => 5,
                    'sub_category_id' => 1,
                    'brand' => 'Yale',
                    'status' => 'active',
                    'price' => '3100.00',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 38,
                    'filename' => 'YFS-923.jpg',
                ]);

                Product::factory()->create([
                    'name' => 'YFS-934',
                    'display_name' => 'Yale Door Closer Model YFS-934',
                    'description' => 'Yale Door Closer Model YFS-934',
                    'category_id' => 5,
                    'sub_category_id' => 1,
                    'brand' => 'Yale',
                    'status' => 'active',
                    'price' => '1899.00',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 39,
                    'filename' => 'YFS-934.jpg',
                ]);

                Product::factory()->create([
                    'name' => 'YFS-8003',
                    'display_name' => 'Yale Door Closer Model YFS-8003',
                    'description' => 'Yale Door Closer Model YFS-8003',
                    'category_id' => 5,
                    'sub_category_id' => 1,
                    'brand' => 'Yale',
                    'status' => 'active',
                    'price' => '1499.50',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 40,
                    'filename' => 'YFS-8003.jpg',
                ]);

                Product::factory()->create([
                    'name' => 'YTDC854',
                    'display_name' => 'Yale Overhead Door Closer Model YTDC854',
                    'description' => 'Yale Overhead Door Closer Model YTDC854',
                    'category_id' => 5,
                    'sub_category_id' => 1,
                    'brand' => 'Yale',
                    'status' => 'active',
                    'price' => '1499.00',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 41,
                    'filename' => 'YTDC854.jpg',
                ]);

            //

            // Other Products - Patch Fittings (42-62)

                Product::factory()->create([
                    'name' => 'GSM-0039',
                    'display_name' => 'Thore Patch Fitting Model GSM-0039',
                    'description' => 'Thore Patch Fitting Model GSM-0039',
                    'category_id' => 5,
                    'sub_category_id' => 2,
                    'brand' => 'Thore',
                    'status' => 'active',
                    'price' => '1279.00',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 42,
                    'filename' => 'GSM-0039.jpg',
                ]);

                Product::factory()->create([
                    'name' => 'GSM-0050',
                    'display_name' => 'Thore Patch Fitting Model GSM-0050',
                    'description' => 'Thore Patch Fitting Model GSM-0050',
                    'category_id' => 5,
                    'sub_category_id' => 2,
                    'brand' => 'Thore',
                    'status' => 'active',
                    'price' => '1599.50',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 43,
                    'filename' => 'GSM-0050.jpg',
                ]);

                Product::factory()->create([
                    'name' => 'GSM-0054',
                    'display_name' => 'Thore Patch Fitting Model GSM-0054',
                    'description' => 'Thore Patch Fitting Model GSM-0054',
                    'category_id' => 5,
                    'sub_category_id' => 2,
                    'brand' => 'Thore',
                    'status' => 'active',
                    'price' => '1500.00',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 44,
                    'filename' => 'GSM-0054.jpg',
                ]);

                Product::factory()->create([
                    'name' => 'GSM-0055',
                    'display_name' => 'Thore Patch Fitting Model GSM-0055',
                    'description' => 'Thore Patch Fitting Model GSM-0055',
                    'category_id' => 5,
                    'sub_category_id' => 2,
                    'brand' => 'Thore',
                    'status' => 'active',
                    'price' => '1699.50',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 45,
                    'filename' => 'GSM-0055.jpg',
                ]);

                Product::factory()->create([
                    'name' => 'GSM-0056',
                    'display_name' => 'Thore Patch Fitting Model GSM-0056',
                    'description' => 'Thore Patch Fitting Model GSM-0056',
                    'category_id' => 5,
                    'sub_category_id' => 2,
                    'brand' => 'Thore',
                    'status' => 'active',
                    'price' => '1520.99',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 46,
                    'filename' => 'GSM-0056.jpg',
                ]);

                Product::factory()->create([
                    'name' => 'GSM-0057',
                    'display_name' => 'Thore Patch Fitting Model GSM-0057',
                    'description' => 'Thore Patch Fitting Model GSM-0057',
                    'category_id' => 5,
                    'sub_category_id' => 2,
                    'brand' => 'Thore',
                    'status' => 'active',
                    'price' => '1699.01',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 47,
                    'filename' => 'GSM-0057.jpg',
                ]);

                Product::factory()->create([
                    'name' => 'GSM-0058',
                    'display_name' => 'Thore Patch Fitting Model GSM-0058',
                    'description' => 'Thore Patch Fitting Model GSM-0058',
                    'category_id' => 5,
                    'sub_category_id' => 2,
                    'brand' => 'Thore',
                    'status' => 'active',
                    'price' => '1500.00',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 48,
                    'filename' => 'GSM-0058.jpg',
                ]);

                Product::factory()->create([
                    'name' => 'GSM-0059',
                    'display_name' => 'Thore Patch Fitting Model GSM-0059',
                    'description' => 'Thore Patch Fitting Model GSM-0059',
                    'category_id' => 5,
                    'sub_category_id' => 2,
                    'brand' => 'Thore',
                    'status' => 'active',
                    'price' => '1299.00',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 49,
                    'filename' => 'GSM-0059.jpg',
                ]);

                Product::factory()->create([
                    'name' => 'ABLOY-985-35',
                    'display_name' => 'Abloy Patch Fitting Model 985-35',
                    'description' => 'Abloy Patch Fitting Model 985-35',
                    'category_id' => 5,
                    'sub_category_id' => 2,
                    'brand' => 'Abloy',
                    'status' => 'active',
                    'price' => '2699.50',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 50,
                    'filename' => 'ABLOY-985-35.jpg',
                ]);

                Product::factory()->create([
                    'name' => 'ABLOY-ABP-010',
                    'display_name' => 'Abloy Patch Fitting Model ABP-010',
                    'description' => 'Abloy Patch Fitting Model ABP-010',
                    'category_id' => 5,
                    'sub_category_id' => 2,
                    'brand' => 'Abloy',
                    'status' => 'active',
                    'price' => '3999.00',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 51,
                    'filename' => 'ABLOY-ABP-010.jpg',
                ]);

                Product::factory()->create([
                    'name' => 'ABLOY-ACL-010',
                    'display_name' => 'Abloy Patch Fitting Model ACL-010',
                    'description' => 'Abloy Patch Fitting Model ACL-010',
                    'category_id' => 5,
                    'sub_category_id' => 2,
                    'brand' => 'Abloy',
                    'status' => 'active',
                    'price' => '3899.50',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 52,
                    'filename' => 'ABLOY-ACL-010.jpg',
                ]);

                Product::factory()->create([
                    'name' => 'ABLOY-ACL-020',
                    'display_name' => 'Abloy Patch Fitting Model ACL-020',
                    'description' => 'Abloy Patch Fitting Model ACL-020',
                    'category_id' => 5,
                    'sub_category_id' => 2,
                    'brand' => 'Abloy',
                    'status' => 'active',
                    'price' => '1699.00',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 53,
                    'filename' => 'ABLOY-ACL-020.jpg',
                ]);

                Product::factory()->create([
                    'name' => 'ABLOY-ADCS-020',
                    'display_name' => 'Abloy Patch Fitting Model ADCS-020',
                    'description' => 'Abloy Patch Fitting Model ADCS-020',
                    'category_id' => 5,
                    'sub_category_id' => 2,
                    'brand' => 'Abloy',
                    'status' => 'active',
                    'price' => '1699.00',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 54,
                    'filename' => 'ABLOY-ADCS-020.jpg',
                ]);

                Product::factory()->create([
                    'name' => 'ABLOY-AOCS-040',
                    'display_name' => 'Abloy Patch Fitting Model AOCS-040',
                    'description' => 'Abloy Patch Fitting Model AOCS-040',
                    'category_id' => 5,
                    'sub_category_id' => 2,
                    'brand' => 'Abloy',
                    'status' => 'active',
                    'price' => '1599.00',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 55,
                    'filename' => 'ABLOY-AOCS-040.jpg',
                ]);

                Product::factory()->create([
                    'name' => 'ABLOY-AOPS-041L-R',
                    'display_name' => 'Abloy Patch Fitting Model AOPS041L-R',
                    'description' => 'Abloy Patch Fitting Model AOPS041L-R',
                    'category_id' => 5,
                    'sub_category_id' => 2,
                    'brand' => 'Abloy',
                    'status' => 'active',
                    'price' => '1422.00',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 56,
                    'filename' => 'ABLOY-AOPS-041L-R.jpg',
                ]);

                Product::factory()->create([
                    'name' => 'ABLOY-ASCS-030',
                    'display_name' => 'Abloy Patch Fitting Model ASCS-030',
                    'description' => 'Abloy Patch Fitting Model ASCS-030',
                    'category_id' => 5,
                    'sub_category_id' => 2,
                    'brand' => 'Abloy',
                    'status' => 'active',
                    'price' => '4999.00',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 57,
                    'filename' => 'ABLOY-ASCS-030.jpg',
                ]);

                Product::factory()->create([
                    'name' => 'ABLOY-ATLG-502-15',
                    'display_name' => 'Abloy Patch Fitting Model ATLG-502-15',
                    'description' => 'Abloy Patch Fitting Model ATLG-502-15',
                    'category_id' => 5,
                    'sub_category_id' => 2,
                    'brand' => 'Abloy',
                    'status' => 'active',
                    'price' => '3599.00',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 58,
                    'filename' => 'ABLOY-ATLG-502-15.jpg',
                ]);

                Product::factory()->create([
                    'name' => 'ABLOY-ATP-020',
                    'display_name' => 'Abloy Patch Fitting Model ATP-020',
                    'description' => 'Abloy Patch Fitting Model ATP-020',
                    'category_id' => 5,
                    'sub_category_id' => 2,
                    'brand' => 'Abloy',
                    'status' => 'active',
                    'price' => '1259.00',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 59,
                    'filename' => 'ABLOY-ATP-020.jpg',
                ]);

                Product::factory()->create([
                    'name' => 'ABLOY-ATPO-030',
                    'display_name' => 'Abloy Patch Fitting Model ATPO-030',
                    'description' => 'Abloy Patch Fitting Model ATPO-030',
                    'category_id' => 5,
                    'sub_category_id' => 2,
                    'brand' => 'Abloy',
                    'status' => 'active',
                    'price' => '1500.00',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 60,
                    'filename' => 'ABLOY-ATPO-030.jpg',
                ]);

                Product::factory()->create([
                    'name' => 'ABLOY-ATPS-035',
                    'display_name' => 'Abloy Patch Fitting Model ATPS-035',
                    'description' => 'Abloy Patch Fitting Model ATPS-035',
                    'category_id' => 5,
                    'sub_category_id' => 2,
                    'brand' => 'Abloy',
                    'status' => 'active',
                    'price' => '1699.99',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 61,
                    'filename' => 'ABLOY-ATPS-035.jpg',
                ]);

                Product::factory()->create([
                    'name' => 'ABLOY-ATPS-040',
                    'display_name' => 'Abloy Patch Fitting Model ATPS-040',
                    'description' => 'Abloy Patch Fitting Model ATPS-040',
                    'category_id' => 5,
                    'sub_category_id' => 2,
                    'brand' => 'Abloy',
                    'status' => 'active',
                    'price' => '1299.00',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 62,
                    'filename' => 'ABLOY-ATPS-040.jpg',
                ]);

            //
            
            // Other Products - Handles (63-65)

                Product::factory()->create([
                    'name' => 'THORE C-TYPE HANDLE',
                    'display_name' => 'THORE C-TYPE HANDLE',
                    'description' => 'THORE C-TYPE HANDLE',
                    'category_id' => 5,
                    'sub_category_id' => 3,
                    'brand' => 'Thore',
                    'status' => 'active',
                    'price' => '1699.00',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 63,
                    'filename' => 'THORE C-TYPE HANDLE.jpg',
                ]);

                Product::factory()->create([
                    'name' => 'THORE H-TYPE HANDLE',
                    'display_name' => 'THORE H-TYPE HANDLE',
                    'description' => 'THORE H-TYPE HANDLE',
                    'category_id' => 5,
                    'sub_category_id' => 3,
                    'brand' => 'Thore',
                    'status' => 'active',
                    'price' => '1599.00',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 64,
                    'filename' => 'THORE H-TYPE HANDLE.jpg',
                ]);

                Product::factory()->create([
                    'name' => 'THORE TOWEL BAR HANDLE',
                    'display_name' => 'THORE TOWEL BAR HANDLE',
                    'description' => 'THORE TOWEL BAR HANDLE',
                    'category_id' => 5,
                    'sub_category_id' => 3,
                    'brand' => 'Thore',
                    'status' => 'active',
                    'price' => '1500.00',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 65,
                    'filename' => 'THORE TOWEL BAR HANDLE.jpg',
                ]);

            //

            // Other Products - Shower Hinges (66-69)

                Product::factory()->create([
                    'name' => 'GSM-0011',
                    'display_name' => 'THORE GSM-0011',
                    'description' => 'THORE GSM-0011',
                    'category_id' => 5,
                    'sub_category_id' => 4,
                    'brand' => 'Thore',
                    'status' => 'active',
                    'price' => '1299.00',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 66,
                    'filename' => 'GSM-0011.jpg',
                ]);

                Product::factory()->create([
                    'name' => 'GSM-0012',
                    'display_name' => 'THORE GSM-0012',
                    'description' => 'THORE GSM-0012',
                    'category_id' => 5,
                    'sub_category_id' => 4,
                    'brand' => 'Thore',
                    'status' => 'active',
                    'price' => '1599.00',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 67,
                    'filename' => 'GSM-0012.jpg',
                ]);

                Product::factory()->create([
                    'name' => 'GSM-0013',
                    'display_name' => 'THORE GSM-0013',
                    'description' => 'THORE GSM-0013',
                    'category_id' => 5,
                    'sub_category_id' => 4,
                    'brand' => 'Thore',
                    'status' => 'active',
                    'price' => '1500.00',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 68,
                    'filename' => 'GSM-0013.jpg',
                ]);

                Product::factory()->create([
                    'name' => 'GSM-0014',
                    'display_name' => 'THORE GSM-0014',
                    'description' => 'THORE GSM-0014',
                    'category_id' => 5,
                    'sub_category_id' => 4,
                    'brand' => 'Thore',
                    'status' => 'active',
                    'price' => '1599.00',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 69,
                    'filename' => 'GSM-0014.jpg',
                ]);

            //

            // Other Products - Shower Hinges (70-73)

                Product::factory()->create([
                    'name' => 'GSM-0001',
                    'display_name' => 'THORE GSM-0001',
                    'description' => 'THORE GSM-0001',
                    'category_id' => 5,
                    'sub_category_id' => 5,
                    'brand' => 'Thore',
                    'status' => 'active',
                    'price' => '1699.00',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 70,
                    'filename' => 'GSM-0001.jpg',
                ]);

                Product::factory()->create([
                    'name' => 'GSM-0002',
                    'display_name' => 'THORE GSM-0002',
                    'description' => 'THORE GSM-0002',
                    'category_id' => 5,
                    'sub_category_id' => 5,
                    'brand' => 'Thore',
                    'status' => 'active',
                    'price' => '1259.00',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 71,
                    'filename' => 'GSM-0002.jpg',
                ]);

                Product::factory()->create([
                    'name' => 'GSM-0003',
                    'display_name' => 'THORE GSM-0003',
                    'description' => 'THORE GSM-0003',
                    'category_id' => 5,
                    'sub_category_id' => 5,
                    'brand' => 'Thore',
                    'status' => 'active',
                    'price' => '1500.00',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 72,
                    'filename' => 'GSM-0003.jpg',
                ]);

                Product::factory()->create([
                    'name' => 'GSM-0004',
                    'display_name' => 'THORE GSM-0004',
                    'description' => 'THORE GSM-0004',
                    'category_id' => 5,
                    'sub_category_id' => 5,
                    'brand' => 'Thore',
                    'status' => 'active',
                    'price' => '1500.00',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 73,
                    'filename' => 'GSM-0004.jpg',
                ]);

            //

            // Other Products - Shower Glass Clips (74-75)

                Product::factory()->create([
                    'name' => 'GSM-0102',
                    'display_name' => 'THORE GSM-0102',
                    'description' => 'THORE GSM-0102',
                    'category_id' => 5,
                    'sub_category_id' => 6,
                    'brand' => 'Thore',
                    'status' => 'active',
                    'price' => '1299.00',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 74,
                    'filename' => 'GSM-0102.jpg',
                ]);

                Product::factory()->create([
                    'name' => 'GSM-0103',
                    'display_name' => 'THORE GSM-0103',
                    'description' => 'THORE GSM-0103',
                    'category_id' => 5,
                    'sub_category_id' => 6,
                    'brand' => 'Thore',
                    'status' => 'active',
                    'price' => '1599.00',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 75,
                    'filename' => 'GSM-0103.jpg',
                ]);

            //

            // Other Products - Ladder (76)

                Product::factory()->create([
                    'name' => 'A - Type Ladder',
                    'display_name' => 'A - Type Ladder',
                    'description' => 'A - Type Ladder',
                    'category_id' => 5,
                    'sub_category_id' => 7,
                    'brand' => 'Generic',
                    'status' => 'active',
                    'price' => '1699.00',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 76,
                    'filename' => 'ladder.jpg',
                ]);

            //

            // Other Products - Jalouplus (77)

                Product::factory()->create([
                    'name' => 'Jalouplus',
                    'display_name' => 'Jalouplus',
                    'description' => 'Jalouplus',
                    'category_id' => 5,
                    'sub_category_id' => 8,
                    'brand' => 'Generic',
                    'status' => 'active',
                    'price' => '1999.00',
                ]);

                ProductImage::factory()->create([
                    'product_id' => 77,
                    'filename' => 'jalouplus.jpg',
                ]);

            //

        //


    }
}
