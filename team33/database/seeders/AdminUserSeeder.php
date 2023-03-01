<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Products;

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

        $products = [
            [

               'title'=>'Facebook',

               'price'=> 10,
               'description'=>'This is a demo product',
               'quantity'=> 15,
               'category'=> 'Smartphones',
               'image'=>'images/facebook.png',
            ],

            
        ];
    
        foreach ($products as $key => $product) {
            Products::create($product);
        }
    
}

}