<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class demo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=
        [   
            'name'=>'Le Hoai han',
            'email'=>'hanhoai08091996@gmail.com',
            'password'=>bcrypt('121212'),

        ];
        DB::table('users')->insert($data);
    }
}
