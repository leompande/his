<?php

class ServiceCategoryTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('service_category')->delete();
        ServiceCategory::create(array(
            'service_category_name'   => 'Food',
        ));
        ServiceCategory::create(array(
            'service_category_name'   => 'Beverage',
        ));
    }

}


?>