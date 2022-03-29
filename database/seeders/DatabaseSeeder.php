<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
      
        DB::table('users')->insert([
            'name' =>'Admin',
            'email' =>'admin@gmail.com',
            'SDT' => '098765678',
            'dia_chi' => '203 Lý Thường Kiệt -TPHCM ',
            'password'=>bcrypt('123456'),
        ]);
          
        DB::table('users')->insert([
            'name' =>'Hoa Anh',             
            'email' =>'hoa@gmail.com',
            'SDT' => '0984565433',
            'dia_chi' => '12 Hoàng Hoa Thám -TPHCM ',
            'password'=>bcrypt('123456'),
        ]);
        
        DB::table('users')->insert([
            'name' =>'Member',
            'email' =>'member@gmail.com',
            'SDT' => '098345643',
            'dia_chi' => '20 Hoàn Kiếm -Hà Nội ',
            'password'=>bcrypt('123456'),
        ]);
        

    

        

    }
}