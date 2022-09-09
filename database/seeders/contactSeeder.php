<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\AssignOp\Concat;

class contactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'name' => 'user1',
                'email' => 'user@gmail.com',
                'title' => 'i want to learn mobile development',
                
            ],

            [
                'name' => 'user2',
                'email' => 'user2@gmail.com',
                'message' => 'i want to learn wed development',
                
            ]
        ];

        foreach($posts as $key => $value){
            Contact::create($value);
        };
    }
}
