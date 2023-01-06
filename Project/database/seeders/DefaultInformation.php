<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;

class DefaultInformation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'mobile'=>'0799999999',
            'password'=>bcrypt('admin'),
            'image'=>null,
            'type'=>'super',
        ]);

        User::create([
            'name'=>'user',
            'email'=>'user@gmail.com',
            'mobile'=>'0799999999',
            'password'=>bcrypt('user'),
        ]);
    }
}
