<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::where('email', '=', 'admin@assetscryptoview.com')->first();
        if($admin === null){
            DB::table('users')->insert([
                'name' => 'Admin Panel',
                'status' => 1,
                'admin' => 1,
                'username' => "admin",
                'email' => 'admin@assetscryptoview.com',
                'email_verified_at' => \Carbon\Carbon::now(),
                'password' => Hash::make('ASSETSVIWER'),
            ]);
        }
    }

}
