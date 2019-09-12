<?php

use Illuminate\Database\Seeder;

class magazinesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        \App\magazines::insert(
            array(
                array('title'=>'Dziennik Gazeta Prawna', 'id_publisher'=> 1, 'created_at'=>$now, 'updated_at'=>$now),
                array('title'=>'Monitor księgowego', 'id_publisher'=> 1, 'created_at'=>$now, 'updated_at'=>$now),
                array('title'=>'Dziennik Polski', 'id_publisher'=> 2, 'created_at'=>$now, 'updated_at'=>$now),
                array('title'=>'Echo dnia', 'id_publisher'=> 2, 'created_at'=>$now, 'updated_at'=>$now),
                array('title'=>'Przegląd sportowy', 'id_publisher'=> 3, 'created_at'=>$now, 'updated_at'=>$now),
                array('title'=>'Forbes', 'id_publisher'=> 3, 'created_at'=>$now, 'updated_at'=>$now),
                array('title'=>'Auto Świat', 'id_publisher'=> 3, 'created_at'=>$now, 'updated_at'=>$now),
            )
        );
    }
}
