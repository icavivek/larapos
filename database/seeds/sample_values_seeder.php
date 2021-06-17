<?php

use Illuminate\Database\Seeder;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Config;
use Carbon\Carbon;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

use App\Models\Store as StoreModel;
use App\Models\Account as AccountModel;
use App\Models\Supplier as SupplierModel;
use App\Models\Category as CategoryModel;
use App\Models\Product as ProductModel;
use App\Models\Table as TableModel;
use App\Models\Taxcode as TaxcodeModel;
use App\Models\Discountcode as DiscountcodeModel;
use App\Models\Target as TargetModel;
use App\Models\User as UserModel;
use App\Models\Notification as NotificationModel;
use App\Models\BillingCounter as BillingCounterModel;
use App\Models\ProductImages as ProductImagesModel;
use App\Models\MeasurementUnit as MeasurementUnitModel;
use App\Models\AddonGroup as AddonGroupModel;
use App\Models\AddonGroupProduct as AddonGroupProductModel;
use App\Models\ProductAddonGroup as ProductAddonGroupModel;

class sample_values_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $base_controller = new Controller;

        $store_1 = DB::table("stores")->insertGetId([
            "slack" => $base_controller->generate_slack("stores"),
            "store_code" => strtoupper(trim("STORE1")),
            "name" => "Appsthing Store 1",
            "tax_number" => "100000000000",
            "address" => $faker->address,
            "country_id" => 230,
            "pincode" => "100111",
            "primary_contact" => $faker->e164PhoneNumber,
            "secondary_contact" => $faker->e164PhoneNumber,
            "primary_email" => $faker->unique()->email,
            "secondary_email" => $faker->unique()->email,
            "invoice_type" => "SMALL",
            "currency_code" => "USD",
            "currency_name" => "United States dollar",
            "restaurant_mode" =>1,
            "restaurant_waiter_role_id" => 5,
            "restaurant_billing_type_id" => 2,
            "status" => 1,
            "created_at" => NOW(),
            "updated_at" => NOW(),
            "created_by" => 1
        ]);

        $store_2 = DB::table("stores")->insertGetId([
            "slack" => $base_controller->generate_slack("stores"),
            "store_code" => strtoupper(trim("STORE2")),
            "name" => "Appsthing Store 2",
            "tax_number" => "100000000001",
            "address" => $faker->address,
            "country_id" => 98,
            "pincode" => "560038",
            "primary_contact" => $faker->e164PhoneNumber,
            "secondary_contact" => $faker->e164PhoneNumber,
            "primary_email" => $faker->unique()->email,
            "secondary_email" => $faker->unique()->email,
            "invoice_type" => "A4",
            "currency_code" => "INR",
            "currency_name" => "Indian rupee",
            "restaurant_mode" => 0,
            "restaurant_waiter_role_id" => '',
            "restaurant_billing_type_id" => '',
            "status" => 1,
            "created_at" => NOW(),
            "updated_at" => NOW(),
            "created_by" => 1
        ]);

        $store_3 = DB::table("stores")->insertGetId([
            "slack" => $base_controller->generate_slack("stores"),
            "store_code" => strtoupper(trim("STORE3")),
            "name" => "Appsthing Store 3",
            "tax_number" => "100000000001",
            "address" => $faker->address,
            "country_id" => 230,
            "pincode" => "100222",
            "primary_contact" => $faker->e164PhoneNumber,
            "secondary_contact" => $faker->e164PhoneNumber,
            "primary_email" => $faker->unique()->email,
            "secondary_email" => $faker->unique()->email,
            "invoice_type" => "A4",
            "currency_code" => "USD",
            "currency_name" => "United States dollar",
            "restaurant_mode" =>1,
            "restaurant_waiter_role_id" => 5,
            "restaurant_billing_type_id" => 1,
            "status" => 1,
            "created_at" => NOW(),
            "updated_at" => NOW(),
            "created_by" => 1
        ]);

        $store_4 = DB::table("stores")->insertGetId([
            "slack" => $base_controller->generate_slack("stores"),
            "store_code" => strtoupper(trim("STORE4")),
            "name" => "Appsthing Store 4",
            "tax_number" => "100000000001",
            "address" => $faker->address,
            "country_id" => 230,
            "pincode" => "100222",
            "primary_contact" => $faker->e164PhoneNumber,
            "secondary_contact" => $faker->e164PhoneNumber,
            "primary_email" => $faker->unique()->email,
            "secondary_email" => $faker->unique()->email,
            "invoice_type" => "A4",
            "currency_code" => "USD",
            "currency_name" => "United States dollar",
            "restaurant_mode" => 1,
            "restaurant_waiter_role_id" => 5,
            "restaurant_billing_type_id" => 1,
            "status" => 1,
            "created_at" => NOW(),
            "updated_at" => NOW(),
            "created_by" => 1
        ]);

        $store_5 = DB::table("stores")->insertGetId([
            "slack" => $base_controller->generate_slack("stores"),
            "store_code" => strtoupper(trim("STORE5")),
            "name" => "Appsthing Store 5",
            "tax_number" => "100000000001",
            "address" => $faker->address,
            "country_id" => 230,
            "pincode" => "100222",
            "primary_contact" => $faker->e164PhoneNumber,
            "secondary_contact" => $faker->e164PhoneNumber,
            "primary_email" => $faker->unique()->email,
            "secondary_email" => $faker->unique()->email,
            "invoice_type" => "A4",
            "currency_code" => "USD",
            "currency_name" => "United States dollar",
            "restaurant_mode" =>0,
            "status" => 1,
            "created_at" => NOW(),
            "updated_at" => NOW(),
            "created_by" => 1
        ]);

        $manager_role_id = DB::table("roles")->insertGetId([
            'slack' => $base_controller->generate_slack("roles"),
            'role_code' => '100',
            'label' => 'Manager', 
            'status' => 1,
            "created_at" => NOW(),
            "updated_at" => NOW(),
            "created_by" => 1
        ]);

        $accounts_manager_role_id = DB::table("roles")->insertGetId([
            'slack' => $base_controller->generate_slack("roles"),
            'role_code' => '101',
            'label' => 'Accounts Manager', 
            'status' => 1,
            "created_at" => NOW(),
            "updated_at" => NOW(),
            "created_by" => 1
        ]);

        $cashier_role_id = DB::table("roles")->insertGetId([
            'slack' => $base_controller->generate_slack("roles"),
            'role_code' => '102',
            'label' => 'Cashier', 
            'status' => 1,
            "created_at" => NOW(),
            "updated_at" => NOW(),
            "created_by" => 1
        ]);

        $waiter_role_id = DB::table("roles")->insertGetId([
            'slack' => $base_controller->generate_slack("roles"),
            'role_code' => '103',
            'label' => 'Waiter', 
            'status' => 1,
            "created_at" => NOW(),
            "updated_at" => NOW(),
            "created_by" => 1
        ]);

        $chef_role_id = DB::table("roles")->insertGetId([
            'slack' => $base_controller->generate_slack("roles"),
            'role_code' => '104',
            'label' => 'Chef', 
            'status' => 1,
            "created_at" => NOW(),
            "updated_at" => NOW(),
            "created_by" => 1
        ]);

        DB::insert("INSERT INTO `role_menus` (`id`, `role_id`, `menu_id`, `created_by`, `created_at`, `updated_at`) VALUES
        (NULL, 2, 1, 1, NOW(), NOW()),
        (NULL, 2, 2, 1, NOW(), NOW()),
        (NULL, 2, 3, 1, NOW(), NOW()),
        (NULL, 2, 4, 1, NOW(), NOW()),
        (NULL, 2, 5, 1, NOW(), NOW()),
        (NULL, 2, 6, 1, NOW(), NOW()),
        (NULL, 2, 7, 1, NOW(), NOW()),
        (NULL, 2, 8, 1, NOW(), NOW()),
        (NULL, 2, 9, 1, NOW(), NOW()),
        (NULL, 2, 10, 1, NOW(), NOW()),
        (NULL, 2, 11, 1, NOW(), NOW()),
        (NULL, 2, 12, 1, NOW(), NOW()),
        (NULL, 2, 13, 1, NOW(), NOW()),
        (NULL, 2, 14, 1, NOW(), NOW()),
        (NULL, 2, 15, 1, NOW(), NOW()),
        (NULL, 2, 16, 1, NOW(), NOW()),
        (NULL, 2, 17, 1, NOW(), NOW()),
        (NULL, 2, 18, 1, NOW(), NOW()),
        (NULL, 2, 19, 1, NOW(), NOW()),
        (NULL, 2, 20, 1, NOW(), NOW()),
        (NULL, 2, 21, 1, NOW(), NOW()),
        (NULL, 2, 22, 1, NOW(), NOW()),
        (NULL, 2, 23, 1, NOW(), NOW()),
        (NULL, 2, 25, 1, NOW(), NOW()),
        (NULL, 2, 26, 1, NOW(), NOW()),
        (NULL, 2, 27, 1, NOW(), NOW()),
        (NULL, 2, 28, 1, NOW(), NOW()),
        (NULL, 2, 29, 1, NOW(), NOW()),
        (NULL, 2, 30, 1, NOW(), NOW()),
        (NULL, 2, 31, 1, NOW(), NOW()),
        (NULL, 2, 32, 1, NOW(), NOW()),
        (NULL, 2, 33, 1, NOW(), NOW()),
        (NULL, 2, 34, 1, NOW(), NOW()),
        (NULL, 2, 35, 1, NOW(), NOW()),
        (NULL, 2, 36, 1, NOW(), NOW()),
        (NULL, 2, 37, 1, NOW(), NOW()),
        (NULL, 2, 38, 1, NOW(), NOW()),
        (NULL, 2, 39, 1, NOW(), NOW()),
        (NULL, 2, 40, 1, NOW(), NOW()),
        (NULL, 2, 41, 1, NOW(), NOW()),
        (NULL, 2, 42, 1, NOW(), NOW()),
        (NULL, 2, 43, 1, NOW(), NOW()),
        (NULL, 2, 44, 1, NOW(), NOW()),
        (NULL, 2, 45, 1, NOW(), NOW()),
        (NULL, 2, 46, 1, NOW(), NOW()),
        (NULL, 2, 47, 1, NOW(), NOW()),
        (NULL, 2, 48, 1, NOW(), NOW()),
        (NULL, 2, 49, 1, NOW(), NOW()),
        (NULL, 2, 50, 1, NOW(), NOW()),
        (NULL, 2, 51, 1, NOW(), NOW()),
        (NULL, 2, 52, 1, NOW(), NOW()),
        (NULL, 2, 53, 1, NOW(), NOW()),
        (NULL, 2, 54, 1, NOW(), NOW()),
        (NULL, 2, 55, 1, NOW(), NOW()),
        (NULL, 2, 56, 1, NOW(), NOW()),
        (NULL, 2, 57, 1, NOW(), NOW()),
        (NULL, 2, 58, 1, NOW(), NOW()),
        (NULL, 2, 59, 1, NOW(), NOW()),
        (NULL, 2, 60, 1, NOW(), NOW()),
        (NULL, 2, 61, 1, NOW(), NOW()),
        (NULL, 2, 62, 1, NOW(), NOW()),
        (NULL, 2, 63, 1, NOW(), NOW()),
        (NULL, 2, 64, 1, NOW(), NOW()),
        (NULL, 2, 65, 1, NOW(), NOW()),
        (NULL, 2, 66, 1, NOW(), NOW()),
        (NULL, 2, 67, 1, NOW(), NOW()),
        (NULL, 2, 68, 1, NOW(), NOW()),
        (NULL, 2, 69, 1, NOW(), NOW()),
        (NULL, 2, 70, 1, NOW(), NOW()),
        (NULL, 2, 71, 1, NOW(), NOW()),
        (NULL, 2, 72, 1, NOW(), NOW()),
        (NULL, 2, 73, 1, NOW(), NOW()),
        (NULL, 2, 74, 1, NOW(), NOW()),
        (NULL, 2, 76, 1, NOW(), NOW()),
        (NULL, 2, 77, 1, NOW(), NOW()),
        (NULL, 2, 78, 1, NOW(), NOW()),
        (NULL, 2, 79, 1, NOW(), NOW()),
        (NULL, 2, 80, 1, NOW(), NOW()),
        (NULL, 2, 81, 1, NOW(), NOW()),
        (NULL, 2, 82, 1, NOW(), NOW()),
        (NULL, 2, 83, 1, NOW(), NOW()),
        (NULL, 2, 84, 1, NOW(), NOW()),
        (NULL, 2, 85, 1, NOW(), NOW()),
        (NULL, 2, 86, 1, NOW(), NOW()),
        (NULL, 2, 87, 1, NOW(), NOW()),
        (NULL, 2, 88, 1, NOW(), NOW()),
        (NULL, 2, 89, 1, NOW(), NOW()),
        (NULL, 2, 90, 1, NOW(), NOW()),
        (NULL, 2, 91, 1, NOW(), NOW()),
        (NULL, 2, 92, 1, NOW(), NOW()),
        (NULL, 2, 93, 1, NOW(), NOW()),
        (NULL, 2, 94, 1, NOW(), NOW()),
        (NULL, 2, 95, 1, NOW(), NOW()),
        (NULL, 2, 96, 1, NOW(), NOW()),
        (NULL, 2, 97, 1, NOW(), NOW()),
        (NULL, 2, 98, 1, NOW(), NOW()),
        (NULL, 2, 99, 1, NOW(), NOW()),
        (NULL, 2, 100, 1, NOW(), NOW()),
        (NULL, 2, 101, 1, NOW(), NOW()),
        (NULL, 2, 102, 1, NOW(), NOW()),
        (NULL, 2, 103, 1, NOW(), NOW()),
        (NULL, 2, 104, 1, NOW(), NOW()),
        (NULL, 2, 105, 1, NOW(), NOW()),
        (NULL, 2, 106, 1, NOW(), NOW()),
        (NULL, 2, 107, 1, NOW(), NOW()),
        (NULL, 2, 108, 1, NOW(), NOW()),
        (NULL, 2, 109, 1, NOW(), NOW()),
        (NULL, 2, 110, 1, NOW(), NOW()),
        (NULL, 2, 111, 1, NOW(), NOW()),
        (NULL, 2, 112, 1, NOW(), NOW()),
        (NULL, 2, 113, 1, NOW(), NOW()),
        (NULL, 2, 114, 1, NOW(), NOW()),
        (NULL, 2, 115, 1, NOW(), NOW()),
        (NULL, 2, 116, 1, NOW(), NOW()),
        (NULL, 2, 117, 1, NOW(), NOW()),
        (NULL, 2, 118, 1, NOW(), NOW()),
        (NULL, 2, 119, 1, NOW(), NOW()),
        (NULL, 2, 120, 1, NOW(), NOW()),
        (NULL, 2, 121, 1, NOW(), NOW()),
        (NULL, 2, 122, 1, NOW(), NOW()),
        (NULL, 2, 123, 1, NOW(), NOW()),
        (NULL, 2, 124, 1, NOW(), NOW()),
        (NULL, 2, 125, 1, NOW(), NOW()),
        (NULL, 2, 126, 1, NOW(), NOW()),
        (NULL, 2, 127, 1, NOW(), NOW()),
        (NULL, 2, 128, 1, NOW(), NOW()),
        (NULL, 2, 129, 1, NOW(), NOW()),
        (NULL, 2, 130, 1, NOW(), NOW()),
        (NULL, 2, 131, 1, NOW(), NOW()),
        (NULL, 2, 132, 1, NOW(), NOW()),
        (NULL, 2, 133, 1, NOW(), NOW()),
        (NULL, 2, 134, 1, NOW(), NOW()),
        (NULL, 2, 135, 1, NOW(), NOW()),
        (NULL, 2, 136, 1, NOW(), NOW()),
        (NULL, 2, 137, 1, NOW(), NOW()),
        (NULL, 2, 138, 1, NOW(), NOW()),
        (NULL, 2, 139, 1, NOW(), NOW()),
        (NULL, 2, 140, 1, NOW(), NOW()),
        (NULL, 2, 141, 1, NOW(), NOW()),
        (NULL, 2, 142, 1, NOW(), NOW()),
        (NULL, 2, 143, 1, NOW(), NOW()),
        (NULL, 2, 144, 1, NOW(), NOW()),
        (NULL, 2, 145, 1, NOW(), NOW()),
        (NULL, 2, 146, 1, NOW(), NOW()),
        (NULL, 2, 147, 1, NOW(), NOW()),
        (NULL, 2, 148, 1, NOW(), NOW()),
        (NULL, 2, 149, 1, NOW(), NOW()),
        (NULL, 2, 150, 1, NOW(), NOW()),
        (NULL, 2, 151, 1, NOW(), NOW()),
        (NULL, 2, 152, 1, NOW(), NOW()),
        (NULL, 2, 153, 1, NOW(), NOW()),
        (NULL, 2, 154, 1, NOW(), NOW()),
        (NULL, 2, 155, 1, NOW(), NOW()),
        (NULL, 2, 156, 1, NOW(), NOW()),
        (NULL, 2, 157, 1, NOW(), NOW()),
        (NULL, 2, 158, 1, NOW(), NOW()),
        (NULL, 2, 159, 1, NOW(), NOW()),
        (NULL, 2, 160, 1, NOW(), NOW()),
        (NULL, 2, 161, 1, NOW(), NOW()),
        (NULL, 2, 162, 1, NOW(), NOW()),
        (NULL, 2, 163, 1, NOW(), NOW()),
        (NULL, 2, 164, 1, NOW(), NOW()),
        (NULL, 2, 165, 1, NOW(), NOW()),
        (NULL, 2, 166, 1, NOW(), NOW()),
        (NULL, 2, 167, 1, NOW(), NOW()),
        (NULL, 2, 168, 1, NOW(), NOW()),
        (NULL, 2, 169, 1, NOW(), NOW()),
        (NULL, 2, 170, 1, NOW(), NOW()),
        (NULL, 2, 171, 1, NOW(), NOW()),
        (NULL, 2, 172, 1, NOW(), NOW()),
        (NULL, 2, 173, 1, NOW(), NOW()),
        (NULL, 2, 174, 1, NOW(), NOW()),
        (NULL, 2, 175, 1, NOW(), NOW()),
        (NULL, 2, 176, 1, NOW(), NOW()),
        (NULL, 2, 177, 1, NOW(), NOW()),
        (NULL, 2, 178, 1, NOW(), NOW()),
        (NULL, 2, 179, 1, NOW(), NOW()),
        (NULL, 2, 180, 1, NOW(), NOW()),
        (NULL, 2, 181, 1, NOW(), NOW()),
        (NULL, 2, 182, 1, NOW(), NOW()),
        (NULL, 2, 183, 1, NOW(), NOW()),
        (NULL, 2, 184, 1, NOW(), NOW()),
        (NULL, 2, 185, 1, NOW(), NOW()),
        (NULL, 2, 186, 1, NOW(), NOW()),
        (NULL, 2, 187, 1, NOW(), NOW()),
        (NULL, 2, 188, 1, NOW(), NOW()),
        (NULL, 2, 189, 1, NOW(), NOW()),
        (NULL, 2, 190, 1, NOW(), NOW()),
        (NULL, 2, 191, 1, NOW(), NOW()),
        (NULL, 2, 192, 1, NOW(), NOW()),
        (NULL, 2, 193, 1, NOW(), NOW()),
        (NULL, 2, 194, 1, NOW(), NOW()),
        (NULL, 2, 195, 1, NOW(), NOW()),
        (NULL, 2, 196, 1, NOW(), NOW()),
        (NULL, 2, 197, 1, NOW(), NOW()),
        (NULL, 2, 198, 1, NOW(), NOW()),
        (NULL, 2, 199, 1, NOW(), NOW()),
        (NULL, 2, 200, 1, NOW(), NOW()),
        (NULL, 2, 201, 1, NOW(), NOW()),
        (NULL, 2, 202, 1, NOW(), NOW()),
        (NULL, 2, 203, 1, NOW(), NOW()),
        (NULL, 2, 204, 1, NOW(), NOW()),
        (NULL, 3, 1, 1, NOW(), NOW()),
        (NULL, 3, 2, 1, NOW(), NOW()),
        (NULL, 3, 7, 1, NOW(), NOW()),
        (NULL, 3, 8, 1, NOW(), NOW()),
        (NULL, 3, 9, 1, NOW(), NOW()),
        (NULL, 3, 10, 1, NOW(), NOW()),
        (NULL, 3, 20, 1, NOW(), NOW()),
        (NULL, 3, 34, 1, NOW(), NOW()),
        (NULL, 3, 35, 1, NOW(), NOW()),
        (NULL, 3, 36, 1, NOW(), NOW()),
        (NULL, 3, 37, 1, NOW(), NOW()),
        (NULL, 3, 57, 1, NOW(), NOW()),
        (NULL, 3, 58, 1, NOW(), NOW()),
        (NULL, 3, 59, 1, NOW(), NOW()),
        (NULL, 3, 70, 1, NOW(), NOW()),
        (NULL, 3, 71, 1, NOW(), NOW()),
        (NULL, 3, 72, 1, NOW(), NOW()),
        (NULL, 3, 73, 1, NOW(), NOW()),
        (NULL, 3, 76, 1, NOW(), NOW()),
        (NULL, 3, 77, 1, NOW(), NOW()),
        (NULL, 3, 78, 1, NOW(), NOW()),
        (NULL, 3, 79, 1, NOW(), NOW()),
        (NULL, 3, 80, 1, NOW(), NOW()),
        (NULL, 3, 81, 1, NOW(), NOW()),
        (NULL, 3, 82, 1, NOW(), NOW()),
        (NULL, 3, 83, 1, NOW(), NOW()),
        (NULL, 3, 84, 1, NOW(), NOW()),
        (NULL, 3, 85, 1, NOW(), NOW()),
        (NULL, 3, 86, 1, NOW(), NOW()),
        (NULL, 3, 87, 1, NOW(), NOW()),
        (NULL, 3, 88, 1, NOW(), NOW()),
        (NULL, 3, 89, 1, NOW(), NOW()),
        (NULL, 3, 90, 1, NOW(), NOW()),
        (NULL, 3, 91, 1, NOW(), NOW()),
        (NULL, 3, 92, 1, NOW(), NOW()),
        (NULL, 3, 93, 1, NOW(), NOW()),
        (NULL, 3, 94, 1, NOW(), NOW()),
        (NULL, 3, 95, 1, NOW(), NOW()),
        (NULL, 3, 96, 1, NOW(), NOW()),
        (NULL, 3, 97, 1, NOW(), NOW()),
        (NULL, 3, 98, 1, NOW(), NOW()),
        (NULL, 3, 99, 1, NOW(), NOW()),
        (NULL, 3, 107, 1, NOW(), NOW()),
        (NULL, 3, 108, 1, NOW(), NOW()),
        (NULL, 3, 109, 1, NOW(), NOW()),
        (NULL, 3, 110, 1, NOW(), NOW()),
        (NULL, 3, 111, 1, NOW(), NOW()),
        (NULL, 3, 118, 1, NOW(), NOW()),
        (NULL, 3, 119, 1, NOW(), NOW()),
        (NULL, 3, 120, 1, NOW(), NOW()),
        (NULL, 3, 121, 1, NOW(), NOW()),
        (NULL, 3, 122, 1, NOW(), NOW()),
        (NULL, 3, 123, 1, NOW(), NOW()),
        (NULL, 3, 124, 1, NOW(), NOW()),
        (NULL, 3, 137, 1, NOW(), NOW()),
        (NULL, 3, 150, 1, NOW(), NOW()),
        (NULL, 3, 151, 1, NOW(), NOW()),
        (NULL, 3, 152, 1, NOW(), NOW()),
        (NULL, 3, 153, 1, NOW(), NOW()),
        (NULL, 3, 154, 1, NOW(), NOW()),
        (NULL, 3, 155, 1, NOW(), NOW()),
        (NULL, 3, 156, 1, NOW(), NOW()),
        (NULL, 3, 167, 1, NOW(), NOW()),
        (NULL, 3, 168, 1, NOW(), NOW()),
        (NULL, 3, 169, 1, NOW(), NOW()),
        (NULL, 3, 170, 1, NOW(), NOW()),
        (NULL, 3, 171, 1, NOW(), NOW()),
        (NULL, 3, 172, 1, NOW(), NOW()),
        (NULL, 3, 173, 1, NOW(), NOW()),
        (NULL, 3, 174, 1, NOW(), NOW()),
        (NULL, 3, 175, 1, NOW(), NOW()),
        (NULL, 3, 187, 1, NOW(), NOW()),
        (NULL, 3, 188, 1, NOW(), NOW()),
        (NULL, 3, 189, 1, NOW(), NOW()),
        (NULL, 4, 1, 1, NOW(), NOW()),
        (NULL, 4, 2, 1, NOW(), NOW()),
        (NULL, 4, 9, 1, NOW(), NOW()),
        (NULL, 4, 34, 1, NOW(), NOW()),
        (NULL, 4, 35, 1, NOW(), NOW()),
        (NULL, 4, 36, 1, NOW(), NOW()),
        (NULL, 4, 37, 1, NOW(), NOW()),
        (NULL, 4, 76, 1, NOW(), NOW()),
        (NULL, 4, 77, 1, NOW(), NOW()),
        (NULL, 4, 78, 1, NOW(), NOW()),
        (NULL, 4, 79, 1, NOW(), NOW()),
        (NULL, 4, 80, 1, NOW(), NOW()),
        (NULL, 4, 81, 1, NOW(), NOW()),
        (NULL, 4, 82, 1, NOW(), NOW()),
        (NULL, 4, 89, 1, NOW(), NOW()),
        (NULL, 4, 91, 1, NOW(), NOW()),
        (NULL, 4, 95, 1, NOW(), NOW()),
        (NULL, 4, 96, 1, NOW(), NOW()),
        (NULL, 4, 97, 1, NOW(), NOW()),
        (NULL, 4, 98, 1, NOW(), NOW()),
        (NULL, 4, 118, 1, NOW(), NOW()),
        (NULL, 4, 119, 1, NOW(), NOW()),
        (NULL, 4, 123, 1, NOW(), NOW()),
        (NULL, 4, 167, 1, NOW(), NOW()),
        (NULL, 4, 174, 1, NOW(), NOW()),
        (NULL, 4, 187, 1, NOW(), NOW()),
        (NULL, 4, 188, 1, NOW(), NOW()),
        (NULL, 4, 189, 1, NOW(), NOW()),
        (NULL, 4, 190, 1, NOW(), NOW()),
        (NULL, 4, 191, 1, NOW(), NOW()),
        (NULL, 4, 192, 1, NOW(), NOW()),
        (NULL, 4, 193, 1, NOW(), NOW()),
        (NULL, 4, 194, 1, NOW(), NOW()),
        (NULL, 4, 195, 1, NOW(), NOW()),
        (NULL, 4, 196, 1, NOW(), NOW()),
        (NULL, 4, 197, 1, NOW(), NOW()),
        (NULL, 5, 100, 1, NOW(), NOW()),
        (NULL, 5, 178, 1, NOW(), NOW()),
        (NULL, 5, 184, 1, NOW(), NOW()),
        (NULL, 6, 100, 1, NOW(), NOW()),
        (NULL, 6, 101, 1, NOW(), NOW()),
        (NULL, 6, 106, 1, NOW(), NOW()),
        (NULL, 6, 134, 1, NOW(), NOW()),
        (NULL, 6, 184, 1, NOW(), NOW())");

        $hashed_password = Hash::make("posuser");

        $manager_user_id = DB::table("users")->insertGetId([
            "slack" => $base_controller->generate_slack("users"),
            "user_code" => "100",
            "fullname" => $faker->firstName ." ".$faker->lastName,
            "email" => "manager@appsthing.com",
            "password" => $hashed_password,
            "phone" => $faker->e164PhoneNumber,
            "role_id" => $manager_role_id, 
            "status" => 1,
            "created_at" => NOW(),
            "updated_at" => NOW(),
            "created_by" => 1
        ]);

        $accounts_manager_user_id = DB::table("users")->insertGetId([
            "slack" => $base_controller->generate_slack("users"),
            "user_code" => "101",
            "fullname" => $faker->firstName ." ".$faker->lastName,
            "email" => "accounts@appsthing.com",
            "password" => $hashed_password,
            "phone" => $faker->e164PhoneNumber,
            "role_id" => $accounts_manager_role_id, 
            "status" => 1,
            "created_at" => NOW(),
            "updated_at" => NOW(),
            "created_by" => 1
        ]);

        $cashier_user_id = DB::table("users")->insertGetId([
            "slack" => $base_controller->generate_slack("users"),
            "user_code" => "102",
            "fullname" => $faker->firstName ." ".$faker->lastName,
            "email" => "cashier@appsthing.com",
            "password" => $hashed_password,
            "phone" => $faker->e164PhoneNumber,
            "role_id" => $cashier_role_id, 
            "status" => 1,
            "created_at" => NOW(),
            "updated_at" => NOW(),
            "created_by" => 1
        ]);

        $waiter_user_id_1 = DB::table("users")->insertGetId([
            "slack" => $base_controller->generate_slack("users"),
            "user_code" => "103",
            "fullname" => $faker->firstName ." ".$faker->lastName,
            "email" => "waiter1@appsthing.com",
            "password" => $hashed_password,
            "phone" => $faker->e164PhoneNumber,
            "role_id" => $waiter_role_id, 
            "status" => 1,
            "created_at" => NOW(),
            "updated_at" => NOW(),
            "created_by" => 1
        ]);

        $waiter_user_id_2 = DB::table("users")->insertGetId([
            "slack" => $base_controller->generate_slack("users"),
            "user_code" => "104",
            "fullname" => $faker->firstName ." ".$faker->lastName,
            "email" => "waiter2@appsthing.com",
            "password" => $hashed_password,
            "phone" => $faker->e164PhoneNumber,
            "role_id" => $waiter_role_id, 
            "status" => 1,
            "created_at" => NOW(),
            "updated_at" => NOW(),
            "created_by" => 1
        ]);

        $waiter_user_id_3 = DB::table("users")->insertGetId([
            "slack" => $base_controller->generate_slack("users"),
            "user_code" => "105",
            "fullname" => $faker->firstName ." ".$faker->lastName,
            "email" => "waiter3@appsthing.com",
            "password" => $hashed_password,
            "phone" => $faker->e164PhoneNumber,
            "role_id" => $waiter_role_id, 
            "status" => 1,
            "created_at" => NOW(),
            "updated_at" => NOW(),
            "created_by" => 1
        ]);

        $chef_user_id = DB::table("users")->insertGetId([
            "slack" => $base_controller->generate_slack("users"),
            "user_code" => "106",
            "fullname" => $faker->firstName ." ".$faker->lastName,
            "email" => "chef@appsthing.com",
            "password" => $hashed_password,
            "phone" => $faker->e164PhoneNumber,
            "role_id" => $chef_role_id, 
            "status" => 1,
            "created_at" => NOW(),
            "updated_at" => NOW(),
            "created_by" => 1
        ]);

        DB::insert("INSERT INTO `user_menus` (`id`, `user_id`, `menu_id`, `created_by`, `created_at`, `updated_at`) VALUES
        (NULL, 3, 1, 1, NOW(), NOW()),
        (NULL, 3, 2, 1, NOW(), NOW()),
        (NULL, 3, 3, 1, NOW(), NOW()),
        (NULL, 3, 4, 1, NOW(), NOW()),
        (NULL, 3, 5, 1, NOW(), NOW()),
        (NULL, 3, 6, 1, NOW(), NOW()),
        (NULL, 3, 7, 1, NOW(), NOW()),
        (NULL, 3, 8, 1, NOW(), NOW()),
        (NULL, 3, 9, 1, NOW(), NOW()),
        (NULL, 3, 10, 1, NOW(), NOW()),
        (NULL, 3, 11, 1, NOW(), NOW()),
        (NULL, 3, 12, 1, NOW(), NOW()),
        (NULL, 3, 13, 1, NOW(), NOW()),
        (NULL, 3, 14, 1, NOW(), NOW()),
        (NULL, 3, 15, 1, NOW(), NOW()),
        (NULL, 3, 16, 1, NOW(), NOW()),
        (NULL, 3, 17, 1, NOW(), NOW()),
        (NULL, 3, 18, 1, NOW(), NOW()),
        (NULL, 3, 19, 1, NOW(), NOW()),
        (NULL, 3, 20, 1, NOW(), NOW()),
        (NULL, 3, 21, 1, NOW(), NOW()),
        (NULL, 3, 22, 1, NOW(), NOW()),
        (NULL, 3, 23, 1, NOW(), NOW()),
        (NULL, 3, 25, 1, NOW(), NOW()),
        (NULL, 3, 26, 1, NOW(), NOW()),
        (NULL, 3, 27, 1, NOW(), NOW()),
        (NULL, 3, 28, 1, NOW(), NOW()),
        (NULL, 3, 29, 1, NOW(), NOW()),
        (NULL, 3, 30, 1, NOW(), NOW()),
        (NULL, 3, 31, 1, NOW(), NOW()),
        (NULL, 3, 32, 1, NOW(), NOW()),
        (NULL, 3, 33, 1, NOW(), NOW()),
        (NULL, 3, 34, 1, NOW(), NOW()),
        (NULL, 3, 35, 1, NOW(), NOW()),
        (NULL, 3, 36, 1, NOW(), NOW()),
        (NULL, 3, 37, 1, NOW(), NOW()),
        (NULL, 3, 38, 1, NOW(), NOW()),
        (NULL, 3, 39, 1, NOW(), NOW()),
        (NULL, 3, 40, 1, NOW(), NOW()),
        (NULL, 3, 41, 1, NOW(), NOW()),
        (NULL, 3, 42, 1, NOW(), NOW()),
        (NULL, 3, 43, 1, NOW(), NOW()),
        (NULL, 3, 44, 1, NOW(), NOW()),
        (NULL, 3, 45, 1, NOW(), NOW()),
        (NULL, 3, 46, 1, NOW(), NOW()),
        (NULL, 3, 47, 1, NOW(), NOW()),
        (NULL, 3, 48, 1, NOW(), NOW()),
        (NULL, 3, 49, 1, NOW(), NOW()),
        (NULL, 3, 50, 1, NOW(), NOW()),
        (NULL, 3, 51, 1, NOW(), NOW()),
        (NULL, 3, 52, 1, NOW(), NOW()),
        (NULL, 3, 53, 1, NOW(), NOW()),
        (NULL, 3, 54, 1, NOW(), NOW()),
        (NULL, 3, 55, 1, NOW(), NOW()),
        (NULL, 3, 56, 1, NOW(), NOW()),
        (NULL, 3, 57, 1, NOW(), NOW()),
        (NULL, 3, 58, 1, NOW(), NOW()),
        (NULL, 3, 59, 1, NOW(), NOW()),
        (NULL, 3, 60, 1, NOW(), NOW()),
        (NULL, 3, 61, 1, NOW(), NOW()),
        (NULL, 3, 62, 1, NOW(), NOW()),
        (NULL, 3, 63, 1, NOW(), NOW()),
        (NULL, 3, 64, 1, NOW(), NOW()),
        (NULL, 3, 65, 1, NOW(), NOW()),
        (NULL, 3, 66, 1, NOW(), NOW()),
        (NULL, 3, 67, 1, NOW(), NOW()),
        (NULL, 3, 68, 1, NOW(), NOW()),
        (NULL, 3, 69, 1, NOW(), NOW()),
        (NULL, 3, 70, 1, NOW(), NOW()),
        (NULL, 3, 71, 1, NOW(), NOW()),
        (NULL, 3, 72, 1, NOW(), NOW()),
        (NULL, 3, 73, 1, NOW(), NOW()),
        (NULL, 3, 74, 1, NOW(), NOW()),
        (NULL, 3, 76, 1, NOW(), NOW()),
        (NULL, 3, 77, 1, NOW(), NOW()),
        (NULL, 3, 78, 1, NOW(), NOW()),
        (NULL, 3, 79, 1, NOW(), NOW()),
        (NULL, 3, 80, 1, NOW(), NOW()),
        (NULL, 3, 81, 1, NOW(), NOW()),
        (NULL, 3, 82, 1, NOW(), NOW()),
        (NULL, 3, 83, 1, NOW(), NOW()),
        (NULL, 3, 84, 1, NOW(), NOW()),
        (NULL, 3, 85, 1, NOW(), NOW()),
        (NULL, 3, 86, 1, NOW(), NOW()),
        (NULL, 3, 87, 1, NOW(), NOW()),
        (NULL, 3, 88, 1, NOW(), NOW()),
        (NULL, 3, 89, 1, NOW(), NOW()),
        (NULL, 3, 90, 1, NOW(), NOW()),
        (NULL, 3, 91, 1, NOW(), NOW()),
        (NULL, 3, 92, 1, NOW(), NOW()),
        (NULL, 3, 93, 1, NOW(), NOW()),
        (NULL, 3, 94, 1, NOW(), NOW()),
        (NULL, 3, 95, 1, NOW(), NOW()),
        (NULL, 3, 96, 1, NOW(), NOW()),
        (NULL, 3, 97, 1, NOW(), NOW()),
        (NULL, 3, 98, 1, NOW(), NOW()),
        (NULL, 3, 99, 1, NOW(), NOW()),
        (NULL, 3, 100, 1, NOW(), NOW()),
        (NULL, 3, 101, 1, NOW(), NOW()),
        (NULL, 3, 102, 1, NOW(), NOW()),
        (NULL, 3, 103, 1, NOW(), NOW()),
        (NULL, 3, 104, 1, NOW(), NOW()),
        (NULL, 3, 105, 1, NOW(), NOW()),
        (NULL, 3, 106, 1, NOW(), NOW()),
        (NULL, 3, 107, 1, NOW(), NOW()),
        (NULL, 3, 108, 1, NOW(), NOW()),
        (NULL, 3, 109, 1, NOW(), NOW()),
        (NULL, 3, 110, 1, NOW(), NOW()),
        (NULL, 3, 111, 1, NOW(), NOW()),
        (NULL, 3, 112, 1, NOW(), NOW()),
        (NULL, 3, 113, 1, NOW(), NOW()),
        (NULL, 3, 114, 1, NOW(), NOW()),
        (NULL, 3, 115, 1, NOW(), NOW()),
        (NULL, 3, 116, 1, NOW(), NOW()),
        (NULL, 3, 117, 1, NOW(), NOW()),
        (NULL, 3, 118, 1, NOW(), NOW()),
        (NULL, 3, 119, 1, NOW(), NOW()),
        (NULL, 3, 120, 1, NOW(), NOW()),
        (NULL, 3, 121, 1, NOW(), NOW()),
        (NULL, 3, 122, 1, NOW(), NOW()),
        (NULL, 3, 123, 1, NOW(), NOW()),
        (NULL, 3, 124, 1, NOW(), NOW()),
        (NULL, 3, 125, 1, NOW(), NOW()),
        (NULL, 3, 126, 1, NOW(), NOW()),
        (NULL, 3, 127, 1, NOW(), NOW()),
        (NULL, 3, 128, 1, NOW(), NOW()),
        (NULL, 3, 129, 1, NOW(), NOW()),
        (NULL, 3, 130, 1, NOW(), NOW()),
        (NULL, 3, 131, 1, NOW(), NOW()),
        (NULL, 3, 132, 1, NOW(), NOW()),
        (NULL, 3, 133, 1, NOW(), NOW()),
        (NULL, 3, 134, 1, NOW(), NOW()),
        (NULL, 3, 135, 1, NOW(), NOW()),
        (NULL, 3, 136, 1, NOW(), NOW()),
        (NULL, 3, 137, 1, NOW(), NOW()),
        (NULL, 3, 138, 1, NOW(), NOW()),
        (NULL, 3, 139, 1, NOW(), NOW()),
        (NULL, 3, 140, 1, NOW(), NOW()),
        (NULL, 3, 141, 1, NOW(), NOW()),
        (NULL, 3, 142, 1, NOW(), NOW()),
        (NULL, 3, 143, 1, NOW(), NOW()),
        (NULL, 3, 144, 1, NOW(), NOW()),
        (NULL, 3, 145, 1, NOW(), NOW()),
        (NULL, 3, 146, 1, NOW(), NOW()),
        (NULL, 3, 147, 1, NOW(), NOW()),
        (NULL, 3, 148, 1, NOW(), NOW()),
        (NULL, 3, 149, 1, NOW(), NOW()),
        (NULL, 3, 150, 1, NOW(), NOW()),
        (NULL, 3, 151, 1, NOW(), NOW()),
        (NULL, 3, 152, 1, NOW(), NOW()),
        (NULL, 3, 153, 1, NOW(), NOW()),
        (NULL, 3, 154, 1, NOW(), NOW()),
        (NULL, 3, 155, 1, NOW(), NOW()),
        (NULL, 3, 156, 1, NOW(), NOW()),
        (NULL, 3, 157, 1, NOW(), NOW()),
        (NULL, 3, 158, 1, NOW(), NOW()),
        (NULL, 3, 159, 1, NOW(), NOW()),
        (NULL, 3, 160, 1, NOW(), NOW()),
        (NULL, 3, 161, 1, NOW(), NOW()),
        (NULL, 3, 162, 1, NOW(), NOW()),
        (NULL, 3, 163, 1, NOW(), NOW()),
        (NULL, 3, 164, 1, NOW(), NOW()),
        (NULL, 3, 165, 1, NOW(), NOW()),
        (NULL, 3, 166, 1, NOW(), NOW()),
        (NULL, 3, 167, 1, NOW(), NOW()),
        (NULL, 3, 168, 1, NOW(), NOW()),
        (NULL, 3, 169, 1, NOW(), NOW()),
        (NULL, 3, 170, 1, NOW(), NOW()),
        (NULL, 3, 171, 1, NOW(), NOW()),
        (NULL, 3, 172, 1, NOW(), NOW()),
        (NULL, 3, 173, 1, NOW(), NOW()),
        (NULL, 3, 174, 1, NOW(), NOW()),
        (NULL, 3, 175, 1, NOW(), NOW()),
        (NULL, 3, 176, 1, NOW(), NOW()),
        (NULL, 3, 177, 1, NOW(), NOW()),
        (NULL, 3, 178, 1, NOW(), NOW()),
        (NULL, 3, 179, 1, NOW(), NOW()),
        (NULL, 3, 180, 1, NOW(), NOW()),
        (NULL, 3, 181, 1, NOW(), NOW()),
        (NULL, 3, 182, 1, NOW(), NOW()),
        (NULL, 3, 183, 1, NOW(), NOW()),
        (NULL, 3, 184, 1, NOW(), NOW()),
        (NULL, 3, 185, 1, NOW(), NOW()),
        (NULL, 3, 186, 1, NOW(), NOW()),
        (NULL, 3, 187, 1, NOW(), NOW()),
        (NULL, 3, 188, 1, NOW(), NOW()),
        (NULL, 3, 189, 1, NOW(), NOW()),
        (NULL, 3, 190, 1, NOW(), NOW()),
        (NULL, 3, 191, 1, NOW(), NOW()),
        (NULL, 3, 192, 1, NOW(), NOW()),
        (NULL, 3, 193, 1, NOW(), NOW()),
        (NULL, 3, 194, 1, NOW(), NOW()),
        (NULL, 3, 195, 1, NOW(), NOW()),
        (NULL, 3, 196, 1, NOW(), NOW()),
        (NULL, 3, 197, 1, NOW(), NOW()),
        (NULL, 3, 198, 1, NOW(), NOW()),
        (NULL, 3, 199, 1, NOW(), NOW()),
        (NULL, 3, 200, 1, NOW(), NOW()),
        (NULL, 3, 201, 1, NOW(), NOW()),
        (NULL, 3, 202, 1, NOW(), NOW()),
        (NULL, 3, 203, 1, NOW(), NOW()),
        (NULL, 3, 204, 1, NOW(), NOW()),
        (NULL, 4, 1, 1, NOW(), NOW()),
        (NULL, 4, 2, 1, NOW(), NOW()),
        (NULL, 4, 7, 1, NOW(), NOW()),
        (NULL, 4, 8, 1, NOW(), NOW()),
        (NULL, 4, 9, 1, NOW(), NOW()),
        (NULL, 4, 10, 1, NOW(), NOW()),
        (NULL, 4, 20, 1, NOW(), NOW()),
        (NULL, 4, 34, 1, NOW(), NOW()),
        (NULL, 4, 35, 1, NOW(), NOW()),
        (NULL, 4, 36, 1, NOW(), NOW()),
        (NULL, 4, 37, 1, NOW(), NOW()),
        (NULL, 4, 57, 1, NOW(), NOW()),
        (NULL, 4, 58, 1, NOW(), NOW()),
        (NULL, 4, 59, 1, NOW(), NOW()),
        (NULL, 4, 70, 1, NOW(), NOW()),
        (NULL, 4, 71, 1, NOW(), NOW()),
        (NULL, 4, 72, 1, NOW(), NOW()),
        (NULL, 4, 73, 1, NOW(), NOW()),
        (NULL, 4, 76, 1, NOW(), NOW()),
        (NULL, 4, 77, 1, NOW(), NOW()),
        (NULL, 4, 78, 1, NOW(), NOW()),
        (NULL, 4, 79, 1, NOW(), NOW()),
        (NULL, 4, 80, 1, NOW(), NOW()),
        (NULL, 4, 81, 1, NOW(), NOW()),
        (NULL, 4, 82, 1, NOW(), NOW()),
        (NULL, 4, 83, 1, NOW(), NOW()),
        (NULL, 4, 84, 1, NOW(), NOW()),
        (NULL, 4, 85, 1, NOW(), NOW()),
        (NULL, 4, 86, 1, NOW(), NOW()),
        (NULL, 4, 87, 1, NOW(), NOW()),
        (NULL, 4, 88, 1, NOW(), NOW()),
        (NULL, 4, 89, 1, NOW(), NOW()),
        (NULL, 4, 90, 1, NOW(), NOW()),
        (NULL, 4, 91, 1, NOW(), NOW()),
        (NULL, 4, 92, 1, NOW(), NOW()),
        (NULL, 4, 93, 1, NOW(), NOW()),
        (NULL, 4, 94, 1, NOW(), NOW()),
        (NULL, 4, 95, 1, NOW(), NOW()),
        (NULL, 4, 96, 1, NOW(), NOW()),
        (NULL, 4, 97, 1, NOW(), NOW()),
        (NULL, 4, 98, 1, NOW(), NOW()),
        (NULL, 4, 99, 1, NOW(), NOW()),
        (NULL, 4, 107, 1, NOW(), NOW()),
        (NULL, 4, 108, 1, NOW(), NOW()),
        (NULL, 4, 109, 1, NOW(), NOW()),
        (NULL, 4, 110, 1, NOW(), NOW()),
        (NULL, 4, 111, 1, NOW(), NOW()),
        (NULL, 4, 118, 1, NOW(), NOW()),
        (NULL, 4, 119, 1, NOW(), NOW()),
        (NULL, 4, 120, 1, NOW(), NOW()),
        (NULL, 4, 121, 1, NOW(), NOW()),
        (NULL, 4, 122, 1, NOW(), NOW()),
        (NULL, 4, 123, 1, NOW(), NOW()),
        (NULL, 4, 124, 1, NOW(), NOW()),
        (NULL, 4, 137, 1, NOW(), NOW()),
        (NULL, 4, 150, 1, NOW(), NOW()),
        (NULL, 4, 151, 1, NOW(), NOW()),
        (NULL, 4, 152, 1, NOW(), NOW()),
        (NULL, 4, 153, 1, NOW(), NOW()),
        (NULL, 4, 154, 1, NOW(), NOW()),
        (NULL, 4, 155, 1, NOW(), NOW()),
        (NULL, 4, 156, 1, NOW(), NOW()),
        (NULL, 4, 167, 1, NOW(), NOW()),
        (NULL, 4, 168, 1, NOW(), NOW()),
        (NULL, 4, 169, 1, NOW(), NOW()),
        (NULL, 4, 170, 1, NOW(), NOW()),
        (NULL, 4, 171, 1, NOW(), NOW()),
        (NULL, 4, 172, 1, NOW(), NOW()),
        (NULL, 4, 173, 1, NOW(), NOW()),
        (NULL, 4, 174, 1, NOW(), NOW()),
        (NULL, 4, 175, 1, NOW(), NOW()),
        (NULL, 4, 187, 1, NOW(), NOW()),
        (NULL, 4, 188, 1, NOW(), NOW()),
        (NULL, 4, 189, 1, NOW(), NOW()),
        (NULL, 5, 1, 1, NOW(), NOW()),
        (NULL, 5, 2, 1, NOW(), NOW()),
        (NULL, 5, 9, 1, NOW(), NOW()),
        (NULL, 5, 34, 1, NOW(), NOW()),
        (NULL, 5, 35, 1, NOW(), NOW()),
        (NULL, 5, 36, 1, NOW(), NOW()),
        (NULL, 5, 37, 1, NOW(), NOW()),
        (NULL, 5, 76, 1, NOW(), NOW()),
        (NULL, 5, 77, 1, NOW(), NOW()),
        (NULL, 5, 78, 1, NOW(), NOW()),
        (NULL, 5, 79, 1, NOW(), NOW()),
        (NULL, 5, 80, 1, NOW(), NOW()),
        (NULL, 5, 81, 1, NOW(), NOW()),
        (NULL, 5, 82, 1, NOW(), NOW()),
        (NULL, 5, 89, 1, NOW(), NOW()),
        (NULL, 5, 91, 1, NOW(), NOW()),
        (NULL, 5, 95, 1, NOW(), NOW()),
        (NULL, 5, 96, 1, NOW(), NOW()),
        (NULL, 5, 97, 1, NOW(), NOW()),
        (NULL, 5, 98, 1, NOW(), NOW()),
        (NULL, 5, 118, 1, NOW(), NOW()),
        (NULL, 5, 119, 1, NOW(), NOW()),
        (NULL, 5, 123, 1, NOW(), NOW()),
        (NULL, 5, 167, 1, NOW(), NOW()),
        (NULL, 5, 174, 1, NOW(), NOW()),
        (NULL, 5, 187, 1, NOW(), NOW()),
        (NULL, 5, 188, 1, NOW(), NOW()),
        (NULL, 5, 189, 1, NOW(), NOW()),
        (NULL, 5, 190, 1, NOW(), NOW()),
        (NULL, 5, 191, 1, NOW(), NOW()),
        (NULL, 5, 192, 1, NOW(), NOW()),
        (NULL, 5, 193, 1, NOW(), NOW()),
        (NULL, 5, 194, 1, NOW(), NOW()),
        (NULL, 5, 195, 1, NOW(), NOW()),
        (NULL, 5, 196, 1, NOW(), NOW()),
        (NULL, 5, 197, 1, NOW(), NOW()),
        (NULL, 6, 100, 1, NOW(), NOW()),
        (NULL, 6, 178, 1, NOW(), NOW()),
        (NULL, 6, 184, 1, NOW(), NOW()),
        (NULL, 7, 100, 1, NOW(), NOW()),
        (NULL, 7, 178, 1, NOW(), NOW()),
        (NULL, 7, 184, 1, NOW(), NOW()),
        (NULL, 8, 100, 1, NOW(), NOW()),
        (NULL, 8, 178, 1, NOW(), NOW()),
        (NULL, 8, 184, 1, NOW(), NOW()),
        (NULL, 9, 100, 1, NOW(), NOW()),
        (NULL, 9, 101, 1, NOW(), NOW()),
        (NULL, 9, 106, 1, NOW(), NOW()),
        (NULL, 9, 134, 1, NOW(), NOW()),
        (NULL, 9, 184, 1, NOW(), NOW())");

        DB::table("user_stores")->insert([
            ['user_id' => $manager_user_id,'store_id' => $store_1,'created_by' => '1','created_at' => NOW(),'updated_at' => NOW()],
            ['user_id' => $manager_user_id,'store_id' => $store_2,'created_by' => '1','created_at' => NOW(),'updated_at' => NOW()],
            ['user_id' => $manager_user_id,'store_id' => $store_3,'created_by' => '1','created_at' => NOW(),'updated_at' => NOW()],
            ['user_id' => $manager_user_id,'store_id' => $store_4,'created_by' => '1','created_at' => NOW(),'updated_at' => NOW()],
            ['user_id' => $manager_user_id,'store_id' => $store_5,'created_by' => '1','created_at' => NOW(),'updated_at' => NOW()],

            ['user_id' => $accounts_manager_user_id,'store_id' => $store_1,'created_by' => '1','created_at' => NOW(),'updated_at' => NOW()],
            ['user_id' => $accounts_manager_user_id,'store_id' => $store_2,'created_by' => '1','created_at' => NOW(),'updated_at' => NOW()],
            ['user_id' => $accounts_manager_user_id,'store_id' => $store_3,'created_by' => '1','created_at' => NOW(),'updated_at' => NOW()],
            ['user_id' => $accounts_manager_user_id,'store_id' => $store_4,'created_by' => '1','created_at' => NOW(),'updated_at' => NOW()],
            ['user_id' => $accounts_manager_user_id,'store_id' => $store_5,'created_by' => '1','created_at' => NOW(),'updated_at' => NOW()],
            
            ['user_id' => $cashier_user_id,'store_id' => $store_1,'created_by' => '1','created_at' => NOW(),'updated_at' => NOW()],
            ['user_id' => $cashier_user_id,'store_id' => $store_2,'created_by' => '1','created_at' => NOW(),'updated_at' => NOW()],
            ['user_id' => $cashier_user_id,'store_id' => $store_3,'created_by' => '1','created_at' => NOW(),'updated_at' => NOW()],

            ['user_id' => $waiter_user_id_1,'store_id' => $store_1,'created_by' => '1','created_at' => NOW(),'updated_at' => NOW()],
            ['user_id' => $waiter_user_id_1,'store_id' => $store_2,'created_by' => '1','created_at' => NOW(),'updated_at' => NOW()],
            ['user_id' => $waiter_user_id_1,'store_id' => $store_3,'created_by' => '1','created_at' => NOW(),'updated_at' => NOW()],
            ['user_id' => $waiter_user_id_1,'store_id' => $store_4,'created_by' => '1','created_at' => NOW(),'updated_at' => NOW()],
            ['user_id' => $waiter_user_id_1,'store_id' => $store_5,'created_by' => '1','created_at' => NOW(),'updated_at' => NOW()],

            ['user_id' => $waiter_user_id_2,'store_id' => $store_1,'created_by' => '1','created_at' => NOW(),'updated_at' => NOW()],
            ['user_id' => $waiter_user_id_2,'store_id' => $store_2,'created_by' => '1','created_at' => NOW(),'updated_at' => NOW()],
            ['user_id' => $waiter_user_id_2,'store_id' => $store_3,'created_by' => '1','created_at' => NOW(),'updated_at' => NOW()],
            ['user_id' => $waiter_user_id_2,'store_id' => $store_4,'created_by' => '1','created_at' => NOW(),'updated_at' => NOW()],
            ['user_id' => $waiter_user_id_2,'store_id' => $store_5,'created_by' => '1','created_at' => NOW(),'updated_at' => NOW()],

            ['user_id' => $waiter_user_id_3,'store_id' => $store_1,'created_by' => '1','created_at' => NOW(),'updated_at' => NOW()],
            ['user_id' => $waiter_user_id_3,'store_id' => $store_2,'created_by' => '1','created_at' => NOW(),'updated_at' => NOW()],
            ['user_id' => $waiter_user_id_3,'store_id' => $store_3,'created_by' => '1','created_at' => NOW(),'updated_at' => NOW()],
            ['user_id' => $waiter_user_id_3,'store_id' => $store_4,'created_by' => '1','created_at' => NOW(),'updated_at' => NOW()],
            ['user_id' => $waiter_user_id_3,'store_id' => $store_5,'created_by' => '1','created_at' => NOW(),'updated_at' => NOW()],

            ['user_id' => $chef_user_id,'store_id' => $store_1,'created_by' => '1','created_at' => NOW(),'updated_at' => NOW()],
            ['user_id' => $chef_user_id,'store_id' => $store_2,'created_by' => '1','created_at' => NOW(),'updated_at' => NOW()],
        ]);

        DB::insert("INSERT INTO `discount_codes` VALUES
        (NULL, 'BJG7srxA6sntdyRZlSuAYEhln', 1, 'Discount 5%', 'DISCOUNT5', '5.00', '', 1, 1, NULL, '2020-03-10 11:02:14', '2020-03-10 11:02:14'),
        (NULL, 'iIHzNpSGsBJG0NJfNE1lAGXcz', 2, 'Discount 5%', 'DISCOUNT5', '5.00', '', 1, 1, NULL, '2020-03-10 11:02:14', '2020-03-10 11:02:14'),
        (NULL, 'BJG7srxA6sntdyRZlSuAYE2E3', 3, 'Discount 5%', 'DISCOUNT5', '5.00', '', 1, 1, NULL, '2020-03-10 11:02:14', '2020-03-10 11:02:14'),
        (NULL, 'iIHzNpSGsBJG0NJfNE1lAGiUY', 4, 'Discount 5%', 'DISCOUNT5', '5.00', '', 1, 1, NULL, '2020-03-10 11:02:14', '2020-03-10 11:02:14'),
        (NULL, 'iIHzNpSGsBJG0NJfNE1lAGiVC', 5, 'Discount 5%', 'DISCOUNT5', '5.00', '', 1, 1, NULL, '2020-03-10 11:02:14', '2020-03-10 11:02:14')");

        DB::insert("INSERT INTO `tax_codes` VALUES
        (NULL, 'bZHz4YfWmYRpozFqRdhiiSAko', 1, 'Tax 7.5%', 'TAX75', '7.50', '', 1, 1, NULL, '2020-03-10 11:02:14', '2020-03-10 11:02:14'),
        (NULL, 'ul9fONoVjmBJWcBGEv7RVTsO0', 2, 'GST Tax', 'GST', '7.00', NULL, 1, 1, 1, '2020-03-10 11:02:14', '2020-03-10 11:04:12'),
        (NULL, 'yaXOLmFhzCUetYRwDtuuK8O8B', 3, 'Tax', 'TAX', '6.50', NULL, 1, 1, NULL, '2020-03-10 11:07:11', '2020-03-10 11:07:11'),
        (NULL, 'JUd4U9ddHa6kAB3d7wDVSoWAA', 4, 'Tax', 'TAX', '5.50', NULL, 1, 1, NULL, '2020-03-10 11:07:40', '2020-03-10 11:07:40'),
        (NULL, 'onyZTAozLdZmzhJcRv9BB1cxq', 5, 'Tax', 'TAX', '10.00', NULL, 1, 1, NULL, '2020-03-10 11:08:13', '2020-03-10 11:08:13'),
        (NULL, 'ontZTAozLdZmzhJcRv9BB1cxr', 1, 'Tax 0', 'TAX0', '0', NULL, 1, 1, NULL, '2020-03-10 11:08:13', '2020-03-10 11:08:13'),
        (NULL, 'ontZTAozLdZmzhJcRv9BB1cxw', 2, 'Tax 0', 'TAX0', '0', NULL, 1, 1, NULL, '2020-03-10 11:08:13', '2020-03-10 11:08:13'),
        (NULL, 'ontZT3ozLdZmzhJcRv9BB1cxq', 3, 'Tax 0', 'TAX0', '0', NULL, 1, 1, NULL, '2020-03-10 11:08:13', '2020-03-10 11:08:13'),
        (NULL, 'ontZT2ozLdZmzhJcRv9BB1cxy', 4, 'Tax 0', 'TAX0', '0', NULL, 1, 1, NULL, '2020-03-10 11:08:13', '2020-03-10 11:08:13'),
        (NULL, 'ontZT1ozLdZmzhJcRv9BB1cxn', 5, 'Tax 0', 'TAX0', '0', NULL, 1, 1, NULL, '2020-03-10 11:08:13', '2020-03-10 11:08:13')");
        

        DB::insert("INSERT INTO `tax_code_type` VALUES
        (NULL, 1, 'GST', '7.50', 1, '2020-03-10 11:02:14', NULL),
        (NULL, 2, 'CGST', '3.50', 1, '2020-03-10 11:04:12', '2020-03-10 11:04:12'),
        (NULL, 2, 'SGST', '3.50', 1, '2020-03-10 11:04:12', '2020-03-10 11:04:12'),
        (NULL, 3, 'TAX', '6.50', 1, '2020-03-10 11:07:11', '2020-03-10 11:07:11'),
        (NULL, 4, 'TAX', '5.50', 1, '2020-03-10 11:07:40', '2020-03-10 11:07:40'),
        (NULL, 5, 'TAX', '10.00', 1, '2020-03-10 11:08:13', '2020-03-10 11:08:13'),
        (NULL, 6, 'TAX', '0', 1, '2020-03-10 11:02:14', '2020-03-10 11:02:14'),
        (NULL, 7, 'TAX', '0', 2, '2020-03-10 11:02:14', '2020-03-10 11:02:14'),
        (NULL, 8, 'TAX', '0', 3, '2020-03-10 11:02:14', '2020-03-10 11:02:14'),
        (NULL, 9, 'TAX', '0', 4, '2020-03-10 11:02:14', '2020-03-10 11:02:14'),
        (NULL, 10, 'TAX', '0', 5, '2020-03-10 11:02:14', '2020-03-10 11:02:14')");

        
        DB::table("payment_methods")->insert([
            "slack" => $base_controller->generate_slack("payment_methods"),
            "label" => Str::title("Cash"),
            "description" => "Cash Payment",
            "status" => 1,
            "created_at" => NOW(),
            "updated_at" => NOW(),
            "created_by" => 1
        ]);

        DB::table("payment_methods")->insert([
            "slack" => $base_controller->generate_slack("payment_methods"),
            "label" => Str::title("Card"),
            "description" => "Card Payment",
            "status" => 1,
            "created_at" => NOW(),
            "updated_at" => NOW(),
            "created_by" => 1
        ]);

        for ($i = 0; $i < 200; $i++) {
            $firstname = $faker->firstName;
            $lastname = $faker->lastName;
            DB::table('customers')->insert([
                'slack' => $base_controller->generate_slack("customers"),
                'customer_type' => 'CUSTOM',
                'name' => $firstname ." ".$lastname,
                'email' => $faker->unique()->email,
                'phone' => $faker->e164PhoneNumber,
                'address' => $faker->address,
                'status' => 1,
                'created_by' => 1,
                'created_at' => NOW(),
                'updated_at' => NOW()
            ]);
        }

        $active_stores = StoreModel::select('id')
        ->active()
        ->get();

        if(count($active_stores)>0){
            foreach ($active_stores as $active_store) {

                $account_exists = AccountModel::select('id')
                ->where('store_id', '=', trim($active_store->id))
                ->first();
                if (empty($account_data_exists)) {
                    
                    $account = [
                        "slack" => $base_controller->generate_slack("accounts"),
                        "store_id" => $active_store->id,
                        "account_code" => Str::random(6),
                        "account_type" => 1,
                        "label" => 'Default Sales Account',
                        "description" => 'Default Sales Account',
                        "initial_balance" => 0,
                        "pos_default" => 1,
                        "status" => 1,
                        "created_by" => 1
                    ];
                    
                    $account_id = AccountModel::create($account)->id;
                    
                    $code_start_config = Config::get('constants.unique_code_start.account');
                    $code_start = (isset($code_start_config))?$code_start_config:100;
                    
                    $account_code = [
                        "account_code" => ($code_start+$account_id)
                    ];

                    AccountModel::withoutGlobalScopes()->where('id', $account_id)
                    ->update($account_code);
                }

                $supplier = [
                    "slack" => $base_controller->generate_slack("suppliers"),
                    "store_id" => $active_store->id,
                    "supplier_code" => Str::random(6),
                    "name" => "Food Mart Co. Ltd.",
                    "address" => $faker->address,
                    "phone" => $faker->e164PhoneNumber,
                    "email" => $faker->unique()->email,
                    "pincode" => '11111',
                    "status" => 1,
                    "created_by" => 1
                ];
                
                $supplier_id = SupplierModel::create($supplier)->id;
    
                $code_start_config = Config::get('constants.unique_code_start.supplier');
                $code_start = (isset($code_start_config))?$code_start_config:100;
                
                $supplier_code = [
                    "supplier_code" => "SUP".($code_start+$supplier_id)
                ];
                SupplierModel::withoutGlobalScopes()->where('id', $supplier_id)
                ->update($supplier_code);
                
                for($j = 0; $j <= 100; $j++){
                    $supplier = [
                        "slack" => $base_controller->generate_slack("suppliers"),
                        "store_id" => $active_store->id,
                        "supplier_code" => Str::random(6),
                        "name" => $faker->catchPhrase,
                        "address" => $faker->address,
                        "phone" => $faker->e164PhoneNumber,
                        "email" => $faker->unique()->email,
                        "pincode" => '11111',
                        "status" => 1,
                        "created_by" => 1
                    ];
                    
                    $supplier_id = SupplierModel::create($supplier)->id;
        
                    $code_start_config = Config::get('constants.unique_code_start.supplier');
                    $code_start = (isset($code_start_config))?$code_start_config:100;
                    
                    $supplier_code = [
                        "supplier_code" => "SUP".($code_start+$supplier_id)
                    ];
                    SupplierModel::withoutGlobalScopes()->where('id', $supplier_id)
                    ->update($supplier_code);
                }

                $target_month = date("Y-01-01");

                for($k = 0; $k < 12; $k++){
                    $target = [
                        "slack" => $base_controller->generate_slack("targets"),
                        "store_id" => $active_store->id,
                        "month" => $target_month,
                        "income" => 99999,
                        "expense" => 99999,
                        "sales" => 99999,
                        "net_profit" => 99999,
                        "created_by" => 1
                    ];
                    
                    $target_id = TargetModel::create($target)->id;

                    $target_month = new Carbon($target_month);
                    $target_month->addMonths(1);
                    $target_month = date("Y-m-d", strtotime($target_month));
                    
                }

                $categories = [
                    "Quick Bites" => [
                        [
                            "item" => "Nutella Cake",
                            "price" => 12.95
                        ],
                        [
                            "item" => "Broccoli with Almonds",
                            "price" => 5.95
                        ],
                        [
                            "item" => "Raw Mango Salad",
                            "price" => 8.95
                        ],
                        [
                            "item" => "Fresh Fruit Dessert",
                            "price" => 12.95
                        ],
                        [
                            "item" => "Sweet Corn Chaat",
                            "price" => 5.95
                        ],
                        [
                            "item" => "Croque Monsieur",
                            "price" => 12.95
                        ],
                    ],
                    "Pizza & Pasta" => [
                        [
                            "item" => "Neapolitan Pizza",
                            "price" => 12.95
                        ],
                        [
                            "item" => "Chicago Pizza",
                            "price" => 12.95
                        ],
                        [
                            "item" => "New York-Style Pizza",
                            "price" => 12.95
                        ],
                        [
                            "item" => "Sicilian Pizza",
                            "price" => 21.95
                        ],
                        [
                            "item" => "Greek Pizza",
                            "price" => 11.95
                        ],
                        [
                            "item" => "California Pizza",
                            "price" => 25.95
                        ],
                        [
                            "item" => "Detroit Pizza",
                            "price" => 23.95
                        ],
                        [
                            "item" => "St. Louis Pizza",
                            "price" => 22.95
                        ]
                    ],
                    "Indian Veg" => [
                        [
                            "item" => "Aloo methi",
                            "price" => 12.95
                        ],
                        [
                            "item" => "Aloo shimla mirch",
                            "price" => 12.95
                        ],
                        [
                            "item" => "Amritsari kulcha",
                            "price" => 12.95
                        ],
                        [
                            "item" => "Dal",
                            "price" => 21.95
                        ],
                        [
                            "item" => "Dum aloo",
                            "price" => 11.95
                        ],
                        [
                            "item" => "French bean aloo",
                            "price" => 16.95
                        ],
                    ],
                    "Indian Non Veg" => [
                        [
                            "item" => "Malabar Fish Biryani",
                            "price" => 22.95
                        ],
                        [
                            "item" => "Keema Samosa with Yoghurt Dip",
                            "price" => 15.95
                        ],
                        [
                            "item" => "Curried Parmesan Fish Fingers",
                            "price" => 12.95
                        ],
                        [
                            "item" => "Chicken 65",
                            "price" => 22.95
                        ],
                        [
                            "item" => "Goan Prawn Curry With Raw Mango",
                            "price" => 32.95
                        ],
                        [
                            "item" => "Butter Chicken",
                            "price" => 32.95
                        ],
                        [
                            "item" => "Pomfret Fish Recipe",
                            "price" => 22.95
                        ],
                        [
                            "item" => "Egg Bhurji Masala",
                            "price" => 32.95
                        ],
                        [
                            "item" => "Mini Chicken Quiche Recipe",
                            "price" => 17.95
                        ],
                    ],
                    "Desserts" => [
                        [
                            "item" => "Apple Crumble",
                            "price" => 6.95
                        ],
                        [
                            "item" => "Eton Mess",
                            "price" => 5.95
                        ],
                        [
                            "item" => "Salted Caramel Brownie",
                            "price" => 4.95
                        ],
                        [
                            "item" => "Chocolate Lava Cake",
                            "price" => 3.95
                        ],
                        [
                            "item" => "Mango Panna Cotta",
                            "price" => 3.95
                        ],
                        [
                            "item" => "Gulab Jamun With Ice Cream",
                            "price" => 3.95
                        ],
                    ],
                    "Platters" => [
                        [
                            "item" => "Vegetarian Mezze Platter.",
                            "price" => 40.95
                        ],
                        [
                            "item" => "Cheese and Meat Board",
                            "price" => 30
                        ],
                        [
                            "item" => "Mediterranean Bruschetta Hummus Platter",
                            "price" => 30.55
                        ],
                        [
                            "item" => "The Ultimate Vegan Appetizer Platter",
                            "price" => 30
                        ],
                        [
                            "item" => "Date Night Dessert Fondue Platter for Two",
                            "price" => 50.55
                        ],
                    ],
                    "Regional" => [
                        [
                            "item" => "American chop suey",
                            "price" => 9.95
                        ],
                        [
                            "item" => "American goulash",
                            "price" => 9.95
                        ],
                        [
                            "item" => "Aloo gobi",
                            "price" => 3.95
                        ],
                        [
                            "item" => "Aloo tikki",
                            "price" => 5.95
                        ],
                        [
                            "item" => "Aloo matar",
                            "price" => 7.95
                        ],
                    ],
                    "Salads and Soup" => [
                        [
                            "item" => "Caesar Selections",
                            "price" => 9.95
                        ],
                        [
                            "item" => "Spinach Salad",
                            "price" => 7.95
                        ],
                        [
                            "item" => "Lobster Bisque",
                            "price" => 5.59
                        ],
                        [
                            "item" => "Traditional New England Seafood Chowder",
                            "price" => 7.95
                        ],
                        [
                            "item" => "French Onion Soup",
                            "price" => 3.95
                        ],
                        [
                            "item" => "Greek Salad",
                            "price" => 3.95
                        ],
                        [
                            "item" => "Chicken Salad",
                            "price" => 5.95
                        ],
                    ],
                    "From The Barnyard" => [
                        [
                            "item" => "Traditional Filet Mignon",
                            "price" => 26.95
                        ],
                        [
                            "item" => "Bacon Bourbon Tenderloin Tips",
                            "price" => 19.95
                        ],
                        [
                            "item" => "Rustlers Ribeye",
                            "price" => 23.95
                        ],
                        [
                            "item" => "Surf and Turf",
                            "price" => 28.95
                        ],
                        [
                            "item" => "Roast Pork Loin",
                            "price" => 21.95
                        ],
                        [
                            "item" => "Veal Saltimbocca",
                            "price" => 19.95
                        ],
                    ],
                    "From the Hen House" => [
                        [
                            "item" => "A.D.’s Chicken Saltimbocca",
                            "price" => 19.95
                        ],
                        [
                            "item" => "Emeril’s Chicken",
                            "price" => 19.95
                        ],
                        [
                            "item" => "Chicken Scampi Roja",
                            "price" => 19.95
                        ],
                        [
                            "item" => "Traditional Chicken Scampi",
                            "price" => 17.95
                        ],
                        [
                            "item" => "Chicken Marsala",
                            "price" => 16.95
                        ],
                        [
                            "item" => "Chicken Picatta",
                            "price" => 16.95
                        ],
                    ],
                    "Fresh From The Sea" => [
                        [
                            "item" => "Seafood Sauté or Alfredo",
                            "price" => 22.95
                        ],
                        [
                            "item" => "Sautéed Seafood Caprese",
                            "price" => 22.95
                        ],
                        [
                            "item" => "Shrimp Scampi Roja",
                            "price" => 17.95
                        ],
                        [
                            "item" => "Traditional Shrimp Scampi",
                            "price" => 11.95
                        ],
                        [
                            "item" => "Beer-Battered Seafood Platter",
                            "price" => 12.95
                        ],
                        [
                            "item" => "Baked Stuffed Seafood Selection",
                            "price" => 17.95
                        ],
                        [
                            "item" => "Simply Broiled Seafood Selection",
                            "price" => 13.95
                        ],
                    ],
                    "Ingredients" => [
                        [
                            "item" => "Raw Kale Leaves",
                            "price" => 2
                        ],
                        [
                            "item" => "Onion",
                            "price" => 1
                        ],
                        [
                            "item" => "Blueberries",
                            "price" => 1
                        ],
                        [
                            "item" => "Table Salt",
                            "price" => 1
                        ],
                        [
                            "item" => "Chicken",
                            "price" => 3
                        ],
                        [
                            "item" => "Oil",
                            "price" => 2
                        ],
                        [
                            "item" => "Black pepper",
                            "price" => 0.5
                        ],
                        [
                            "item" => "Garlic",
                            "price" => 0.5
                        ],
                        [
                            "item" => "Lemon",
                            "price" => 0.5
                        ],
                        [
                            "item" => "Sugar",
                            "price" => 0.5
                        ],
                    ],
                    "Add-ons" => [
                        [
                            "item" => "Regular Bun",
                            "price" => 3.05,
                            "addon" => 1
                        ],
                        [
                            "item" => "Whole Wheat Bun",
                            "price" => 3.25,
                            "addon" => 1
                        ],
                        [
                            "item" => "Regular Fries",
                            "price" => 2.05,
                            "addon" => 1
                        ],
                        [
                            "item" => "Cheese Slice",
                            "price" => 3.45,
                            "addon" => 1
                        ],
                        [
                            "item" => "Ketchup",
                            "price" => 5.05,
                            "addon" => 1
                        ],
                        [
                            "item" => "Coke",
                            "price" => 5.00,
                            "addon" => 1
                        ],
                        [
                            "item" => "Latte",
                            "price" => 6.00,
                            "addon" => 1
                        ],
                        [
                            "item" => "Cappuccino",
                            "price" => 5.50,
                            "addon" => 1
                        ],
                        [
                            "item" => "Sweet Potato Fries",
                            "price" => 1.50,
                            "addon" => 1
                        ],
                        [
                            "item" => "Lettuce",
                            "price" => 2.50,
                            "addon" => 1
                        ],
                        [
                            "item" => "Pickles",
                            "price" => 3.50,
                            "addon" => 1
                        ],
                        [
                            "item" => "Extra Cheese",
                            "price" => 3.50,
                            "addon" => 1
                        ],
                        [
                            "item" => "Jam",
                            "price" => 0.50,
                            "addon" => 1
                        ],
                        [
                            "item" => "Cheese",
                            "price" => 1.50,
                            "addon" => 1
                        ],
                    ]
                ];
                
                foreach($categories as $category_key => $category_item){
                    $category = [
                        "slack" => $base_controller->generate_slack("category"),
                        "store_id" => $active_store->id,
                        "category_code" => Str::random(6),
                        "label" => $category_key,
                        "description" => 'Sample Category',
                        "status" => 1,
                        "created_by" => 1
                    ];
                    
                    $category_id = CategoryModel::create($category)->id;
        
                    $code_start_config = Config::get('constants.unique_code_start.category');
                    $code_start = (isset($code_start_config))?$code_start_config:100;
                    
                    $category_code = [
                        "category_code" => "CAT".($code_start+$category_id)
                    ];
                    CategoryModel::withoutGlobalScopes()->where('id', $category_id)
                    ->update($category_code);

                    $supplier = SupplierModel::withoutGlobalScopes()->select("id")->where('store_id', $active_store->id)->first();
                    $taxcode = TaxcodeModel::withoutGlobalScopes()->select("id")->where('store_id', $active_store->id)->first();
                    $discountcode = DiscountcodeModel::withoutGlobalScopes()->select("id")->where('store_id', $active_store->id)->first();

                    $taxcode_zero = TaxcodeModel::withoutGlobalScopes()->select("id")->where([
                        ['store_id', '=', $active_store->id],
                        ['tax_code', '=', 'TAX0'],
                    ])->first();

                    foreach($category_item as $category_item_data){
                        $product = [
                            "slack" => $base_controller->generate_slack("products"),
                            "store_id" => $active_store->id,
                            "name" => $category_item_data['item'],
                            "product_code" => strtoupper(Str::random(4)),
                            "description" => '',
                            "category_id" => $category_id,
                            "supplier_id" => (isset($supplier))?$supplier->id:NULL,
                            "tax_code_id" => ($category_key == 'Ingredients')?$taxcode_zero->id:((isset($taxcode))?$taxcode->id:NULL),
                            "discount_code_id" => (isset($discountcode))?$discountcode->id:NULL,
                            "quantity" => 99999,
                            "purchase_amount_excluding_tax" => abs($category_item_data['price']-1),
                            "sale_amount_excluding_tax" => $category_item_data['price'],
                            "is_ingredient" => ($category_key == 'Ingredients')?1:0,
                            "is_addon_product" => (isset($category_item_data['addon']) && $category_item_data['addon'] == 1)?1:0,
                            "status" => 1,
                            "created_by" => 1
                        ];
                        
                        $product_id = ProductModel::withoutGlobalScopes()->create($product)->id;

                        $product_image_array = [
                            "slack" => $base_controller->generate_slack("product_images"),
                            "product_id" => $product_id,
                            "filename" => 'placeholder_image.png',
                            "status" => 1,
                            "created_by" => 1
                        ];
                        
                        $product_image_id = ProductImagesModel::create($product_image_array)->id;
                    }
                }

                $addon_group_array = [
                    'Extra Fillings', 'Extra Add-on', 'Choose Your Add-on'
                ];

                $addon_products = ProductModel::withoutGlobalScopes()->where('store_id', $active_store->id)->where('is_addon_product', 1)->pluck('id')->chunk(3);

                foreach($addon_group_array as $key => $addon_group_array_item){
                    $addon_group = [
                        "slack" => $base_controller->generate_slack("addon_groups"),
                        "store_id" => $active_store->id,
                        "addon_group_code" => strtoupper(Str::random(6)),
                        "label" => $addon_group_array_item,
                        "multiple_selection" => 1,
                        "status" => 1,
                        "created_by" => 1
                    ];
                    
                    $addon_group_id = AddonGroupModel::create($addon_group)->id;
        
                    $code_start_config = Config::get('constants.unique_code_start.addon_group');
                    $code_start = (isset($code_start_config))?$code_start_config:100;
                    
                    $addon_group_code = [
                        "addon_group_code" => 'AOG'.($code_start+$addon_group_id)
                    ];
                    AddonGroupModel::withoutGlobalScopes()->where('id', $addon_group_id)
                    ->update($addon_group_code);

                    $addon_product_data_array = [];
                    foreach($addon_products[$key] as $ckey => $addon_product_chunk){
                        $addon_product_data_array[] = [
                            "addon_group_id" => $addon_group_id,
                            "product_id" => $addon_product_chunk,
                            "created_by" => 1
                        ];
                    }

                    if(!empty($addon_product_data_array) && count($addon_product_data_array)>0){
                        foreach($addon_product_data_array as $addon_product_data_array_item){
                            AddonGroupProductModel::create($addon_product_data_array_item);
                        }
                    }
                }

                $addon_groups = AddonGroupModel::withoutGlobalScopes()->where('store_id', $active_store->id)->active()->get();

                $billing_products = ProductModel::withoutGlobalScopes()->where('store_id', $active_store->id)->mainProduct()->pluck('id');

                foreach($billing_products as $billing_product_item){

                    $product_addon_group_array = [];
                    if(!empty($addon_groups)){
                        
                        foreach($addon_groups as $key => $addon_group_item){
                            $product_addon_group_array[] = [
                                "product_id" => $billing_product_item,
                                "addon_group_id" => $addon_group_item->id,
                                "created_by" => 1
                            ];
                        }
                    }
                    if(!empty($product_addon_group_array) && count($product_addon_group_array)>0){
                        foreach($product_addon_group_array as $product_addon_group_array_item){
                            ProductAddonGroupModel::create($product_addon_group_array_item);
                        }
                    }
                }
                
                for($k=1; $k<=19; $k++){ 
                    $table = [
                        "slack" => $base_controller->generate_slack("restaurant_tables"),
                        "store_id" => $active_store->id,
                        "table_number" => 'Table '.$k,
                        "no_of_occupants" => 5,
                        "status" => 1,
                        "created_by" => 1
                    ];
                    
                    $table_id = TableModel::create($table)->id;
                }

                for($j = 1; $j <= 6; $j++){
                    $billing_counter = [
                        "slack" => $base_controller->generate_slack("billing_counters"),
                        "store_id" => $active_store->id,
                        "billing_counter_code" => "C".$j,
                        "counter_name" => "Bill Counter ".$j,
                        "description" => '',
                        "status" => 1,
                        "created_by" => 1
                    ];
                    
                    $billing_counter_id = BillingCounterModel::create($billing_counter)->id;
                }
                
            }
        }
        
        DB::insert("INSERT INTO `invoices` (`id`, `slack`, `store_id`, `invoice_number`, `invoice_reference`, `invoice_date`, `invoice_due_date`, `bill_to`, `bill_to_id`, `bill_to_code`, `bill_to_name`, `bill_to_email`, `bill_to_contact`, `bill_to_address`, `currency_name`, `currency_code`, `tax_option_id`, `subtotal_excluding_tax`, `total_discount_amount`, `total_after_discount`, `total_tax_amount`, `shipping_charge`, `packing_charge`, `total_order_amount`, `notes`, `terms`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
        (NULL, 'lGhm7WGQSKIDZDEuTjeTj8lx0', 1, '101', '43454343434', '2020-03-01', '2020-05-01', 'SUPPLIER', 1, 'SUP101', 'Food Mart Co. Ltd.', 'garett83@gmail.com', '+4433211975163', '736 Misael Valley Suite 062\nNew Dimitriton, PA 29346,11111', 'Indian rupee', 'INR', 2, '47776.10', '2388.81', '45387.30', '3404.05', '0.00', '0.00', '48791.34', NULL, NULL, 4, 1, 1, NOW(), NOW()),
        (NULL, '5afN6LD2JQxRCilCxCKq3yEiO', 1, '102', '233434234', '2020-03-01', '2020-04-30', 'SUPPLIER', 29, 'SUP129', 'Assimilated dedicated circuit', 'mterry@bechtelar.net', '+8568330844287', '94627 Jonathan Squares\nSantiagobury, VT 47239,11111', 'United States dollar', 'USD', 1, '100000.00', '0.00', '100000.00', '0.00', '0.00', '0.00', '100000.00', NULL, NULL, 1, 1, NULL, NOW(), NOW()),
        (NULL, 'IN55CrXd5ia7cwTz34bTktGUy', 1, '103', '445', '2020-04-01', '2020-04-30', 'CUSTOMER', 10, '', 'Kristin Hansen', 'adrienne16@hotmail.com', '+2482373651240', '4746 Hane Stravenue Apt. 013\nNew Lue, VA 66988', 'Indian rupee', 'INR', 0, '99900.00', '0.00', '99900.00', '0.00', '0.00', '0.00', '99900.00', NULL, NULL, 3, 1, 1, NOW(), NOW())");

        DB::insert("INSERT INTO `invoice_products` (`id`, `slack`, `invoice_id`, `product_id`, `product_slack`, `product_code`, `name`, `quantity`, `amount_excluding_tax`, `subtotal_amount_excluding_tax`, `discount_percentage`, `tax_percentage`, `discount_amount`, `total_after_discount`, `tax_amount`, `tax_components`, `total_amount`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
        (NULL, 'lNlldGhnlxNDKojGeTNo7O85a', 1, 15, 'fxDxSrSRvuwcYX2TBJ83JQKeX', '4WWY', 'Aloo methi', '1999.00', '11.95', '23888.05', '5.00', '7.50', '1194.40', '22693.65', '1702.02', '[{\"name\":\"CGST\",\"tax_percentage\":3.75,\"tax_amount\":\"851.01\"},{\"name\":\"SGST\",\"tax_percentage\":3.75,\"tax_amount\":\"851.01\"}]', '24395.67', 1, 1, NULL, NOW(), NULL),
        (NULL, '8t8T0AmjbhS2K3AnD7kJfR3r0', 1, 16, 'l3Orzuh1LDMP8bLHK1yWDXOdU', '5TQC', 'Aloo shimla mirch', '1999.00', '11.95', '23888.05', '5.00', '7.50', '1194.40', '22693.65', '1702.02', '[{\"name\":\"CGST\",\"tax_percentage\":3.75,\"tax_amount\":\"851.01\"},{\"name\":\"SGST\",\"tax_percentage\":3.75,\"tax_amount\":\"851.01\"}]', '24395.67', 1, 1, NULL, NOW(), NULL),
        (NULL, 'd6IRGFrXrsSnrKmLGGZalpx9O', 2, NULL, NULL, NULL, 'Chairs', '100.00', '1000.00', '100000.00', '0.00', '0.00', '0.00', '100000.00', '0.00', '[{\"name\":\"TAX\",\"tax_percentage\":0,\"tax_amount\":\"0.00\"}]', '100000.00', 1, 1, NULL, NOW(), NULL),
        (NULL, 'O6X0I30rgE2nxhmmFGK3FuZ7m', 3, NULL, NULL, NULL, 'Tables and chair', '999.00', '100.00', '99900.00', '0.00', '0.00', '0.00', '99900.00', '0.00', '', '99900.00', 1, 1, NULL, NOW(), NULL)");

        DB::insert("INSERT INTO `orders` (`id`, `slack`, `store_id`, `order_number`, `customer_id`, `customer_phone`, `customer_email`, `register_id`, `store_level_discount_code_id`, `store_level_discount_code`, `store_level_total_discount_percentage`, `store_level_total_discount_amount`, `product_level_total_discount_amount`, `store_level_tax_code_id`, `store_level_tax_code`, `store_level_total_tax_percentage`, `store_level_total_tax_amount`, `store_level_total_tax_components`, `product_level_total_tax_amount`, `purchase_amount_subtotal_excluding_tax`, `sale_amount_subtotal_excluding_tax`, `total_discount_before_additional_discount`, `total_amount_before_additional_discount`, `additional_discount_percentage`, `additional_discount_amount`, `total_discount_amount`, `total_after_discount`, `total_tax_amount`, `total_order_amount`, `total_order_amount_rounded`, `payment_method_id`, `payment_method_slack`, `payment_method`, `currency_name`, `currency_code`, `business_account_id`, `order_type_id`, `order_type`, `restaurant_mode`, `bill_type_id`, `bill_type`, `table_id`, `table_number`, `waiter_id`, `order_origin`, `status`, `kitchen_status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
        (1, 'aJNsvsUoBwu5aVwwIFwdE2C4k', 1, '101', 1, '0000000000', 'walkincustomer@appsthing.com', NULL, NULL, NULL, '0.00', '0.00', '1.39', NULL, NULL, '0.00', '0.00', NULL, '1.98', '24.85', '27.85', '0.00', '0.00', '0.00', '0.00', '1.39', '26.46', '1.98', '28.44', '28', 3, 'IMLx2jARf3W0ws5ASqlGsnx3C', 'Cash', 'United States dollar', 'USD', 1, 0, '', 0, NULL, NULL, 0, '', NULL, 'POS_WEB', 1, NULL, 1, NULL, '". Carbon::parse(Carbon::now()->subDays(2))->format('Y-m-d H:i:s')."', '". Carbon::parse(Carbon::now()->subDays(2))->format('Y-m-d H:i:s')."'),
        (2, '0xpjaoshttq9ep8dHFT8jotEd', 1, '102', 1, '0000000000', 'walkincustomer@appsthing.com', NULL, NULL, NULL, '0.00', '0.00', '25.40', NULL, NULL, '0.00', '0.00', NULL, '36.19', '492.95', '507.95', '0.00', '0.00', '0.00', '0.00', '25.40', '482.55', '36.19', '518.74', '519', 3, 'IMLx2jARf3W0ws5ASqlGsnx3C', 'Cash', 'United States dollar', 'USD', 1, 0, '', 0, NULL, NULL, 0, '', NULL, 'POS_WEB', 1, NULL, 1, NULL, '". Carbon::parse(Carbon::now()->subDays(3))->format('Y-m-d H:i:s')."', '". Carbon::parse(Carbon::now()->subDays(3))->format('Y-m-d H:i:s')."'),
        (3, '5rByUP9FDF0wqzo22NeF7y9Lu', 1, '103', 1, '0000000000', 'walkincustomer@appsthing.com', NULL, NULL, NULL, '0.00', '0.00', '2.04', NULL, NULL, '0.00', '0.00', NULL, '2.91', '36.80', '40.80', '0.00', '0.00', '0.00', '0.00', '2.04', '38.76', '2.91', '41.67', '42', 4, 'qNKGQ7trZvxHx9tzjMYmdmT8z', 'Card', 'United States dollar', 'USD', 1, 0, '', 0, NULL, NULL, 0, '', NULL, 'POS_WEB', 1, NULL, 1, NULL, '". Carbon::parse(Carbon::now()->subDays(3))->format('Y-m-d H:i:s')."', '". Carbon::parse(Carbon::now()->subDays(3))->format('Y-m-d H:i:s')."'),
        (4, '4NYgciUJrw4NMISY4d4M2Zmuh', 1, '104', 1, '0000000000', 'walkincustomer@appsthing.com', NULL, NULL, NULL, '0.00', '0.00', '1.69', NULL, NULL, '0.00', '0.00', NULL, '2.41', '29.80', '33.80', '0.00', '0.00', '0.00', '0.00', '1.69', '32.11', '2.41', '34.52', '35', 3, 'IMLx2jARf3W0ws5ASqlGsnx3C', 'Cash', 'United States dollar', 'USD', 1, 0, '', 0, NULL, NULL, 0, '', NULL, 'POS_WEB', 1, NULL, 1, NULL, '". Carbon::parse(Carbon::now()->subDays(2))->format('Y-m-d H:i:s')."', '". Carbon::parse(Carbon::now()->subDays(2))->format('Y-m-d H:i:s')."'),
        (5, 'MosniVjKPkHAIs3wo4eUJ1giP', 1, '105', 1, '0000000000', 'walkincustomer@appsthing.com', NULL, NULL, NULL, '0.00', '0.00', '2.07', NULL, NULL, '0.00', '0.00', NULL, '2.95', '35.34', '41.34', '0.00', '0.00', '0.00', '0.00', '2.07', '39.27', '2.95', '42.22', '42', 4, 'qNKGQ7trZvxHx9tzjMYmdmT8z', 'Card', 'United States dollar', 'USD', 1, 0, '', 0, NULL, NULL, 0, '', NULL, 'POS_WEB', 1, NULL, 1, NULL, '". Carbon::parse(Carbon::now()->subDays(2))->format('Y-m-d H:i:s')."', '". Carbon::parse(Carbon::now()->subDays(2))->format('Y-m-d H:i:s')."'),
        (6, 'mJ1DoevALSULFGT0Yjz40Ntdf', 1, '106', 1, '0000000000', 'walkincustomer@appsthing.com', NULL, NULL, NULL, '0.00', '0.00', '0.45', NULL, NULL, '0.00', '0.00', NULL, '0.64', '7.95', '8.95', '0.00', '0.00', '0.00', '0.00', '0.45', '8.50', '0.64', '9.14', '9', 4, 'qNKGQ7trZvxHx9tzjMYmdmT8z', 'Card', 'United States dollar', 'USD', 1, 0, '', 0, NULL, NULL, 0, '', NULL, 'POS_WEB', 1, NULL, 1, NULL, '". Carbon::parse(Carbon::now()->subDays(1))->format('Y-m-d H:i:s')."', '". Carbon::parse(Carbon::now()->subDays(1))->format('Y-m-d H:i:s')."'),
        (7, 'JyeopW0COhb01FkLGgbCv4W3a', 1, '107', 1, '0000000000', 'walkincustomer@appsthing.com', NULL, NULL, NULL, '0.00', '0.00', '1.89', NULL, NULL, '0.00', '0.00', NULL, '2.69', '33.80', '37.80', '0.00', '0.00', '0.00', '0.00', '1.89', '35.91', '2.69', '38.60', '39', 4, 'qNKGQ7trZvxHx9tzjMYmdmT8z', 'Card', 'United States dollar', 'USD', 1, 0, '', 0, NULL, NULL, 0, '', NULL, 'POS_WEB', 1, NULL, 1, NULL, '". Carbon::parse(Carbon::now()->subDays(1))->format('Y-m-d H:i:s')."', '". Carbon::parse(Carbon::now()->subDays(1))->format('Y-m-d H:i:s')."'),
        (8, 'bIjH1I8ltafjLlqun6ILTK8AZ', 1, '108', 1, '0000000000', 'walkincustomer@appsthing.com', NULL, NULL, NULL, '0.00', '0.00', '0.45', NULL, NULL, '0.00', '0.00', NULL, '0.64', '7.95', '8.95', '0.00', '0.00', '0.00', '0.00', '0.45', '8.50', '0.64', '9.14', '9', 0, '', '', 'United States dollar', 'USD', 0, 0, '', 0, NULL, NULL, 0, '', NULL, 'POS_WEB', 2, NULL, 1, NULL, '". Carbon::parse(Carbon::now()->subDays(1))->format('Y-m-d H:i:s')."', '". Carbon::parse(Carbon::now()->subDays(1))->format('Y-m-d H:i:s')."'),
        (9, 'S33pB28LrvZoz2MIN45Y1Z6H7', 1, '109', 1, '0000000000', 'walkincustomer@appsthing.com', NULL, NULL, NULL, '0.00', '0.00', '0.95', NULL, NULL, '0.00', '0.00', NULL, '1.35', '16.90', '18.90', '0.00', '0.00', '0.00', '0.00', '0.95', '17.96', '1.35', '19.30', '19', 3, 'IMLx2jARf3W0ws5ASqlGsnx3C', 'Cash', 'United States dollar', 'USD', 1, 0, '', 0, NULL, NULL, 0, '', NULL, 'POS_WEB', 1, NULL, 1, NULL, '". Carbon::parse(Carbon::now()->subDays(1))->format('Y-m-d H:i:s')."', '". Carbon::parse(Carbon::now()->subDays(1))->format('Y-m-d H:i:s')."'),
        (10, 'cz24gBsspzqdw4dYRLAuMTONj', 1, '110', 1, '0000000000', 'walkincustomer@appsthing.com', NULL, NULL, NULL, '0.00', '0.00', '2.14', NULL, NULL, '0.00', '0.00', NULL, '3.05', '37.75', '42.75', '0.00', '0.00', '0.00', '0.00', '2.14', '40.61', '3.05', '43.66', '44', 3, 'IMLx2jARf3W0ws5ASqlGsnx3C', 'Cash', 'United States dollar', 'USD', 1, 0, '', 0, NULL, NULL, 0, '', NULL, 'POS_WEB', 1, NULL, 1, NULL, '". Carbon::parse(Carbon::now()->subDays(1))->format('Y-m-d H:i:s')."', '". Carbon::parse(Carbon::now()->subDays(1))->format('Y-m-d H:i:s')."'),
        (11, 'HX1JzQwWU46u8qqHAtZNyZFnp', 1, '111', 1, '0000000000', 'walkincustomer@appsthing.com', NULL, NULL, NULL, '0.00', '0.00', '2.24', NULL, NULL, '0.00', '0.00', NULL, '3.19', '40.80', '44.80', '0.00', '0.00', '0.00', '0.00', '2.24', '42.56', '3.19', '45.75', '46', 3, 'IMLx2jARf3W0ws5ASqlGsnx3C', 'Cash', 'United States dollar', 'USD', 1, 0, '', 0, NULL, NULL, 0, '', NULL, 'POS_WEB', 1, NULL, 1, NULL, '". Carbon::parse(Carbon::now()->subDays(1))->format('Y-m-d H:i:s')."', '". Carbon::parse(Carbon::now()->subDays(1))->format('Y-m-d H:i:s')."'),
        (12, 'hXZYwjGbjIta9ctpFFTRuFp4T', 1, '112', 1, '0000000000', 'walkincustomer@appsthing.com', NULL, NULL, NULL, '0.00', '0.00', '6.28', NULL, NULL, '0.00', '0.00', NULL, '8.95', '116.55', '125.55', '0.00', '0.00', '0.00', '0.00', '6.28', '119.27', '8.95', '128.22', '128', 4, 'qNKGQ7trZvxHx9tzjMYmdmT8z', 'Card', 'United States dollar', 'USD', 1, 0, '', 0, NULL, NULL, 0, '', NULL, 'POS_WEB', 1, NULL, 1, NULL, NOW(), NOW()),
        (13, 'ksVcGkFPrnOOp0VnLwS9PMayf', 1, '113', 1, '0000000000', 'walkincustomer@appsthing.com', NULL, NULL, NULL, '0.00', '0.00', '7.62', NULL, NULL, '0.00', '0.00', NULL, '10.85', '139.35', '152.35', '0.00', '0.00', '0.00', '0.00', '7.62', '144.73', '10.85', '155.59', '156', 3, 'IMLx2jARf3W0ws5ASqlGsnx3C', 'Cash', 'United States dollar', 'USD', 1, 0, '', 0, NULL, NULL, 0, '', NULL, 'POS_WEB', 1, NULL, 1, NULL, NOW(), NOW()),
        (14, 'TnyBBpLypePJIy6654lCT8vxN', 1, '114', 1, '0000000000', 'walkincustomer@appsthing.com', NULL, NULL, NULL, '0.00', '0.00', '7.44', NULL, NULL, '0.00', '0.00', NULL, '10.60', '138.79', '148.79', '0.00', '0.00', '0.00', '0.00', '7.44', '141.35', '10.60', '151.95', '152', 3, 'IMLx2jARf3W0ws5ASqlGsnx3C', 'Cash', 'United States dollar', 'USD', 1, 0, '', 0, NULL, NULL, 0, '', NULL, 'POS_WEB', 1, NULL, 1, NULL, NOW(), NOW()),
        (15, 'kKoFeyprOVAg2V9ibsJmOFQpW', 1, '115', 1, '0000000000', 'walkincustomer@appsthing.com', NULL, NULL, NULL, '0.00', '0.00', '2.34', NULL, NULL, '0.00', '0.00', NULL, '3.33', '41.75', '46.75', '0.00', '0.00', '0.00', '0.00', '2.34', '44.41', '3.33', '47.74', '48', 0, '', '', 'United States dollar', 'USD', 0, 2, 'Take Away', 1, NULL, NULL, 0, '', NULL, 'POS_WEB', 5, 2, 1, 1, NOW(), NOW()),
        (16, '2XVGhwFnZb0ZkQbHO2ar5cX0K', 1, '116', 1, '0000000000', 'walkincustomer@appsthing.com', NULL, NULL, NULL, '0.00', '0.00', '2.59', NULL, NULL, '0.00', '0.00', NULL, '3.69', '48.85', '51.85', '0.00', '0.00', '0.00', '0.00', '2.59', '49.26', '3.69', '52.95', '53', 0, '', '', 'United States dollar', 'USD', 0, 3, 'Delivery', 1, NULL, NULL, 0, '', NULL, 'POS_WEB', 5, NULL, 1, NULL, NOW(), NOW()),
        (17, 'VpdV59kP8jMB25SvL3PleGmez', 1, '117', 1, '0000000000', 'walkincustomer@appsthing.com', NULL, NULL, NULL, '0.00', '0.00', '9.55', NULL, NULL, '0.00', '0.00', NULL, '13.61', '184.00', '191.00', '0.00', '0.00', '0.00', '0.00', '9.55', '181.45', '13.61', '195.06', '195', 0, '', '', 'United States dollar', 'USD', 0, 2, 'Take Away', 1, NULL, NULL, 0, '', NULL, 'POS_WEB', 5, 1, 1, 1, NOW(), NOW()),
        (18, 'F2ryTgPu079mpJb3TzIR3IBvn', 1, '118', 1, '0000000000', 'walkincustomer@appsthing.com', NULL, NULL, NULL, '0.00', '0.00', '9.44', NULL, NULL, '0.00', '0.00', NULL, '13.46', '179.85', '188.85', '0.00', '0.00', '0.00', '0.00', '9.44', '179.41', '13.46', '192.86', '193', 0, '', '', 'United States dollar', 'USD', 0, 3, 'Delivery', 1, NULL, NULL, 0, '', NULL, 'POS_WEB', 5, 1, 1, 1, NOW(), NOW()),
        (19, 'sP45WEXHcM3bXmeTgoh1ggv1U', 1, '119', 1, '0000000000', 'walkincustomer@appsthing.com', NULL, NULL, NULL, '0.00', '0.00', '10.73', NULL, NULL, '0.00', '0.00', NULL, '15.28', '204.50', '214.50', '0.00', '0.00', '0.00', '0.00', '10.73', '203.78', '15.28', '219.06', '219', 0, '', '', 'United States dollar', 'USD', 0, 3, 'Delivery', 1, NULL, NULL, 0, '', NULL, 'POS_WEB', 5, 0, 1, 1, NOW(), NOW()),
        (20, 'g66WmsYoHjiILZldO5lvVAGZH', 1, '120', 1, '0000000000', 'walkincustomer@appsthing.com', 1, NULL, NULL, '0.00', '0.00', '192.33', NULL, NULL, '0.00', '0.00', NULL, '0.00', '3642.50', '3846.50', '192.33', '3654.18', '0.00', '0.00', '192.33', '3654.18', '0.00', '3654.18', '3654', 4, 'FxRiJCotKEFkf0Fb49Dgbdv2C', 'Card', 'United States dollar', 'USD', 1, 1, 'Dine In', 1, 2, 'Quick Bill', 1, 'Table 1', 0, 'POS_WEB', 1, 2, 1, NULL, NOW(), NOW()),
        (21, 'mtBHeKg1M1c0wKkmYfLORLTM8', 1, '121', 1, '0000000000', 'walkincustomer@appsthing.com', 1, NULL, NULL, '0.00', '0.00', '224.50', NULL, NULL, '0.00', '0.00', NULL, '0.00', '4190.00', '4490.00', '224.50', '4265.50', '0.00', '0.00', '224.50', '4265.50', '0.00', '4265.50', '4266', 4, 'FxRiJCotKEFkf0Fb49Dgbdv2C', 'Card', 'United States dollar', 'USD', 1, 3, 'Delivery', 1, 2, 'Quick Bill', 0, '', 0, 'POS_WEB', 1, 2, 1, NULL, NOW(), NOW())");

        DB::insert("INSERT INTO `order_products` (`id`, `slack`, `order_id`, `parent_order_product_id`, `product_id`, `product_slack`, `product_code`, `name`, `quantity`, `purchase_amount_excluding_tax`, `sale_amount_excluding_tax`, `discount_code_id`, `discount_code`, `discount_percentage`, `tax_code_id`, `tax_code`, `tax_percentage`, `tax_components`, `sub_total_purchase_price_excluding_tax`, `sub_total_sale_price_excluding_tax`, `discount_amount`, `total_after_discount`, `tax_amount`, `total_amount`, `is_ready_to_serve`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
        (1, 'MgP6rhUmEmhPfBl9n1EUcOMsW', 1, NULL, 1, '5Rr3WuUtLfunIPV5UmSbs2IcP', 'BYAR', 'Nutella Cake', '1.00', '11.95', '12.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.9226874999999999}]', '11.95', '12.95', '0.65', '12.30', '0.92', '13.23', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (2, 'naTNV1a4DjhQA8AhGVosD0Pqj', 1, NULL, 2, 'Bro6frPElUSawNvj9gXUZmN1o', '12GM', 'Broccoli with Almonds', '1.00', '4.95', '5.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.42393749999999997}]', '4.95', '5.95', '0.30', '5.65', '0.42', '6.08', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (3, 'CzIRuHqnB6Ov1Tp2rXmzRDNzD', 1, NULL, 3, '3mdgefOccrbxxRfw9dHlEOICa', '7HUA', 'Raw Mango Salad', '1.00', '7.95', '8.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.6376875}]', '7.95', '8.95', '0.45', '8.50', '0.64', '9.14', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (4, 'ZJdMHgrp7zx0BAXNOnuMezSEX', 2, NULL, 36, 'VJkYlknj7Yuz57kDtiJbj9yOJ', 'AKY1', 'Vegetarian Mezze Platter.', '10.00', '39.95', '40.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":29.176874999999995}]', '399.50', '409.50', '20.48', '389.03', '29.18', '418.20', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (5, 'm1GabTKrzUslj3iG8xi2EEsvH', 2, NULL, 35, 'SyQwTPM8FMKbnIyuXwmFI2wII', '9UCG', 'Gulab Jamun With Ice Cream', '1.00', '2.95', '3.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.2814375}]', '2.95', '3.95', '0.20', '3.75', '0.28', '4.03', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (6, '6NwrQfMAIp18v8KiTUEikUaVt', 2, NULL, 34, 'ZD1wQucg6O0AASNnqKZu8Eakm', 'R5T2', 'Mango Panna Cotta', '1.00', '2.95', '3.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.2814375}]', '2.95', '3.95', '0.20', '3.75', '0.28', '4.03', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (7, 'Pu5zCObyjNEAl2OQWasgNmDT2', 2, NULL, 37, 'r4zLT1L1AxVSCizCYC3J7JpNs', 'I60H', 'Cheese and Meat Board', '1.00', '29.00', '30.00', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":2.1374999999999997}]', '29.00', '30.00', '1.50', '28.50', '2.14', '30.64', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (8, 'QIsYBNWOl7tGFksgn9XitLziX', 2, NULL, 38, 'wBq7eIend65jjTGttkNLvIVks', 'IAQS', 'Mediterranean Bruschetta Hummus Platter', '1.00', '29.55', '30.55', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":2.1766875}]', '29.55', '30.55', '1.53', '29.02', '2.18', '31.20', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (9, 'RvOTdRBYqUZ1BVdnR1ce31jAy', 2, NULL, 39, 'FLBPutzF8HP7wpTaWzFrZuKKD', 'EXTI', 'The Ultimate Vegan Appetizer Platter', '1.00', '29.00', '30.00', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":2.1374999999999997}]', '29.00', '30.00', '1.50', '28.50', '2.14', '30.64', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (10, 'bEhq85w6n64jzVCqG2u7UuvJO', 3, NULL, 1, '5Rr3WuUtLfunIPV5UmSbs2IcP', 'BYAR', 'Nutella Cake', '1.00', '11.95', '12.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.9226874999999999}]', '11.95', '12.95', '0.65', '12.30', '0.92', '13.23', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (11, '0TmdVPd0pSNbWhZYsadtcpdgO', 3, NULL, 2, 'Bro6frPElUSawNvj9gXUZmN1o', '12GM', 'Broccoli with Almonds', '1.00', '4.95', '5.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.42393749999999997}]', '4.95', '5.95', '0.30', '5.65', '0.42', '6.08', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (12, 'BvWQDXMs4j598OOBHDP50wPRg', 3, NULL, 3, '3mdgefOccrbxxRfw9dHlEOICa', '7HUA', 'Raw Mango Salad', '1.00', '7.95', '8.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.6376875}]', '7.95', '8.95', '0.45', '8.50', '0.64', '9.14', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (13, 'DSFfar89d5JZECJZRDvWbeBRf', 3, NULL, 6, 'oqbz6ePnXrJOLNWnkHQCcIzIL', '8COK', 'Croque Monsieur', '1.00', '11.95', '12.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.9226874999999999}]', '11.95', '12.95', '0.65', '12.30', '0.92', '13.23', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (14, 'sYonGAojQ0qgSkKWqOAAWYbAN', 4, NULL, 3, '3mdgefOccrbxxRfw9dHlEOICa', '7HUA', 'Raw Mango Salad', '1.00', '7.95', '8.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.6376875}]', '7.95', '8.95', '0.45', '8.50', '0.64', '9.14', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (15, '80ykGha3Ov7QwfSJe4rN3hC8N', 4, NULL, 6, 'oqbz6ePnXrJOLNWnkHQCcIzIL', '8COK', 'Croque Monsieur', '1.00', '11.95', '12.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.9226874999999999}]', '11.95', '12.95', '0.65', '12.30', '0.92', '13.23', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (16, '6w3F3aRZnKPipqAU4AWzTn7kJ', 4, NULL, 5, 'QBYSYWiUKXzTgmtv0L86qM03E', 'MAV6', 'Sweet Corn Chaat', '1.00', '4.95', '5.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.42393749999999997}]', '4.95', '5.95', '0.30', '5.65', '0.42', '6.08', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (17, 'tuftk37W8vsT874ACNxZqL5rC', 4, NULL, 2, 'Bro6frPElUSawNvj9gXUZmN1o', '12GM', 'Broccoli with Almonds', '1.00', '4.95', '5.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.42393749999999997}]', '4.95', '5.95', '0.30', '5.65', '0.42', '6.08', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (18, 'VW08BdDhIHGImbjeMU9lpgOXG', 5, NULL, 48, 'Td6u8PLy2VPBV36vu4XBEjBNU', 'RUSS', 'Lobster Bisque', '1.00', '4.59', '5.59', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.3982875}]', '4.59', '5.59', '0.28', '5.31', '0.40', '5.71', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (19, 'gXyhaAciAiBxay6gMEygH0J2H', 5, NULL, 47, 'BzRTRJBtyhShb9gKilOgDsGYi', '9MWU', 'Spinach Salad', '1.00', '6.95', '7.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.5664375}]', '6.95', '7.95', '0.40', '7.55', '0.57', '8.12', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (20, 'iIIBezsU7KxVZV4Nf1ERUx4nz', 5, NULL, 46, 'V3T9z9kKZx5LP1BpYft2nJ4Av', 'FZI3', 'Caesar Selections', '1.00', '8.95', '9.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.7089374999999999}]', '8.95', '9.95', '0.50', '9.45', '0.71', '10.16', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (21, 'd9SrVbXAzZPSdCFeVYRlvwBH4', 5, NULL, 43, 'gFqbKGZOCh5mvuc9HKYGKUs8o', '2Q65', 'Aloo gobi', '1.00', '2.95', '3.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.2814375}]', '2.95', '3.95', '0.20', '3.75', '0.28', '4.03', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (22, 'dtwvgGLYd8IU1JsyM96s2Zfo4', 5, NULL, 44, 'O2LbMyDMJCHBsTQzVpP78bweZ', 'OR9R', 'Aloo tikki', '1.00', '4.95', '5.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.42393749999999997}]', '4.95', '5.95', '0.30', '5.65', '0.42', '6.08', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (23, 'XsQO8b2xJ0wSQNQtnY7xRn5oO', 5, NULL, 45, 'B8wyGjuRkZwfAzlmTh46XDfQZ', 'BJCZ', 'Aloo matar', '1.00', '6.95', '7.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.5664375}]', '6.95', '7.95', '0.40', '7.55', '0.57', '8.12', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (24, 'ek6t7jTliNtYVLmzwxZQbsD23', 6, NULL, 3, '3mdgefOccrbxxRfw9dHlEOICa', '7HUA', 'Raw Mango Salad', '1.00', '7.95', '8.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.6376875}]', '7.95', '8.95', '0.45', '8.50', '0.64', '9.14', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (25, 'sjvs8XbRUWXsbAaPpko7CUhTC', 7, NULL, 1, '5Rr3WuUtLfunIPV5UmSbs2IcP', 'BYAR', 'Nutella Cake', '1.00', '11.95', '12.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.9226874999999999}]', '11.95', '12.95', '0.65', '12.30', '0.92', '13.23', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (26, 'WygN08aRKuRUe9fLUjxAU0XaD', 7, NULL, 2, 'Bro6frPElUSawNvj9gXUZmN1o', '12GM', 'Broccoli with Almonds', '1.00', '4.95', '5.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.42393749999999997}]', '4.95', '5.95', '0.30', '5.65', '0.42', '6.08', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (27, '0Y9sTfRgFZoO1kqp9woCszhGc', 7, NULL, 4, 'oZANWgAS6NNOfGkaWEfzeZTL8', '3Q1T', 'Fresh Fruit Dessert', '1.00', '11.95', '12.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.9226874999999999}]', '11.95', '12.95', '0.65', '12.30', '0.92', '13.23', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (28, 'M5JDlk4vkOUD1SFVMDxohvSIx', 7, NULL, 5, 'QBYSYWiUKXzTgmtv0L86qM03E', 'MAV6', 'Sweet Corn Chaat', '1.00', '4.95', '5.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.42393749999999997}]', '4.95', '5.95', '0.30', '5.65', '0.42', '6.08', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (29, 'rDEiEUCE2tAJWXVUTBARKswbn', 8, NULL, 3, '3mdgefOccrbxxRfw9dHlEOICa', '7HUA', 'Raw Mango Salad', '1.00', '7.95', '8.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.6376875}]', '7.95', '8.95', '0.45', '8.50', '0.64', '9.14', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (30, 'JFNUlkpHqC9ZOhJVCwn3qsyJE', 9, NULL, 1, '5Rr3WuUtLfunIPV5UmSbs2IcP', 'BYAR', 'Nutella Cake', '1.00', '11.95', '12.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.9226874999999999}]', '11.95', '12.95', '0.65', '12.30', '0.92', '13.23', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (31, 'ptgyCsIoOwuPjnH5FKFq032Oh', 9, NULL, 2, 'Bro6frPElUSawNvj9gXUZmN1o', '12GM', 'Broccoli with Almonds', '1.00', '4.95', '5.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.42393749999999997}]', '4.95', '5.95', '0.30', '5.65', '0.42', '6.08', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (32, 'rjgjmP6PDWttS4nLKsIMOuWDH', 10, NULL, 3, '3mdgefOccrbxxRfw9dHlEOICa', '7HUA', 'Raw Mango Salad', '2.00', '7.95', '8.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":1.275375}]', '15.90', '17.90', '0.90', '17.01', '1.28', '18.28', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (33, '2Il9O9F2nG1sYxgYtuZBDUGbL', 10, NULL, 6, 'oqbz6ePnXrJOLNWnkHQCcIzIL', '8COK', 'Croque Monsieur', '1.00', '11.95', '12.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.9226874999999999}]', '11.95', '12.95', '0.65', '12.30', '0.92', '13.23', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (34, 'x7CMHayZic1CekEOARVH16K0v', 10, NULL, 5, 'QBYSYWiUKXzTgmtv0L86qM03E', 'MAV6', 'Sweet Corn Chaat', '1.00', '4.95', '5.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.42393749999999997}]', '4.95', '5.95', '0.30', '5.65', '0.42', '6.08', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (35, 'kgyXWgv5rUmn9JTbCvbRxS1OE', 10, NULL, 2, 'Bro6frPElUSawNvj9gXUZmN1o', '12GM', 'Broccoli with Almonds', '1.00', '4.95', '5.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.42393749999999997}]', '4.95', '5.95', '0.30', '5.65', '0.42', '6.08', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (36, 'x2dxTVaynNxAgCa2Wljfvjxsg', 11, NULL, 6, 'oqbz6ePnXrJOLNWnkHQCcIzIL', '8COK', 'Croque Monsieur', '1.00', '11.95', '12.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.9226874999999999}]', '11.95', '12.95', '0.65', '12.30', '0.92', '13.23', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (37, 'awIsmj1szFSCgNJhvmnfXUYlM', 11, NULL, 5, 'QBYSYWiUKXzTgmtv0L86qM03E', 'MAV6', 'Sweet Corn Chaat', '1.00', '4.95', '5.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.42393749999999997}]', '4.95', '5.95', '0.30', '5.65', '0.42', '6.08', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (38, 'nOaZAwtVKY20DGjrIgqIoNzoF', 11, NULL, 8, 'CG5noOSQla3qrxQg6sy7N5a4X', '37L9', 'Chicago Pizza', '1.00', '11.95', '12.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.9226874999999999}]', '11.95', '12.95', '0.65', '12.30', '0.92', '13.23', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (39, 'IpQ9i0d89Kwq0tFDlTv5iaJAn', 11, NULL, 9, 'HGFZ9s6Vj32vWMgql9bgJL7Ew', 'RCVQ', 'New York-Style Pizza', '1.00', '11.95', '12.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.9226874999999999}]', '11.95', '12.95', '0.65', '12.30', '0.92', '13.23', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (40, '7X1hNNizMC55ECvw7nI92Bjvv', 12, NULL, 1, '5Rr3WuUtLfunIPV5UmSbs2IcP', 'BYAR', 'Nutella Cake', '1.00', '11.95', '12.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.9226874999999999}]', '11.95', '12.95', '0.65', '12.30', '0.92', '13.23', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (41, 'Udbcv5HWEWnnv7LTWU6dBO0Df', 12, NULL, 2, 'Bro6frPElUSawNvj9gXUZmN1o', '12GM', 'Broccoli with Almonds', '1.00', '4.95', '5.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.42393749999999997}]', '4.95', '5.95', '0.30', '5.65', '0.42', '6.08', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (42, '7rytZDGF22P1tGgB3PnwD3y5M', 12, NULL, 4, 'oZANWgAS6NNOfGkaWEfzeZTL8', '3Q1T', 'Fresh Fruit Dessert', '1.00', '11.95', '12.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.9226874999999999}]', '11.95', '12.95', '0.65', '12.30', '0.92', '13.23', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (43, 'TYCJItKucL0O7rB8TgW0IH0XK', 12, NULL, 5, 'QBYSYWiUKXzTgmtv0L86qM03E', 'MAV6', 'Sweet Corn Chaat', '1.00', '4.95', '5.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.42393749999999997}]', '4.95', '5.95', '0.30', '5.65', '0.42', '6.08', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (44, 'f7F6X2kIBiEVOk7zQ2YjkUqXF', 12, NULL, 12, 'ChiYnoahYLO7tcfvdAm788mTC', 'HUI7', 'California Pizza', '2.00', '24.95', '25.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":3.697875}]', '49.90', '51.90', '2.60', '49.31', '3.70', '53.00', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (45, 'XX83t6AQNd7jScDgNHpBjjd0O', 12, NULL, 11, 'wRrPbqfYBz73jiZlCRHPULZtv', 'LADM', 'Greek Pizza', '3.00', '10.95', '11.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":2.5543124999999995}]', '32.85', '35.85', '1.79', '34.06', '2.55', '36.61', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (46, 'zoV7Ey1KPwLmNa39JAgdPJXOi', 13, NULL, 2, 'Bro6frPElUSawNvj9gXUZmN1o', '12GM', 'Broccoli with Almonds', '2.00', '4.95', '5.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.8478749999999999}]', '9.90', '11.90', '0.60', '11.31', '0.85', '12.15', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (47, 'Fg8zn5D6Rj40BVjDegASDfbZG', 13, NULL, 3, '3mdgefOccrbxxRfw9dHlEOICa', '7HUA', 'Raw Mango Salad', '1.00', '7.95', '8.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.6376875}]', '7.95', '8.95', '0.45', '8.50', '0.64', '9.14', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (48, 'sBXuoY86JOZjZKK4EszNriFao', 13, NULL, 6, 'oqbz6ePnXrJOLNWnkHQCcIzIL', '8COK', 'Croque Monsieur', '1.00', '11.95', '12.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.9226874999999999}]', '11.95', '12.95', '0.65', '12.30', '0.92', '13.23', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (49, 'pm5EWGtG0WRkwvbUVZrCJy4Yi', 13, NULL, 5, 'QBYSYWiUKXzTgmtv0L86qM03E', 'MAV6', 'Sweet Corn Chaat', '1.00', '4.95', '5.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.42393749999999997}]', '4.95', '5.95', '0.30', '5.65', '0.42', '6.08', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (50, '5vDSbYHnlrlq0qiuHhPf5BVFA', 13, NULL, 4, 'oZANWgAS6NNOfGkaWEfzeZTL8', '3Q1T', 'Fresh Fruit Dessert', '1.00', '11.95', '12.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.9226874999999999}]', '11.95', '12.95', '0.65', '12.30', '0.92', '13.23', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (51, 'qw1H0n3ABqjrXNaFs4NZUf1tc', 13, NULL, 1, '5Rr3WuUtLfunIPV5UmSbs2IcP', 'BYAR', 'Nutella Cake', '1.00', '11.95', '12.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.9226874999999999}]', '11.95', '12.95', '0.65', '12.30', '0.92', '13.23', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (52, 'PnC2oNXjTxXeh5odAwrtPsnZX', 13, NULL, 7, 'S8FuiWAVaMqxDnwulpcmheybx', 'WHPA', 'Neapolitan Pizza', '1.00', '11.95', '12.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.9226874999999999}]', '11.95', '12.95', '0.65', '12.30', '0.92', '13.23', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (53, 'NkN03kHN5hznOxOov9iSTGY4q', 13, NULL, 8, 'CG5noOSQla3qrxQg6sy7N5a4X', '37L9', 'Chicago Pizza', '1.00', '11.95', '12.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.9226874999999999}]', '11.95', '12.95', '0.65', '12.30', '0.92', '13.23', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (54, 'OFpR9EnJO24nFH1sglMM6ldk8', 13, NULL, 9, 'HGFZ9s6Vj32vWMgql9bgJL7Ew', 'RCVQ', 'New York-Style Pizza', '1.00', '11.95', '12.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.9226874999999999}]', '11.95', '12.95', '0.65', '12.30', '0.92', '13.23', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (55, 'rKxkQTSic8a7AhaZGUQaHLpVW', 13, NULL, 18, 'SmtLWMYfGdEXvZUJKKpwYQxBA', 'BRYI', 'Dal', '1.00', '20.95', '21.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":1.5639375}]', '20.95', '21.95', '1.10', '20.85', '1.56', '22.42', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (56, 'MpIjETL3bjOWatqnKqRuPchuN', 13, NULL, 17, '5pKauGfRqnZLpNAKiezm6XNWG', 'M9JJ', 'Amritsari kulcha', '1.00', '11.95', '12.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.9226874999999999}]', '11.95', '12.95', '0.65', '12.30', '0.92', '13.23', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (57, 'tidXx0bFOMMtCv8U4ihQxqzkU', 13, NULL, 16, 'l3Orzuh1LDMP8bLHK1yWDXOdU', '5TQC', 'Aloo shimla mirch', '1.00', '11.95', '12.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.9226874999999999}]', '11.95', '12.95', '0.65', '12.30', '0.92', '13.23', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (58, 'puqcvJANR51WYy9d6VOb0girK', 14, NULL, 3, '3mdgefOccrbxxRfw9dHlEOICa', '7HUA', 'Raw Mango Salad', '1.00', '7.95', '8.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.6376875}]', '7.95', '8.95', '0.45', '8.50', '0.64', '9.14', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (59, 'QmiIJBF7dKAjJEp9CUZy376TL', 14, NULL, 2, 'Bro6frPElUSawNvj9gXUZmN1o', '12GM', 'Broccoli with Almonds', '1.00', '4.95', '5.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.42393749999999997}]', '4.95', '5.95', '0.30', '5.65', '0.42', '6.08', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (60, 'Zw6efby4GIOCu5zE68m5NfiWE', 14, NULL, 42, 'vtZpHrKVICetkXpajn5xWAwq8', 'TVKN', 'American goulash', '1.00', '8.95', '9.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.7089374999999999}]', '8.95', '9.95', '0.50', '9.45', '0.71', '10.16', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (61, '0qhy0tMyUwEsfTA4j2Wnwz1u0', 14, NULL, 41, '1O0U0q2SCNzyf7nY0u9o8plGK', 'G9YV', 'American chop suey', '1.00', '8.95', '9.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.7089374999999999}]', '8.95', '9.95', '0.50', '9.45', '0.71', '10.16', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (62, 'lhkljeesh2JXydYmGU8PUN3Jo', 14, NULL, 38, 'wBq7eIend65jjTGttkNLvIVks', 'IAQS', 'Mediterranean Bruschetta Hummus Platter', '1.00', '29.55', '30.55', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":2.1766875}]', '29.55', '30.55', '1.53', '29.02', '2.18', '31.20', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (63, 'E6r4ayszgwGa1yxPlTY4yNTsW', 14, NULL, 39, 'FLBPutzF8HP7wpTaWzFrZuKKD', 'EXTI', 'The Ultimate Vegan Appetizer Platter', '1.00', '29.00', '30.00', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":2.1374999999999997}]', '29.00', '30.00', '1.50', '28.50', '2.14', '30.64', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (64, '7rOANtDPHDMBPeJR7MLdHe2kn', 14, NULL, 48, 'Td6u8PLy2VPBV36vu4XBEjBNU', 'RUSS', 'Lobster Bisque', '1.00', '4.59', '5.59', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.3982875}]', '4.59', '5.59', '0.28', '5.31', '0.40', '5.71', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (65, '0SoeD0vfrLy31PfIgZJwL8PYz', 14, NULL, 47, 'BzRTRJBtyhShb9gKilOgDsGYi', '9MWU', 'Spinach Salad', '1.00', '6.95', '7.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.5664375}]', '6.95', '7.95', '0.40', '7.55', '0.57', '8.12', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (66, 'FQbq8VWSvomVdFl7TWGJCkAtY', 14, NULL, 60, 'XKVNOjjnhNcvmg3xHLnvOUbtF', 'SQIZ', 'Emeril’s Chicken', '1.00', '18.95', '19.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":1.4214375}]', '18.95', '19.95', '1.00', '18.95', '1.42', '20.37', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (67, 'KjZXvTPCknTuEp4rTtlqGLOn1', 14, NULL, 59, 'YR8hXSecZ1K70d7qgoUBoZgU9', 'RGQ1', 'A.D.’s Chicken Saltimbocca', '1.00', '18.95', '19.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":1.4214375}]', '18.95', '19.95', '1.00', '18.95', '1.42', '20.37', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (68, '16k4ZCXQLYGJTc3xDSzxIQAcC', 15, NULL, 2, 'Bro6frPElUSawNvj9gXUZmN1o', '12GM', 'Broccoli with Almonds', '1.00', '4.95', '5.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.42393749999999997}]', '4.95', '5.95', '0.30', '5.65', '0.42', '6.08', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (69, 'fjDv69i9wscFVcAamEeRst6JE', 15, NULL, 3, '3mdgefOccrbxxRfw9dHlEOICa', '7HUA', 'Raw Mango Salad', '1.00', '7.95', '8.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.6376875}]', '7.95', '8.95', '0.45', '8.50', '0.64', '9.14', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (70, 'W5kzU1FVZgBJHiuUuJXhzGZjJ', 15, NULL, 6, 'oqbz6ePnXrJOLNWnkHQCcIzIL', '8COK', 'Croque Monsieur', '1.00', '11.95', '12.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.9226874999999999}]', '11.95', '12.95', '0.65', '12.30', '0.92', '13.23', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (71, 'CvUzdP62nm3pCT4VIAguAJBFm', 15, NULL, 5, 'QBYSYWiUKXzTgmtv0L86qM03E', 'MAV6', 'Sweet Corn Chaat', '1.00', '4.95', '5.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.42393749999999997}]', '4.95', '5.95', '0.30', '5.65', '0.42', '6.08', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (72, 'jyohMavNlMw1FFQ1orTQzDs4P', 15, NULL, 8, 'CG5noOSQla3qrxQg6sy7N5a4X', '37L9', 'Chicago Pizza', '1.00', '11.95', '12.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.9226874999999999}]', '11.95', '12.95', '0.65', '12.30', '0.92', '13.23', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (73, 'XkTA4878vUJZaQ9sNV5piHHKG', 16, NULL, 2, 'Bro6frPElUSawNvj9gXUZmN1o', '12GM', 'Broccoli with Almonds', '1.00', '4.95', '5.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.42393749999999997}]', '4.95', '5.95', '0.30', '5.65', '0.42', '6.08', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (74, 'LkA9PXPDS7eMHpHT8ydOQ64uy', 16, NULL, 66, 'NaAkrYO5gO3obCuMpHNoZ5Bph', '106G', 'Sautéed Seafood Caprese', '1.00', '21.95', '22.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":1.6351874999999998}]', '21.95', '22.95', '1.15', '21.80', '1.64', '23.44', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (75, 'cMDwTyrYsYyiUgwwHQWySSjTy', 16, NULL, 65, 'IaxXZzuU3zUDrsaz0tRNhlFIl', '24J4', 'Seafood Sauté or Alfredo', '1.00', '21.95', '22.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":1.6351874999999998}]', '21.95', '22.95', '1.15', '21.80', '1.64', '23.44', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (76, 'eqoowQS4X0YVQbnzkdrGKBeUq', 17, NULL, 41, '1O0U0q2SCNzyf7nY0u9o8plGK', 'G9YV', 'American chop suey', '1.00', '8.95', '9.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.7089374999999999}]', '8.95', '9.95', '0.50', '9.45', '0.71', '10.16', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (77, 'ZYyakAX6NXmSCLIzLq5OR7S2r', 17, NULL, 42, 'vtZpHrKVICetkXpajn5xWAwq8', 'TVKN', 'American goulash', '1.00', '8.95', '9.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.7089374999999999}]', '8.95', '9.95', '0.50', '9.45', '0.71', '10.16', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (78, '81td3Ar3h6Gc55n76FGLMNq0T', 17, NULL, 40, 'MNqMgr6LMEKY1KtpyJ5CRmp8V', 'BP19', 'Date Night Dessert Fondue Platter for Two', '1.00', '49.55', '50.55', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":3.6016874999999993}]', '49.55', '50.55', '2.53', '48.02', '3.60', '51.62', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (79, 'vEGqdIEC7hKrPe9JoEKJh4GT7', 17, NULL, 38, 'wBq7eIend65jjTGttkNLvIVks', 'IAQS', 'Mediterranean Bruschetta Hummus Platter', '1.00', '29.55', '30.55', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":2.1766875}]', '29.55', '30.55', '1.53', '29.02', '2.18', '31.20', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (80, '9MBPhxsxxsUlpQqg6BPCIqvNS', 17, NULL, 39, 'FLBPutzF8HP7wpTaWzFrZuKKD', 'EXTI', 'The Ultimate Vegan Appetizer Platter', '3.00', '29.00', '30.00', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":6.4125}]', '87.00', '90.00', '4.50', '85.50', '6.41', '91.91', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (81, 'k1hIODYfUjsaY114C63LV2Scg', 18, NULL, 1, '5Rr3WuUtLfunIPV5UmSbs2IcP', 'BYAR', 'Nutella Cake', '1.00', '11.95', '12.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.9226874999999999}]', '11.95', '12.95', '0.65', '12.30', '0.92', '13.23', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (82, '9i1amZGqnmtHU6KMTLHfelswt', 18, NULL, 2, 'Bro6frPElUSawNvj9gXUZmN1o', '12GM', 'Broccoli with Almonds', '1.00', '4.95', '5.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.42393749999999997}]', '4.95', '5.95', '0.30', '5.65', '0.42', '6.08', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (83, 'dxf8OHnmaggtEiJgs1MNNzL2S', 18, NULL, 3, '3mdgefOccrbxxRfw9dHlEOICa', '7HUA', 'Raw Mango Salad', '1.00', '7.95', '8.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.6376875}]', '7.95', '8.95', '0.45', '8.50', '0.64', '9.14', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (84, 'AI3NOO53ZpscAzGkL8QAihob2', 18, NULL, 42, 'vtZpHrKVICetkXpajn5xWAwq8', 'TVKN', 'American goulash', '1.00', '8.95', '9.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.7089374999999999}]', '8.95', '9.95', '0.50', '9.45', '0.71', '10.16', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (85, 'zaSuYk431Ql7khnkZwXrd4hkR', 18, NULL, 41, '1O0U0q2SCNzyf7nY0u9o8plGK', 'G9YV', 'American chop suey', '1.00', '8.95', '9.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.7089374999999999}]', '8.95', '9.95', '0.50', '9.45', '0.71', '10.16', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (86, 'Q5S2LTkEpMiC5nQ8GF3nShgst', 18, NULL, 40, 'MNqMgr6LMEKY1KtpyJ5CRmp8V', 'BP19', 'Date Night Dessert Fondue Platter for Two', '1.00', '49.55', '50.55', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":3.6016874999999993}]', '49.55', '50.55', '2.53', '48.02', '3.60', '51.62', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (87, '4uxtlAO489rZt0Vx2WNIWjnvM', 18, NULL, 37, 'r4zLT1L1AxVSCizCYC3J7JpNs', 'I60H', 'Cheese and Meat Board', '1.00', '29.00', '30.00', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":2.1374999999999997}]', '29.00', '30.00', '1.50', '28.50', '2.14', '30.64', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (88, 'h5zLbKJtmd4WX8L3tF53PcmH8', 18, NULL, 38, 'wBq7eIend65jjTGttkNLvIVks', 'IAQS', 'Mediterranean Bruschetta Hummus Platter', '1.00', '29.55', '30.55', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":2.1766875}]', '29.55', '30.55', '1.53', '29.02', '2.18', '31.20', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (89, 'wymPXyFSXJkea5wfte7YxYu7u', 18, NULL, 39, 'FLBPutzF8HP7wpTaWzFrZuKKD', 'EXTI', 'The Ultimate Vegan Appetizer Platter', '1.00', '29.00', '30.00', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":2.1374999999999997}]', '29.00', '30.00', '1.50', '28.50', '2.14', '30.64', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (90, 'Dv1Vw57wQTWzBgztWlSUxb5Fy', 19, NULL, 51, 'Y0Hlr7ZdsFcRsHFmFBgQlzJMU', 'YCF0', 'Greek Salad', '1.00', '2.95', '3.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.2814375}]', '2.95', '3.95', '0.20', '3.75', '0.28', '4.03', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (91, 'eJhRYahfipg3HwSi7sX5SGzQY', 19, NULL, 50, 'cMnhaoVU2RUhmqLFbG8vs9TpI', 'FZZC', 'French Onion Soup', '1.00', '2.95', '3.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":0.2814375}]', '2.95', '3.95', '0.20', '3.75', '0.28', '4.03', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (92, '70d0bDcH1PBCPLNVRrgDSw5sP', 19, NULL, 53, 'BwfcPz88KGS3f7QIFS1HfOPFx', 'QD3Z', 'Traditional Filet Mignon', '1.00', '25.95', '26.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":1.9201875}]', '25.95', '26.95', '1.35', '25.60', '1.92', '27.52', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (93, '0I5jfCUJF4bMY0Lm9J6kJhuyK', 19, NULL, 54, 'bvtyNvaMyi834MNth1gfnIG3y', 'TLC2', 'Bacon Bourbon Tenderloin Tips', '1.00', '18.95', '19.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":1.4214375}]', '18.95', '19.95', '1.00', '18.95', '1.42', '20.37', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (94, '4qbyy6owp8dgS7wy4oBXhuzQ2', 19, NULL, 57, 'LZaBQoVWSSi8FNILOiP2twe8t', 'S9FK', 'Roast Pork Loin', '2.00', '20.95', '21.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":3.127875}]', '41.90', '43.90', '2.20', '41.71', '3.13', '44.83', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL),
        (95, 'IJwVKsknKBKJ9wcuNZKLggFIU', 19, NULL, 56, 'Ip6hKIrFa79d4UOXq28GaNNyQ', 'PLDN', 'Surf and Turf', '4.00', '27.95', '28.95', 1, 'DISCOUNT5', '5.00', 1, 'TAX75', '7.50', '[{\"tax_type\":\"GST\",\"tax_percentage\":\"7.50\",\"tax_amount\":8.250749999999998}]', '111.80', '115.80', '5.79', '110.01', '8.25', '118.26', 0, 1, 1, NULL, '2021-03-01 15:13:15', NULL)");

        DB::insert("INSERT INTO `purchase_orders` (`id`, `slack`, `store_id`, `po_number`, `po_reference`, `order_date`, `order_due_date`, `supplier_id`, `supplier_code`, `supplier_name`, `supplier_address`, `currency_name`, `currency_code`, `tax_option_id`, `subtotal_excluding_tax`, `total_discount_amount`, `total_after_discount`, `total_tax_amount`, `shipping_charge`, `packing_charge`, `total_order_amount`, `terms`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
        (NULL, 'V0zAMNJTU3M3eB9OaBfJVvro7', 1, '123456', '123456', '2020-03-01', '2020-04-30', 1, 'SUP101', 'Food Mart Co. Ltd.', '736 Misael Valley Suite 062\nNew Dimitriton, PA 29346, 11111', 'United States dollar', 'USD', NULL, '98285.00', '4914.25', '93370.75', '7002.81', '80.00', '90.00', '100543.56', NULL, 1, 1, NULL, NOW(), NOW()),
        (NULL, 'y0BgtDpSE5gvLRg0MKjML5Opq', 1, '234564356', '23456789', '2020-03-02', '2020-03-18', 1, 'SUP101', 'Food Mart Co. Ltd.', '736 Misael Valley Suite 062\nNew Dimitriton, PA 29346, 11111', 'United States dollar', 'USD', 0, '10000.00', '0.00', '10000.00', '0.00', '10.00', '10.00', '10020.00', NULL, 2, 1, 1, NOW(), NOW()),
        (NULL, 'Hgd5KkKvHvlj9J1I1kVkpUW8K', 1, '234567890', '09876543', '2020-04-02', '2020-05-31', 1, 'SUP101', 'Food Mart Co. Ltd.', '736 Misael Valley Suite 062\nNew Dimitriton, PA 29346, 11111', 'United States dollar', 'USD', NULL, '143364.15', '7168.21', '136195.94', '10214.70', '0.00', '0.00', '146410.64', NULL, 3, 1, 1, NOW(), NOW()),
        (NULL, 'gCJUlYj2A39rwCwMxkPpdTRtC', 1, 'PO34256543', 'PO34T43434', '2020-04-01', '2020-04-30', 1, 'SUP101', 'Food Mart Co. Ltd.', '736 Misael Valley Suite 062\nNew Dimitriton, PA 29346, 11111', 'Indian rupee', 'INR', NULL, '10000.00', '500.00', '9500.00', '95000.00', '0.00', '0.00', '104500.00', NULL, 1, 1, NULL, NOW(), NOW()),
        (NULL, 't6jeEbR74Q7aT2OseYiVrIqPK', 1, 'PO65463654', '18373882', '2020-04-01', '2020-04-30', 1, 'SUP101', 'Food Mart Co. Ltd.', '736 Misael Valley Suite 062\nNew Dimitriton, PA 29346, 11111', 'Indian rupee', 'INR', 2, '23900.00', '1195.00', '22705.00', '1702.88', '0.00', '0.00', '24407.88', NULL, 1, 1, 1, NOW(), NOW()),
        (NULL, 'Es8ZZeNbpmLRuElKJENLCMDNU', 1, 'POEREUREURY', 'PO34343434', '2020-03-31', '2020-04-30', 1, 'SUP101', 'Food Mart Co. Ltd.', '736 Misael Valley Suite 062\nNew Dimitriton, PA 29346, 11111', 'Indian rupee', 'INR', NULL, '9999.00', '0.00', '9999.00', '0.00', '0.00', '0.00', '9999.00', NULL, 1, 1, NULL, NOW(), NOW()),
        (NULL, '42aReDcgCRwgaqRCRNHVNlVSU', 1, 'NEW122112', '1212121', '2020-03-01', '2020-03-31', 1, 'SUP101', 'Food Mart Co. Ltd.', '736 Misael Valley Suite 062\nNew Dimitriton, PA 29346, 11111', 'United States dollar', 'USD', 2, '23888.05', '1194.40', '22693.65', '1702.02', '0.00', '0.00', '24395.67', NULL, 2, 1, 1, NOW(), NOW())");

        DB::insert("INSERT INTO `purchase_order_products` (`id`, `slack`, `purchase_order_id`, `product_id`, `product_slack`, `product_code`, `name`, `quantity`, `amount_excluding_tax`, `subtotal_amount_excluding_tax`, `discount_percentage`, `tax_percentage`, `discount_amount`, `total_after_discount`, `tax_amount`, `tax_components`, `total_amount`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
        (NULL, 'hs7A853DE6GMksWEuC5XA4F56', 1, 33, 'sIlOCRmzcVuI9APJzcRSHvdEN', 'AYVB', 'Chocolate Lava Cake', '100.00', '2.95', '295.00', '5.00', '7.50', '14.75', '280.25', '21.02', '[{\"name\":\"TAX\",\"tax_percentage\":7.5,\"tax_amount\":\"21.02\"}]', '301.27', 1, 1, NULL, NOW(), NULL),
        (NULL, 'AH79iC41UKTnh7RkaXHSYPPRA', 1, 15, 'fxDxSrSRvuwcYX2TBJ83JQKeX', '4WWY', 'Aloo methi', '200.00', '11.95', '2390.00', '5.00', '7.50', '119.50', '2270.50', '170.29', '[{\"name\":\"TAX\",\"tax_percentage\":7.5,\"tax_amount\":\"170.29\"}]', '2440.79', 1, 1, NULL, NOW(), NULL),
        (NULL, 'uhU2MnGkBc22ZrZW3LCvMjmpE', 1, 16, 'l3Orzuh1LDMP8bLHK1yWDXOdU', '5TQC', 'Aloo shimla mirch', '8000.00', '11.95', '95600.00', '5.00', '7.50', '4780.00', '90820.00', '6811.50', '[{\"name\":\"TAX\",\"tax_percentage\":7.5,\"tax_amount\":\"6811.50\"}]', '97631.50', 1, 1, NULL, NOW(), NULL),
        (NULL, 'MsBNkQ8uOFbPXQqY16dh1RckN', 3, 15, 'fxDxSrSRvuwcYX2TBJ83JQKeX', '4WWY', 'Aloo methi', '999.00', '11.95', '11938.05', '5.00', '7.50', '596.90', '11341.15', '850.59', '[{\"name\":\"TAX\",\"tax_percentage\":7.5,\"tax_amount\":\"850.59\"}]', '12191.73', 1, 1, NULL, NOW(), NULL),
        (NULL, 'Vjs5zbyLKPmgnwJ9Yq1UmhxVE', 3, 16, 'l3Orzuh1LDMP8bLHK1yWDXOdU', '5TQC', 'Aloo shimla mirch', '9999.00', '11.95', '119488.05', '5.00', '7.50', '5974.40', '113513.65', '8513.52', '[{\"name\":\"TAX\",\"tax_percentage\":7.5,\"tax_amount\":\"8513.52\"}]', '122027.17', 1, 1, NULL, NOW(), NULL),
        (NULL, 'fa6pfsq2qW1aZkIds4dLIyPGB', 3, 17, '5pKauGfRqnZLpNAKiezm6XNWG', 'M9JJ', 'Amritsari kulcha', '999.00', '11.95', '11938.05', '5.00', '7.50', '596.90', '11341.15', '850.59', '[{\"name\":\"TAX\",\"tax_percentage\":7.5,\"tax_amount\":\"850.59\"}]', '12191.73', 1, 1, NULL, NOW(), NULL),
        (NULL, 'Za7qzLAgQwYSaQNBc6PiAzZvw', 4, NULL, NULL, NULL, 'Glass utensils', '1000.00', '10.00', '10000.00', '5.00', '1000.00', '500.00', '9500.00', '95000.00', '', '104500.00', 1, 1, NULL, NOW(), NULL),
        (NULL, 'bLwEjMMRqM9Usot3HxAGJbnxS', 2, NULL, NULL, NULL, 'Tables and chairs', '1000.00', '10.00', '10000.00', '0.00', '0.00', '0.00', '10000.00', '0.00', '', '10000.00', 1, NULL, 1, NULL, NOW()),
        (NULL, 'Mn6kSMcdtBBa4OKYBL1rTD03R', 5, 15, 'fxDxSrSRvuwcYX2TBJ83JQKeX', '4WWY', 'Aloo methi', '1000.00', '11.95', '11950.00', '5.00', '7.50', '597.50', '11352.50', '851.44', '[{\"name\":\"CGST\",\"tax_percentage\":3.75,\"tax_amount\":\"425.72\"},{\"name\":\"SGST\",\"tax_percentage\":3.75,\"tax_amount\":\"425.72\"}]', '12203.94', 1, NULL, 1, NULL, NOW()),
        (NULL, 'XODqThh5MFWWTF3Ua9oA4Hy8E', 5, 16, 'l3Orzuh1LDMP8bLHK1yWDXOdU', '5TQC', 'Aloo shimla mirch', '1000.00', '11.95', '11950.00', '5.00', '7.50', '597.50', '11352.50', '851.44', '[{\"name\":\"CGST\",\"tax_percentage\":3.75,\"tax_amount\":\"425.72\"},{\"name\":\"SGST\",\"tax_percentage\":3.75,\"tax_amount\":\"425.72\"}]', '12203.94', 1, NULL, 1, NULL, NOW()),
        (NULL, 'dC52QqZjhVFl6zNjcYhot2C6M', 6, NULL, NULL, NULL, 'Carry Bags', '9999.00', '1.00', '9999.00', '0.00', '0.00', '0.00', '9999.00', '0.00', '[{\"name\":\"CGST\",\"tax_percentage\":0,\"tax_amount\":\"0.00\"},{\"name\":\"SGST\",\"tax_percentage\":0,\"tax_amount\":\"0.00\"}]', '9999.00', 1, 1, NULL, NOW(), NULL),
        (NULL, 'oWAcB6G1FYnRqpbeF2voVMojO', 7, 16, 'l3Orzuh1LDMP8bLHK1yWDXOdU', '5TQC', 'Aloo shimla mirch', '1999.00', '11.95', '23888.05', '5.00', '7.50', '1194.40', '22693.65', '1702.02', '[{\"name\":\"CGST\",\"tax_percentage\":3.75,\"tax_amount\":\"851.01\"},{\"name\":\"SGST\",\"tax_percentage\":3.75,\"tax_amount\":\"851.01\"}]', '24395.67', 1, 1, NULL, NOW(), NULL)");

        DB::insert("INSERT INTO `quotations` (`id`, `slack`, `store_id`, `quotation_number`, `quotation_reference`, `quotation_date`, `quotation_due_date`, `subject`, `bill_to`, `bill_to_id`, `bill_to_code`, `bill_to_name`, `bill_to_email`, `bill_to_contact`, `bill_to_address`, `currency_name`, `currency_code`, `tax_option_id`, `subtotal_excluding_tax`, `total_discount_amount`, `total_after_discount`, `total_tax_amount`, `shipping_charge`, `packing_charge`, `total_order_amount`, `notes`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
        (NULL, '9T2i6k0fFnLxcGW9cvC4bS4cI', 1, '101', '123456', '2020-03-01', '2020-04-30', NULL, 'SUPPLIER', 1, 'SUP101', 'Food Mart Co. Ltd.', 'garett83@gmail.com', '+4433211975163', '736 Misael Valley Suite 062\nNew Dimitriton, PA 29346,11111', 'United Arab Emirates', 'AED', 1, '23.90', '1.20', '22.71', '1.70', '0.00', '0.00', '24.41', NULL, 2, 1, 1, NOW(), NOW()),
        (NULL, 'wY0zW8Rb0BbvUeWS6PSa0x5xN', 1, '102', '343', '2020-03-01', '2020-04-30', NULL, 'SUPPLIER', 1, 'SUP101', 'Food Mart Co. Ltd.', 'garett83@gmail.com', '+4433211975163', '736 Misael Valley Suite 062\nNew Dimitriton, PA 29346,11111', 'Afghan afghani', 'AFN', 1, '11.95', '0.60', '11.35', '0.85', '0.00', '0.00', '12.20', NULL, 1, 1, NULL, NOW(), NOW())");
    
        DB::insert("INSERT INTO `quotation_products` (`id`, `slack`, `quotation_id`, `product_id`, `product_slack`, `product_code`, `name`, `quantity`, `amount_excluding_tax`, `subtotal_amount_excluding_tax`, `discount_percentage`, `tax_percentage`, `discount_amount`, `total_after_discount`, `tax_amount`, `tax_components`, `total_amount`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
        (NULL, 'rUiyJVJSjNhSHa1DIXHxrEGI9', 1, 15, 'fxDxSrSRvuwcYX2TBJ83JQKeX', '4WWY', 'Aloo methi', '1.00', '11.95', '11.95', '5.00', '7.50', '0.60', '11.35', '0.85', '[{\"name\":\"TAX\",\"tax_percentage\":7.5,\"tax_amount\":\"0.85\"}]', '12.20', 1, 1, NULL, NOW(), NULL),
        (NULL, '5kb2kiMRCyxt2o3ExBy0vBamY', 1, 17, '5pKauGfRqnZLpNAKiezm6XNWG', 'M9JJ', 'Amritsari kulcha', '1.00', '11.95', '11.95', '5.00', '7.50', '0.60', '11.35', '0.85', '[{\"name\":\"TAX\",\"tax_percentage\":7.5,\"tax_amount\":\"0.85\"}]', '12.20', 1, 1, NULL, NOW(), NULL),
        (NULL, 'PXy7uKLudbW8aWz5TXI7yP09d', 2, 15, 'fxDxSrSRvuwcYX2TBJ83JQKeX', '4WWY', 'Aloo methi', '1.00', '11.95', '11.95', '5.00', '7.50', '0.60', '11.35', '0.85', '[{\"name\":\"TAX\",\"tax_percentage\":7.5,\"tax_amount\":\"0.85\"}]', '12.20', 1, 1, NULL, NOW(), NULL)");
    
        DB::insert("INSERT INTO `transactions` (`id`, `slack`, `store_id`, `transaction_code`, `account_id`, `transaction_type`, `payment_method_id`, `payment_method`, `bill_to`, `bill_to_id`, `bill_to_name`, `bill_to_contact`, `bill_to_address`, `currency_code`, `amount`, `notes`, `pg_transaction_id`, `pg_transaction_status`, `transaction_date`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
        (NULL, '4Wg2uhThZu3hp3hr5jc1td0Wk', 1, '101', 1, 1, 3, 'Cash', 'INVOICE', 1, 'Food Mart Co. Ltd.', '+4433211975163, garett83@gmail.com', '736 Misael Valley Suite 062\nNew Dimitriton, PA 29346,11111', 'USD', '40000.00', NULL, NULL, NULL,'".date('Y-m-d', strtotime(Carbon::now()->subDays(1)))."', 1, NULL, NOW(), NOW()),
        (NULL, 'jTaJgF1ALanriqI31nkWTmWJF', 1, '102', 1, 1, 3, 'Cash', 'POS_ORDER', 1, 'Walkin Customer', '0000000000', '', 'USD', '28.44', '', '', '', '".date('Y-m-d', strtotime(Carbon::now()->subDays(2)))."', 1, NULL, NOW(), NOW()),
        (NULL, 'EowCIjGcgxQ1Sf4mg5csQBnMD', 1, '103', 1, 1, 3, 'Cash', 'POS_ORDER', 2, 'Walkin Customer', '0000000000', '', 'USD', '518.74', '', '', '', '".date('Y-m-d', strtotime(Carbon::now()->subDays(2)))."', 1, NULL, NOW(), NOW()),
        (NULL, '4l7ijEBZot3oKmmcfhcgVkFWk', 1, '104', 1, 1, 4, 'Card', 'POS_ORDER', 3, 'Walkin Customer', '0000000000', '', 'USD', '41.67', '', '', '', '".date('Y-m-d', strtotime(Carbon::now()->subDays(2)))."', 1, NULL, NOW(), NOW()),
        (NULL, 'Y64LaPs7tWQldyUbhDaGD8DRl', 1, '105', 1, 1, 3, 'Cash', 'POS_ORDER', 4, 'Walkin Customer', '0000000000', '', 'USD', '34.52', '', '', '', '".date('Y-m-d', strtotime(Carbon::now()->subDays(2)))."', 1, NULL, NOW(), NOW()),
        (NULL, 'rJkQlKhlrT8EQjLWu7aWqY0UM', 1, '106', 1, 1, 4, 'Card', 'POS_ORDER', 5, 'Walkin Customer', '0000000000', '', 'USD', '42.22', '', '', '', '".date('Y-m-d', strtotime(Carbon::now()->subDays(2)))."', 1, NULL, NOW(), NOW()),
        (NULL, '5Lz4R0CPqQBjCYKy8Qu34M9a5', 1, '107', 1, 1, 4, 'Card', 'POS_ORDER', 6, 'Walkin Customer', '0000000000', '', 'USD', '9.14', '', '', '', '".date('Y-m-d', strtotime(Carbon::now()->subDays(2)))."', 1, NULL, NOW(), NOW()),
        (NULL, 'SNhURVjbQA6SCDjkhvPkiGhk0', 1, '108', 1, 1, 4, 'Card', 'POS_ORDER', 7, 'Walkin Customer', '0000000000', '', 'USD', '38.60', '', '', '', '".date('Y-m-d', strtotime(Carbon::now()->subDays(2)))."', 1, NULL, NOW(), NOW()),
        (NULL, '6xaCI5JnGZmq4zP0mtxaY27aM', 1, '109', 1, 1, 3, 'Cash', 'POS_ORDER', 9, 'Walkin Customer', '0000000000', '', 'USD', '19.30', '', '', '', '".date('Y-m-d', strtotime(Carbon::now()->subDays(2)))."', 1, NULL, NOW(), NOW()),
        (NULL, 'qSK6mqMwUwSTCWDU9SbykQcyH', 1, '110', 1, 1, 3, 'Cash', 'POS_ORDER', 10, 'Walkin Customer', '0000000000', '', 'USD', '43.66', '', '', '', '".date('Y-m-d', strtotime(Carbon::now()->subDays(2)))."', 1, NULL, NOW(), NOW()),
        (NULL, '4OYtwKKS95i3gAaOea61DiGsz', 1, '111', 1, 1, 3, 'Cash', 'POS_ORDER', 11, 'Walkin Customer', '0000000000', '', 'USD', '45.75', '', '', '', '".date('Y-m-d', strtotime(Carbon::now()->subDays(1)))."', 1, NULL, NOW(), NOW()),
        (NULL, 'lZg6oiMP6z1HrlksenYmdRrOI', 1, '112', 1, 1, 4, 'Card', 'POS_ORDER', 12, 'Walkin Customer', '0000000000', '', 'USD', '128.22', '', '', '', '".date('Y-m-d', strtotime(Carbon::now()->subDays(1)))."', 1, NULL, NOW(), NOW()),
        (NULL, 'dZ5jS0nNw0PejDq0CiXSN5yx9', 1, '113', 1, 1, 3, 'Cash', 'POS_ORDER', 13, 'Walkin Customer', '0000000000', '', 'USD', '155.59', '', '', '', '".date('Y-m-d', strtotime(Carbon::now()->subDays(1)))."', 1, NULL, NOW(), NOW()),
        (NULL, 'yD5CPdJJDIJrgzvbyympbAZ4m', 1, '114', 1, 1, 3, 'Cash', 'POS_ORDER', 14, 'Walkin Customer', '0000000000', '', 'USD', '151.95', '', '', '', '".date('Y-m-d', strtotime(Carbon::now()->subDays(1)))."', 1, NULL, NOW(), NOW()),
        (NULL, 'YMICoAel6D06YmXyYC3MjR9gO', 1, '115', 1, 1, 1, 'Stripe', 'SUPPLIER', 1, 'Food Mart Co. Ltd.', '+4433211975163, garett83@gmail.com', '736 Misael Valley Suite 062\nNew Dimitriton, PA 29346,11111', 'USD', '100.00', NULL, NULL, NULL, NOW(), 1, NULL, NOW(), NOW()),
        (NULL, 'YMICoAel6D06YmXyYC3MjR9g3', 1, '116', 1, 2, 1, 'Stripe', 'SUPPLIER', 1, 'Food Mart Co. Ltd.', '+4433211975163, garett83@gmail.com', '736 Misael Valley Suite 062\nNew Dimitriton, PA 29346,11111', 'USD', '1000.00', NULL, NULL, NULL,  NOW(), 1, NULL, NOW(), NOW()),
        (NULL, 'YMICoAel6D06YmXyYC3MjR9g4', 1, '117', 1, 2, 1, 'Stripe', 'SUPPLIER', 1, 'Food Mart Co. Ltd.', '+4433211975163, garett83@gmail.com', '736 Misael Valley Suite 062\nNew Dimitriton, PA 29346,11111', 'USD', '1050.00', NULL, NULL, NULL,  NOW(), 1, NULL, NOW(), NOW()),
        (NULL, 'YMICoAel6D06YmXyYC3MjR9g5', 1, '118', 1, 1, 1, 'Stripe', 'SUPPLIER', 1, 'Food Mart Co. Ltd.', '+4433211975163, garett83@gmail.com', '736 Misael Valley Suite 062\nNew Dimitriton, PA 29346,11111', 'USD', '1400.00', NULL, NULL, NULL,  NOW(), 1, NULL, NOW(), NOW()),
        (NULL, 'YMICoAel6D06YmXyYC3MjR9g6', 1, '119', 1, 2, 1, 'Stripe', 'SUPPLIER', 1, 'Food Mart Co. Ltd.', '+4433211975163, garett83@gmail.com', '736 Misael Valley Suite 062\nNew Dimitriton, PA 29346,11111', 'USD', '3500.00', NULL, NULL, NULL,  NOW(), 1, NULL, NOW(), NOW())");


        $all_users = UserModel::select('id')
        ->active()
        ->get();

        if(count($all_users)>0){
            foreach ($all_users as $user) {

                for($k = 1; $k <= 20; $k++){
                    $notification = [
                        "slack" => $base_controller->generate_slack("notifications"),
                        "user_id" => $user->id,
                        "notification_text" => $faker->sentence($nbWords = 10, $variableNbWords = true),
                        "created_by" => 1
                    ];
                    $notif_id = NotificationModel::create($notification)->id;
                }

            }
        }

        $measurements = [
            [
                'unit_code' => 'L',
                'label' => 'Litre'
            ],
            [
                'unit_code' => 'T',
                'label' => 'Tablespoon'
            ],
            [
                'unit_code' => 'CUP',
                'label' => 'Cup'
            ],
            [
                'unit_code' => 'G',
                'label' => 'Gram'
            ],
        ];

        foreach ($measurements as $measurement) {

            $measurement_unit = [
                "slack" => $base_controller->generate_slack("measurement_units"),
                "unit_code" => $measurement['unit_code'],
                "label" => $measurement['label'],
                "status" => 1,
                "created_by" => 1
            ];
            
            MeasurementUnitModel::create($measurement_unit)->id;
        }
        
        Storage::disk('product')->putFileAs('/', new File(public_path('images/placeholder_images/placeholder_image.png')), 'placeholder_image.png');
        Storage::disk('product')->putFileAs('/', new File(public_path('images/placeholder_images/thumb_placeholder_image.png')), 'thumb_placeholder_image.png');
    }
}
