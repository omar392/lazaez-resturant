<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([

            'name'=>'Super Admin',
            'email'=>'lazaez@admin.com',
            'password'=>Hash::make('123123'),

        ]);
    }
}
