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

                'title' => 'CanonSX70',
                'price' => 500,
                'description' => 'Good DSLR camera',
                'quantity' => 15,
                'category' => 'cameras',
                'image' => 'primg/canon_sx70_hs.jpeg',
            ],

            [
                'title' => 'FujiFilmx100',
                'price' => 1000,
                'description' => 'Great high end camera',
                'quantity' => 15,
                'category' => 'cameras',
                'image' => 'primg/fujifilm_x100v.jpeg',
            ],

            [
                'title' => 'Olympus-PL9',
                'price' => 750,
                'description' => 'Good for overall camera',
                'quantity' => 15,
                'category' => 'cameras',
                'image' => 'primg/olympus_pen_e-pl9.jpeg',
            ],
            
            [
                'title' => 'Polaroid',
                'price' => 200,
                'description' => 'Vintage camera',
                'quantity' => 15,
                'category' => 'cameras',
                'image' => 'primg/polaroid.jpeg',
            ],
            
            [
                'title' => 'sony-ZV1',
                'price' => 1200,
                'description' => 'Proffessional Camera',
                'quantity' => 15,
                'category' => 'cameras',
                'image' => 'primg/sony_zv1.jpeg',
            ],

            [
                'title' => 'Dell XPS',
                'price' => 1200,
                'description' => 'Windows Laptop',
                'quantity' => 15,
                'category' => 'laptops',
                'image' => 'primg/dell_xps.jpeg',
            ],

            [
                'title' => 'Legion',
                'price' => 1500,
                'description' => 'Gaming Laptop',
                'quantity' => 15,
                'category' => 'laptops',
                'image' => 'primg/legion_7.jpeg',
            ],

            [
                'title' => 'MacBook Pto',
                'price' => 1899,
                'description' => 'Apple laptop with M1',
                'quantity' => 15,
                'category' => 'laptops',
                'image' => 'primg/macbook_pro.jpeg',
            ],

            [
                'title' => 'Samsung Book',
                'price' => 999,
                'description' => 'Samsung Laptop',
                'quantity' => 15,
                'category' => 'laptops',
                'image' => 'primg/samsung_book2_pro.jpeg',
            ],

            [
                'title' => 'Surface Laptop',
                'price' => 1500,
                'description' => 'Microsoft Laptop',
                'quantity' => 15,
                'category' => 'laptops',
                'image' => 'primg/surface_laptop.jpeg',
            ],
            
            [
                'title' => 'Samsung Z Fold',
                'price' => 1800,
                'description' => 'Folding phone',
                'quantity' => 10,
                'category' => 'smartphones',
                'image' => 'primg/fold.png',
            ],
                        
            [
                'title' => 'iPhone 14 Pro',
                'price' => 1200,
                'description' => 'Apple pro phone',
                'quantity' => 15,
                'category' => 'smartphones',
                'image' => 'primg/iphone.png',
            ],
                        
            [
                'title' => 'Nothing Phone',
                'price' => 649,
                'description' => 'First phone from a new company',
                'quantity' => 15,
                'category' => 'smartphones',
                'image' => 'primg/nothing.png',
            ],
                        
            [
                'title' => 'Google Pxel',
                'price' => 799,
                'description' => 'Google phone',
                'quantity' => 15,
                'category' => 'smartphones',
                'image' => 'primg/pixel.png',
            ],
                        
            [
                'title' => 'Samsung s23 Ultra',
                'price' => 1300,
                'description' => 'Samsung high end phone',
                'quantity' => 15,
                'category' => 'smartphones',
                'image' => 'primg/s23.png',
            ],
                                    
            [
                'title' => 'iPad Air',
                'price' => 799,
                'description' => 'Apple ipad air with M1',
                'quantity' => 15,
                'category' => 'tablets',
                'image' => 'primg/ipad_air.png',
            ],
                                                
            [
                'title' => 'iPad Pro',
                'price' => 999,
                'description' => 'High end apple ipad',
                'quantity' => 15,
                'category' => 'tablets',
                'image' => 'primg/ipad_pro.png',
            ],
                                                
            [
                'title' => 'iPad',
                'price' => 399,
                'description' => 'Most affordable apple iPad',
                'quantity' => 15,
                'category' => 'tablets',
                'image' => 'primg/ipad.png',
            ],
                                                
            [
                'title' => 'Samsung tab a8',
                'price' => 350,
                'description' => 'Samsung entry lavel tablet with android',
                'quantity' => 15,
                'category' => 'tablets',
                'image' => 'primg/tab_a8.png',
            ],
                                                
            [
                'title' => 'Samsung tab s8 Ultra',
                'price' => 999,
                'description' => 'High end samsung tablet',
                'quantity' => 15,
                'category' => 'tablets',
                'image' => 'primg/tab_s8_ultra.png',
            ],
                                                           
            [
                'title' => 'LG 4K',
                'price' => 1000,
                'description' => '43 inch 4K tv',
                'quantity' => 15,
                'category' => 'tvs',
                'image' => 'primg/lg_4k_43.jpeg',
            ],
                                                                       
            [
                'title' => 'LG 4K',
                'price' => 2000,
                'description' => 'oled 77 inch 4k tv',
                'quantity' => 15,
                'category' => 'tvs',
                'image' => 'primg/lg_4k_77.jpeg',
            ],
                                                                       
            [
                'title' => 'Samsung 8K',
                'price' => 5000,
                'description' => 'Samsung 85 inch 8K tv',
                'quantity' => 15,
                'category' => 'tvs',
                'image' => 'primg/samsung_8k_85.jpeg',
            ],
                                                                       
            [
                'title' => 'Sony 4K',
                'price' => 1700,
                'description' => 'Sony 65 inch 4K tv',
                'quantity' => 15,
                'category' => 'tvs',
                'image' => 'primg/sony_4k_65.jpeg',
            ],
                                                                       
            [
                'title' => 'Sony 4K',
                'price' => 1950,
                'description' => 'Sony 4K 77 inch tv',
                'quantity' => 15,
                'category' => 'tvs',
                'image' => 'primg/sony_4k_77.jpeg',
            ],
            
        ];

        foreach ($products as $key => $product) {
            Products::create($product);
        }
    }
}
