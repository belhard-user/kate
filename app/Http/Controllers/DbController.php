<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DbController extends Controller
{
    public function insert()
    {
        $data = [
            [
                'name' => 'Neo',
                'age' => 23,
                'email' => 'neo@gmail.com',
                'active' => 1,
                'description' => 'lorem ipsum dolor sit',
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
            ],
            [
                'name' => 'Tank',
                'age' => 43,
                'email' => 'tank@gmail.com',
                'active' => 1,
                'description' => 'lorem ipsum dolor sit',
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
            ],
            [
                'name' => 'Trinity',
                'age' => 143,
                'email' => 'trinity@gmail.com',
                'active' => 0,
                'description' => 'lorem ipsum dolor sit',
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
            ],
        ];
        DB::table('test')->insert($data);

        return view('db.all');
    }
}
