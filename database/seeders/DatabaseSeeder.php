<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductSubCategory;
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
                    'description' => `An armored vehicle's radiator grill is protected by a bumper or guard, reinforcing edges, safeguarding the radiator, and clearing debris or road-blocking vehicles.`,
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
                    'description' => `A thick gas tank cover is applied to ensure protection, preventing direct penetration of fragments and enhancing the safety and durability of the vehicle.`,
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
                    'description' => `Armored vehicles require upgraded suspension and brakes to manage weight, ensuring reliable control, enhanced performance, and safe stopping.`,
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
                    'description' => `To ensure added durability, robust covers are available for the battery, fuse box, and gas tank, providing enhanced protection for critical vehicle components.`,
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
                    'description' => `Run-flat insert systems ensure mobility and safety in challenging situations, providing uncompromised performance, reliability, and peace of mind.`,
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
                    'description' => `A bulletproof rear door partition provides extra security, reinforcing the back of your vehicle for enhanced defense and ensuring added protection for passengers and cargo.`,
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
                    'description' => `Ensures any penetrating fragments are contained, preventing them from passing through and enhancing overall vehicle safety and protection.`,
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
                    'description' => `Offering protection and satisfaction with premium leather seats through exceptional engineering, ensuring comfort inside your vehicle.`,
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
                    'description' => '',
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
                    'description' => '',
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
                    'description' => '',
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
                    'description' => '',
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
                    'description' => '',
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
                    'description' => '',
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
                    'description' => '',
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
                    'description' => '',
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
                    'description' => '',
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
                    'description' => '',
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
                    'description' => '',
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

            // Other Products - Door Closers and Floor Hinges
                Product::factory()->create([
                    'name' => 'GSM-0060',
                    'display_name' => 'Thore Door Closer Model GSM-0060',
                    'description' => 'Thore Door Closer Model GSM-0060',
                    'category_id' => 5,
                    'sub_category_id' => 1,
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

        //


    }
}
