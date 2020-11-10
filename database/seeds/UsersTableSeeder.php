<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'DAUDI KAJILO',
            'email' => 'superadmin@daviesacl.com',
            'password' => Hash::make('password'),
        ]);

        //retrieving superadmin role from roles table
        $role = Role::find(1);

        //assign role to user
        $user->assignRole($role);
        
    }
}
