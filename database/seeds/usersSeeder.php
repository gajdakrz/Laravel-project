<?php

use Illuminate\Database\Seeder;
//use App\User;
use Illuminate\Foundation\Auth\User;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        \Illuminate\Foundation\Auth\User::insert(
            array(
                array('name'=>'admin', 'username'=>'admin', 'password'=>bcrypt('admin'), 'email'=>'admin@test.pl', 'created_at'=>$now, 'updated_at'=>$now),
            )
        );
    }
}
