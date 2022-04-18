<?php

namespace Database\Seeders;

<<<<<<< HEAD
=======
use App\Models\Specialization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
>>>>>>> 3abbe9a20101da6a35b2b6d345e4d6901f9c30cf
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $this->call([
<<<<<<< HEAD
            RolesAndPermissionsSeeder::class,
            UserTableSeeder::class,
=======
            RoleSeeder::class,
            UserSeeder::class,
            CustomerSeeder::class,
            SpecializationSeeder::class,
            TecnicianSeeder::class,
            TransactionSeeder::class,
            MessageSeeder::class,
>>>>>>> 3abbe9a20101da6a35b2b6d345e4d6901f9c30cf
        ]);
    }
}
