<?php

use Illuminate\Database\Seeder;

class publishersSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        \App\publishers::insert(
            array(
                array('name'=>'Infor PL', 'created_at'=>$now, 'updated_at'=>$now),
                array('name'=>'Polska Press', 'created_at'=>$now, 'updated_at'=>$now),
                array('name'=>'Ringier Axel Springer Polska', 'created_at'=>$now, 'updated_at'=>$now),
            )
        );
    }
}
