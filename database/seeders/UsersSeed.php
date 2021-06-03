<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'coco', 'email' => 'coco@gmail.com', 'password' => '1234567890', 'role_id' => 1, 'remember_token' => '',],
            ['id' => 2, 'name' => 'jannine', 'email' => 'coco@gmail.com', 'password' => '1234567890', 'role_id' => 1, 'remember_token' => null,],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}