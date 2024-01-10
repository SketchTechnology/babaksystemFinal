<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::beginTransaction();

        try {
            // Insert into table1
            $userID = DB::table('users')->insertGetId([
                'name' => 'Super Admin',
                'email' => 'super@babek.com',
                'password' => bcrypt('password'),
                'role' => 'admin',
            ]);

            // Insert into table2
            $roleID = DB::table('roles')->insertGetId([
                'name' => 'Super',
            ]);

            // Insert into table3 (role_abilities)
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

            // Insert into table4 (role_user)
            DB::table('role_user')->insert([
                 'authorizable_type' => 'app\models\users', // Corrected the namespace
                'authorizable_id' => $userID,
                'role_id' => $roleID,
                // ... other columns
            ]);

            // If all the inserts are successful, commit the transaction
            DB::commit();
        } catch (\Exception $e) {
            // If an error occurs, rollback the transaction
            DB::rollback();
            throw $e;
        }
    }
}
