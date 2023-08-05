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
                'id' => 3,
                'role' => 'user',
                'name' => 'User',
                'email' => 'user@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ifkjHwxug39UU1hj6nVP4O8pJLhiiyejbRbVCO9842e5yT4GdeOMC',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2023-08-02 02:56:50',
                'updated_at' => '2023-08-02 02:56:50',
            ),
            1 => 
            array (
                'id' => 5,
                'role' => 'admin',
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$e/0bsWqiuFcQZi5z7NfJruhl8oK1R0.hKh9H9bWDeBajy9BE0BVAi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2023-08-02 03:14:31',
                'updated_at' => '2023-08-02 03:14:31',
            ),
        ));
        
        
    }
}