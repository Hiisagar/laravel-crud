<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $json = File::get(path : 'database/json/user.json');
        $users = collect(json_decode($json));

        $users->each(function($u) {
            UserModel::create([
                'name'  => $u->name,
                'email' => $u->email,
                'age'   => $u->age,
                'city'  => $u->city,
            ]);
        });
    }
}
