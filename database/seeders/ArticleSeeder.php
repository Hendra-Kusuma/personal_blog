<?php

namespace Database\Seeders;

use App\Models\ArticleModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([[
            'title'=>'Anak-anak senja',
            'image_path'=>'test/test',
            'content'=>'lorem ipsum sim tuduror',
            'user_id'=>'1',
            'publisher'=>'Hendra',
        ],
        [
            'title'=>'Sabar dalam berusaha',
            'image_path'=>'test/oke',
            'content'=>'lorem ipsum sim yahanana yahanana yabanana',
            'user_id'=>'2',
            'publisher'=>'Budi',
        ]
    
    ])->each(function($data){
        ArticleModel::create($data);
    });
    }

}
