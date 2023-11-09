<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $users = [
        //             [
        //                 'name' => 'Chandra Ardiansyah',
        //                 'email' => 'example.com',
        //                 'password' => Hash::make('password'),
        //                 'email_verified_at' => Carbon::now(),
        //             ],
        //             [
        //                 'name' => 'Chandra Ardi',
        //                 'email' => 'example.zom',
        //                 'password' => Hash::make('password'),
        //                 'email_verified_at' => Carbon::now(),
        //             ]
        //     ];

        // //Membuat beberapa user dengan menggunakan array dimension
        // foreach($users as $user){
        //     User::create($user);
        // }

        //Membuat beberapa user dengan menggunakan collection
        // collect([
        //     [
        //         'name' => 'Chandra Ardiansyah',
        //         'email' => 'example.com',
        //         'password' => Hash::make('password'),
        //         'email_verified_at' => Carbon::now(),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'Chandra Ardi',
        //         'email' => 'example.zom',
        //         'password' => Hash::make('password'),
        //         'email_verified_at' => Carbon::now(),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]
        // ])->each(function ($user){
        //     DB::table('users')->insert($user);
        // });

        //Membuat satu user saja
        // User::create([
        //     'name' => 'Chandra Ardiansyah',
        //     'email' => 'example.com',
        //     'password' => Hash::make('password'),
        //     'email_verified_at' => Carbon::now(),
        // ]);

        //Membuat seeder dengan file yang berbeda
        $this->call([
            UsersSeeder::class,
            TasksSeeder::class
        ]);
        // Task::factory(10)->create();
    }
}
