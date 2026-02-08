<?php

namespace Database\Seeders;

use App\Models\User;
<<<<<<< HEAD
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
=======
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
>>>>>>> a41c3e927a342b9e18c9a38baf3f01295260782d
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
<<<<<<< HEAD
=======
    use WithoutModelEvents;

>>>>>>> a41c3e927a342b9e18c9a38baf3f01295260782d
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD

        $this->call([
            StudentSeeder::class
        ]);

        $this->call([
            UserSeeder::class
        ]);

=======
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
>>>>>>> a41c3e927a342b9e18c9a38baf3f01295260782d
    }
}
