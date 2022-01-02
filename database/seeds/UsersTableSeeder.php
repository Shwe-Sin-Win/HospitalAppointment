<?php

use Illuminate\Database\Seeder;

use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=User::create([
        	'name' => 'Hnin Hnin Thaw',
        	'profile' => 'images/user/admin1.png',
        	'email' =>'newlife@gmail.com',
        	'password' =>Hash::make('987654321'),
        	'phone' => '09264665591',
        	'address' =>'Yangon'
        ]);
        $admin->assignRole('admin');

        $customer=User::create([
        	'name' => 'Lwin Lwin Soe',
        	'profile' => 'images/user/customer1.png',
        	'email' =>'lwinlwin123@gmail.com',
        	'password' =>Hash::make('987654321'),
        	'phone' => '0933439390',
        	'address' =>'Mandalay'
        ]);

        $customer->assignRole('customer');
    }
}
