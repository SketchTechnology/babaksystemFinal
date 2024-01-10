<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MultiTableSeeder extends Seeder
{
   
    public function run(): void
    {
        DB::beginTransaction();

        try {
             $userID = DB::table('users')->insertGetId([
                'name' => 'Super Admin',
                'email' => 'super@babek.com',
                'password' => bcrypt('password'),
                'role' => 'admin',
            ]);

             $roleID = DB::table('roles')->insertGetId([
                'name' => 'Super',
            ]);

             $abilities = [
                'companies.view', 'companies.create', 'companies.update', 'companies.delete',
                'users.view', 'users.create', 'users.update', 'users.delete',
                'roles.view', 'roles.create', 'roles.update', 'roles.delete',
                'admins.create', 'admins.view', 'admins.update', 'admins.delete',
            ];

            $abilityData = array_map(function ($ability) use ($roleID) {
                return [
                    'role_id' => $roleID,
                    'ability' => $ability,
                    'type' => 'allow',
                ];
            }, $abilities);

            DB::table('role_abilities')->insert($abilityData);

             DB::table('role_user')->insert([
                 'authorizable_type' => 'app\models\user',  
                'authorizable_id' => $userID,
                'role_id' => $roleID,
             ]);

             DB::commit();
        } catch (\Exception $e) {
             DB::rollback();
            throw $e;
        }
    }
}
