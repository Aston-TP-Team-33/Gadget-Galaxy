<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Admin',
               'email'=>'group33@gmail.com',
               'type'=>1,
               'password'=> bcrypt('Gadget-Galaxy'),
            ],

        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
