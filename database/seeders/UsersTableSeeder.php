<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Test User',
                'email' => 'test@example.com',
                'email_verified_at' => '2026-01-08 17:48:19',
                'password' => '$2y$12$YS7.7.RkniKK6joDBMN25OJ0wlxJC05up3.ngYqcdMzEgKDXbUxxK',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'created_at' => '2026-01-08 17:48:19',
                'updated_at' => '2026-01-08 17:48:19',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'admin',
                'email' => 'bestkavindu@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$.sFDXCQiDtYaziShsowSbO.wVeZJbAEZQ3UVqo6hB5ISSURnFw72q',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'created_at' => '2026-01-08 17:48:59',
                'updated_at' => '2026-01-08 17:48:59',
            ),
        ));
        
        
    }
}