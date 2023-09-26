<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([[
            'name'=>'Hendra Kusuma',
            'email'=>'hendraHK@gmail.com',
            'email_verified_at'=>Carbon::now(),
            'password'=>'ModulusFb20',
            'remember_token'=>'321654978'
        ],
        [
            'name'=>'joni 99',
            'email'=>'ngacoHaha@gmail.com',
            'email_verified_at'=>Carbon::now(),
            'password'=>'Modulus1234',
            'remember_token'=>'753951846'
        ]
        ])->each(function($data){
            User::create($data);
        });
        ;
    }
}
