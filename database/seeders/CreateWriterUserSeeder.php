<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class CreateWriterUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'firstname' => 'Writer',
            'lastname' => 'Writer',
            'email' => 'writer@gmail.com',
            'image_path' => '/images/avatars/user.png',
            'password' => bcrypt('writer'),
        ]);

        $role = Role::create(['name' => 'Writer']);

        $permissions = [
            '5' => 5,
            '6' => 6,
            '7' => 7,
            '8' => 8,
            '19' => 19,
            '21' => 21,
        ];

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);
    }
}