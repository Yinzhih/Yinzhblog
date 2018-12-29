<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('users')->delete();
        \DB::table('users')->insert(
            [
                0=>[
                    'name'=>'Yinzh',
                    'email' => 'Yinzh@yzh.com',
                    'password' => bcrypt(123456),
                    'remember_token' => NULL,
                    'created_at' => '2018-12-20 09:35:12',
                    'updated_at' => '2018-12-20 09:35:12',
                ],
            ]
        );
    }
}
