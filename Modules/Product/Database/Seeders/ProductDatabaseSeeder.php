<?php

namespace Modules\Product\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProductDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        
        $faker = \Faker\Factory::create('sr_Latn_RS');
        
        $limit = 10000;

        for ($i = 1; $i < $limit; $i++) {
            \DB::table('products')->insert([ //,
                'name' => 'Product '. $i,
                'description' => $faker->text(200),
                'price' => 500.00,
                'order_num' => $i,
                'slug' => str_slug('Product '. $i, '-'),
                'created_at' => $faker->dateTimeThisMonth('now', 'Europe/Belgrade'),
                //'updated_at' => Carbon::now(),
                'active' => 1
            ]);
        }
    }
}
