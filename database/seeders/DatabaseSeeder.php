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
use App\Imports\DatabaseImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
 
        // Build full path to the file
        $path = storage_path('app\public\imports\DatabaseSeeder.xlsx');
        
        // Declare Importer
        $importer = new DatabaseImport();
        Excel::import($importer, $path);
        
        // Get Data from Importer
        $data = $importer->getData();

        // Segregate by Sheets
        $usertypes = $data['Usertypes'];
        $users = $data['Users'];
        $categories = $data['Categories'];
        $products = $data['Products'];


        $usertypes_arr = array(); $i = 1;

        //Import Usertypes
        foreach(array_slice($usertypes, 1) as $row){
            if($row[1] != null || $row[1] != ""){
                Usertype::factory()->create([
                    'title' => $row[1],
                    'access' => $row[2],
                ]);
    
                $usertypes_arr[$row[1]] = $i; $i++;
            }
        }

        //Import Users
        foreach(array_slice($users, 1) as $row){
            if($row[1] != "" && $row[1] != null){
                User::factory()->create([
                    'usertype' => $usertypes_arr[$row[1]],
                    'username' => $row[2],
                    'fname' => $row[3],
                    'mname' => $row[4],
                    'lname' => $row[5],
                    'ext' => $row[6],
                    'address' => $row[7],
                    'birthdate' => is_numeric($row[8]) ? Date::excelToDateTimeObject($row[8])->format('Y-m-d') : null,
                    'email' => $row[9],
                    'contact_num' => $row[10],
                    'user_pic' => $row[11],
                    'upload_file' => null,
                    'password' => Hash::make($row[13]),
                    'status' => $row[14],
                ]);
            }
        }

        $i = 0; $ctr = 1; $idx = 1;
        $categories_arr = array();
        $sub_categories_arr = array();

        //Import Categories
        foreach(array_slice($categories, 1) as $row){
            if($row[3] != ""){
                
                if($row[1] != ""){
                    $i++;
                    
                    ProductCategory::factory()->create([
                        'category' => $row[1],
                        'description' => $row[2]
                    ]); 

                    $categories_arr[$row[1]] = $i;
                }

                if ($row[3] != "" && $row[3] != "-") {
                    ProductSubCategory::factory()->create([
                        'category_id' => $i,
                        'category' => $row[3],
                        'description' => $row[4]
                    ]);

                    $sub_categories_arr[$row[3]] = $ctr; $ctr++;
                }

            }
        }

        $current_category = "";
        $current_sub_category = "";

        // Import Products
        foreach(array_slice($products, 1) as $row){
            if($row[3] != ""){

                if($row[1] != ""){ $current_category = $row[1]; }
                if($row[2] != ""){ $current_sub_category = $row[2]; }

                Product::factory()->create([
                    'name' => $row[3],
                    'display_name' => $row[4],
                    'description' => $row[5],
                    'category_id' => $categories_arr[$current_category],
                    'sub_category_id' => $current_sub_category != "-" ? $sub_categories_arr[$current_sub_category] : null,
                    'brand' => $row[6],
                    'status' => $row[7],
                    'price' => $row[8],
                ]);

                ProductImage::factory()->create([
                    'product_id' => $idx,
                    'filename' => $row[9],
                    'isDeleted' => false,
                ]);

                $idx++;
            }
        }

    }
}
