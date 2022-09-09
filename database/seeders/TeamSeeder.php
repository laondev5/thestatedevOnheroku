<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\TeamModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
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
                'name' => 'team1',
                'email' => 'dev@gmail.com',
                'title' => 'CEO',
                'p_number' => '12345678',
                'image_path' => 'empty',
                'description' => 'very good guy'
            ],

            [
                'name' => 'team2',
                'email' => 'dev2@gmail.com',
                'title' => 'cro',
                'p_number' => '23456767',
                'image_path' => 'empty',
                'description' => 'very good girl'
            ]
        ];

        foreach($posts as $key => $value){
            TeamModel::create($value);
        };

    }
}
