<?php

namespace Modules\Product\Database\Seeders;

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
        
        $limit = 33;

        for ($i = 1; $i < $limit; $i++) {
            \DB::table('products')->insert([ //,
                'name' => 'Product '. $i,
                'price' => 500.00,
                'order_num' => $i,
                'slug' => str_slug('Product '. $i, '-'),
                'active' => 1
            ]);
        }
    }
}
